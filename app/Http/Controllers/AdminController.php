<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Exports\ParticipantsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Checkout;
use App\Models\CheckoutParticipant;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
        // Calculate global totals without search filter
        $globalTotals = [
            'total_participants' => CheckoutParticipant::whereHas('checkout', function($query) {
                $query->whereIn('status', ['paid', 'verified']);
            })->count(),
            'total_income' => Checkout::whereIn('status', ['paid', 'verified'])->sum('total_amount'),
            'pending' => Checkout::where('status', 'pending')->count(),
            'waiting' => Checkout::where('status', 'waiting')->count(),
            'paid' => Checkout::whereIn('status', ['paid', 'verified'])->count(),
            'expired' => Checkout::where('status', 'expired')->count(),
        ];

        // Apply search filter only to the paginated results
        $query = Checkout::with(['participants' => function($query) {
            $query->orderBy('created_at', 'desc');
        }]);

        if ($request->has('search') && !empty($request->search)) {
            $searchTerm = $request->search;
            $query->where(function($q) use ($searchTerm) {
                // Search in checkout fields
                $q->where('order_number', 'like', "%{$searchTerm}%")
                    ->orWhere('status', 'like', "%{$searchTerm}%")
                    ->orWhere('total_amount', 'like', "%{$searchTerm}%")
                    // Search in participants through the relationship
                    ->orWhereHas('participants', function($q) use ($searchTerm) {
                        $q->where(function($subQ) use ($searchTerm) {
                            $subQ->where('full_name', 'like', "%{$searchTerm}%")
                                ->orWhere('whatsapp_number', 'like', "%{$searchTerm}%")
                                ->orWhere('email', 'like', "%{$searchTerm}%")
                                ->orWhere('nik', 'like', "%{$searchTerm}%")
                                ->orWhere('city', 'like', "%{$searchTerm}%")
                                ->orWhere('jersey_size', 'like', "%{$searchTerm}%");
                        });
                    });
            });
        }

        $checkouts = $query->orderBy('created_at', 'desc')
            ->paginate(10)
            ->withQueryString();

        return view('admin.dashboard', [
            'checkouts' => $checkouts,
            'totals' => $globalTotals
        ]);
    }

    public function show($id)
    {
        $participant = Participant::with(['user', 'payment'])
            ->findOrFail($id);

        return view('admin.show', compact('participant'));
    }

    public function export()
    {
        return Excel::download(new ParticipantsExport, 'participants.xlsx');
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,waiting,paid,expired,verified',
        ]);
        $checkout = \App\Models\Checkout::findOrFail($id);
        $checkout->status = $request->status;
        $checkout->save();
        return response()->json(['success' => true]);
    }

    public function orderDetail($order_number)
    {
        $checkout = \App\Models\Checkout::with('participants')->where('order_number', $order_number)->firstOrFail();
        // Ambil semua registration yang email/nik-nya sama dengan peserta di checkout
        $registrations = \App\Models\Registration::whereIn('nik', $checkout->participants->pluck('nik'))
            ->orWhereIn('email', $checkout->participants->pluck('email'))
            ->get();
        return view('admin.order_detail', compact('checkout', 'registrations'));
    }

    public function editOrder($order_number)
    {
        $checkout = \App\Models\Checkout::with('participants')->where('order_number', $order_number)->firstOrFail();
        $registrations = \App\Models\Registration::whereIn('nik', $checkout->participants->pluck('nik'))
            ->orWhereIn('email', $checkout->participants->pluck('email'))
            ->get();
        return view('admin.edit_order', compact('checkout', 'registrations'));
    }

    public function updateOrder(Request $request, $order_number)
    {
        $checkout = \App\Models\Checkout::with('participants')->where('order_number', $order_number)->firstOrFail();
        $registrations = \App\Models\Registration::whereIn('nik', $checkout->participants->pluck('nik'))
            ->orWhereIn('email', $checkout->participants->pluck('email'))
            ->get();
        // Validasi dan update data peserta
        foreach ($registrations as $reg) {
            $reg->update($request->input('registrations.'.$reg->id));
        }
        // Update status jika ada
        if ($request->has('status')) {
            $checkout->status = $request->status;
            $checkout->save();
        }
        return redirect()->route('admin.orderDetail', $order_number)->with('success', 'Data order dan peserta berhasil diperbarui.');
    }

    public function deleteOrder($order_number)
    {
        $checkout = Checkout::where('order_number', $order_number)->firstOrFail();
        $checkout->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Order berhasil dihapus.');
    }
}

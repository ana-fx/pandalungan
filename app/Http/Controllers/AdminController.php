<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Exports\ParticipantsExport;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function dashboard()
    {
        $checkouts = \App\Models\Checkout::with('participants')->latest()->paginate(10);
        return view('admin.dashboard', compact('checkouts'));
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
}

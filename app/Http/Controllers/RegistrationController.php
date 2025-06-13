<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use Illuminate\Support\Facades\DB;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('home');
    }

    public function __invoke(Request $request)
    {
        if ($request->isMethod('get')) {
            return $this->create();
        }

        $request->validate([
            'registrants' => ['required', 'array', 'min:1'],
            'registrants.*.nik' => ['required', 'string', 'size:16', 'distinct', 'unique:registrations,nik'],
            'registrants.*.full_name' => ['required', 'string', 'max:255'],
            'registrants.*.whatsapp_number' => ['required', 'string', 'max:20'],
            'registrants.*.email' => ['required', 'email', 'distinct', 'unique:registrations,email'],
            'registrants.*.address' => ['required', 'string'],
            'registrants.*.date_of_birth' => ['required', 'date'],
            'registrants.*.city' => ['required', 'string', 'max:255'],
            'registrants.*.jersey_size' => ['required', 'string', 'in:XS,S,M,L,XL,XXL,XXXL'],
            'registrants.*.blood_type' => ['nullable', 'string', 'in:A,B,AB,O'],
            'registrants.*.emergency_contact_number' => ['required', 'string', 'max:20'],
            'registrants.*.medical_conditions' => ['nullable', 'string'],
        ], [
            'registrants.*.nik.unique' => 'NIK sudah terdaftar.',
            'registrants.*.nik.distinct' => 'NIK tidak boleh sama dengan pendaftar lain.',
            'registrants.*.email.unique' => 'Email sudah terdaftar.',
            'registrants.*.email.distinct' => 'Email tidak boleh sama dengan pendaftar lain.',
        ]);

        try {
            DB::beginTransaction();

            foreach ($request->registrants as $registrantData) {
                Registration::create($registrantData);
            }

            DB::commit();

            $count = count($request->registrants);
            $message = $count > 1
                ? "Berhasil mendaftarkan {$count} peserta!"
                : "Berhasil mendaftarkan 1 peserta!";

            return redirect()->route('home')->with('success', $message);
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()->withErrors(['error' => 'Terjadi kesalahan. Silakan coba lagi.']);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $registrations = Registration::latest()->paginate(10);
        return view('admin.dashboard', compact('registrations'));
    }

    public function show(Registration $registration)
    {
        return view('admin.show', compact('registration'));
    }

    public function export()
    {
        $registrations = Registration::all();
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="registrations.csv"',
        ];

        $callback = function() use ($registrations) {
            $file = fopen('php://output', 'w');
            fputcsv($file, [
                'ID', 'NIK', 'Nama Lengkap', 'WhatsApp', 'Email', 'Alamat',
                'Tanggal Lahir', 'Kota', 'Ukuran Jersey', 'Golongan Darah',
                'Kontak Darurat', 'Penyakit Bawaan', 'Tanggal Daftar'
            ]);

            foreach ($registrations as $registration) {
                fputcsv($file, [
                    $registration->id,
                    $registration->nik,
                    $registration->full_name,
                    $registration->whatsapp_number,
                    $registration->email,
                    $registration->address,
                    $registration->date_of_birth,
                    $registration->city,
                    $registration->jersey_size,
                    $registration->blood_type,
                    $registration->emergency_contact_number,
                    $registration->medical_conditions,
                    $registration->created_at
                ]);
            }
            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}

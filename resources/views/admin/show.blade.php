<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pendaftaran</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <div class="min-h-screen">
        <nav class="bg-white shadow-lg">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <div class="flex-shrink-0 flex items-center">
                            <a href="{{ route('admin.dashboard') }}" class="text-xl font-bold">← Kembali ke Dashboard</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <main class="py-10">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                    <h2 class="text-2xl font-bold mb-6">Detail Pendaftaran</h2>

                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-lg font-semibold mb-2">Data Pribadi</h3>
                            <dl class="space-y-2">
                                <div>
                                    <dt class="font-medium">NIK</dt>
                                    <dd>{{ $registration->nik }}</dd>
                                </div>
                                <div>
                                    <dt class="font-medium">Nama Lengkap</dt>
                                    <dd>{{ $registration->full_name }}</dd>
                                </div>
                                <div>
                                    <dt class="font-medium">Email</dt>
                                    <dd>{{ $registration->email }}</dd>
                                </div>
                                <div>
                                    <dt class="font-medium">WhatsApp</dt>
                                    <dd>{{ $registration->whatsapp_number }}</dd>
                                </div>
                                <div>
                                    <dt class="font-medium">Tanggal Lahir</dt>
                                    <dd>{{ $registration->date_of_birth->format('d/m/Y') }}</dd>
                                </div>
                            </dl>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold mb-2">Informasi Tambahan</h3>
                            <dl class="space-y-2">
                                <div>
                                    <dt class="font-medium">Alamat</dt>
                                    <dd>{{ $registration->address }}</dd>
                                </div>
                                <div>
                                    <dt class="font-medium">Kota</dt>
                                    <dd>{{ $registration->city }}</dd>
                                </div>
                                <div>
                                    <dt class="font-medium">Ukuran Jersey</dt>
                                    <dd>{{ $registration->jersey_size }}</dd>
                                </div>
                                <div>
                                    <dt class="font-medium">Golongan Darah</dt>
                                    <dd>{{ $registration->blood_type ?? 'Tidak diisi' }}</dd>
                                </div>
                                <div>
                                    <dt class="font-medium">Kontak Darurat</dt>
                                    <dd>{{ $registration->emergency_contact_number }}</dd>
                                </div>
                                <div>
                                    <dt class="font-medium">Penyakit Bawaan</dt>
                                    <dd>{{ $registration->medical_conditions ?? 'Tidak ada' }}</dd>
                                </div>
                            </dl>
                        </div>
                    </div>

                    <div class="mt-6 pt-6 border-t">
                        <h3 class="text-lg font-semibold mb-2">Informasi Pendaftaran</h3>
                        <p>Terdaftar pada: {{ $registration->created_at->format('d/m/Y H:i') }}</p>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>

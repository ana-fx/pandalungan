@extends('layouts.app')

@section('title', 'Form Pendaftaran Event')

@section('content')
<div class="max-w-4xl mx-auto bg-white/90 shadow-2xl rounded-3xl overflow-hidden mt-8 mb-12 border border-green-200">
    <div class="p-8">
        <div class="flex flex-col sm:flex-row justify-between items-center mb-8 gap-4">
            <h2 class="text-3xl font-extrabold text-green-800 flex items-center gap-2">
                <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 01-8 0M12 3v4m0 0a4 4 0 01-4 4H4m8-4a4 4 0 004 4h4"/></svg>
                Form Pendaftaran Night Run
            </h2>
            <button type="button" onclick="addRegistrant()" id="addRegistrantBtn" class="px-5 py-2 bg-green-600 text-white rounded-full font-bold shadow hover:bg-green-700 transition flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                Tambah Pendaftar
            </button>
        </div>

        @if(session('success'))
            <div class="mb-6 flex items-center gap-3 p-4 bg-green-100 border border-green-400 text-green-800 rounded-xl shadow">
                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                <span>{{ session('success') }}</span>
            </div>
        @endif
        @if($errors->any())
            <div class="mb-6 flex items-start gap-3 p-4 bg-red-100 border border-red-400 text-red-800 rounded-xl shadow">
                <svg class="w-6 h-6 text-red-500 mt-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                <ul class="list-disc pl-5">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('registration.store') }}" method="POST" class="space-y-8" id="registrationForm">
            @csrf
            <div id="registrantsContainer">
                <!-- Template for registrant form -->
                <div class="registrant-form bg-white border-2 border-green-300 shadow-md rounded-2xl p-6 mb-8 relative transition hover:shadow-xl">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-bold text-green-700">Pendaftar #1</h3>
                        <button type="button" onclick="removeRegistrant(this)" class="text-red-600 hover:text-red-800 hidden remove-btn rounded-full p-2 bg-red-50 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </button>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- NIK -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1 flex items-center gap-1">
                                <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 11c0-1.104-.896-2-2-2s-2 .896-2 2 .896 2 2 2 2-.896 2-2zm0 0c0 1.104.896 2 2 2s2-.896 2-2-.896-2-2-2-2 .896-2 2z"/></svg>
                                NIK
                            </label>
                        <input type="text" name="registrations[0][nik]" required pattern="\d{16}" minlength="16" maxlength="16" inputmode="numeric" autocomplete="off"
                                class="mt-1 block w-full rounded-lg border-gray-300 shadow focus:border-green-500 focus:ring-green-500 text-base px-4 py-2"
                            placeholder="Masukkan 16 digit NIK" oninput="this.value=this.value.replace(/[^0-9]/g,'')">
                    </div>
                    <!-- Nama Lengkap -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1">Nama Lengkap</label>
                        <input type="text" name="registrations[0][full_name]" required maxlength="255"
                                class="mt-1 block w-full rounded-lg border-gray-300 shadow focus:border-green-500 focus:ring-green-500 text-base px-4 py-2"
                            placeholder="Masukkan nama lengkap">
                    </div>
                    <!-- Email -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1">Email</label>
                        <input type="email" name="registrations[0][email]" required maxlength="255" autocomplete="email"
                                class="mt-1 block w-full rounded-lg border-gray-300 shadow focus:border-green-500 focus:ring-green-500 text-base px-4 py-2"
                            placeholder="Masukkan alamat email">
                    </div>
                    <!-- Nomor WhatsApp -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1">Nomor WhatsApp</label>
                        <input type="tel" name="registrations[0][whatsapp_number]" required pattern="\d{10,20}" minlength="10" maxlength="20" inputmode="numeric" autocomplete="off"
                                class="mt-1 block w-full rounded-lg border-gray-300 shadow focus:border-green-500 focus:ring-green-500 text-base px-4 py-2"
                            placeholder="Contoh: 081234567890" oninput="this.value=this.value.replace(/[^0-9]/g,'')">
                    </div>
                    <!-- Alamat -->
                        <div class="md:col-span-2">
                            <label class="block text-sm font-semibold text-gray-700 mb-1">Alamat Lengkap</label>
                            <textarea name="registrations[0][address]" rows="2" required maxlength="500"
                                class="mt-1 block w-full rounded-lg border-gray-300 shadow focus:border-green-500 focus:ring-green-500 text-base px-4 py-2"
                            placeholder="Masukkan alamat lengkap"></textarea>
                    </div>
                    <!-- Tanggal Lahir -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1">Tanggal Lahir</label>
                        <input type="date" name="registrations[0][date_of_birth]" required max="{{ date('Y-m-d') }}"
                                class="mt-1 block w-full rounded-lg border-gray-300 shadow focus:border-green-500 focus:ring-green-500 text-base px-4 py-2">
                    </div>
                    <!-- Kota -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1">Kota</label>
                        <input type="text" name="registrations[0][city]" required maxlength="255"
                                class="mt-1 block w-full rounded-lg border-gray-300 shadow focus:border-green-500 focus:ring-green-500 text-base px-4 py-2"
                            placeholder="Masukkan kota domisili">
                    </div>
                    <!-- Ukuran Jersey -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1">Ukuran Jersey</label>
                        <select name="registrations[0][jersey_size]" required
                                class="mt-1 block w-full rounded-lg border-gray-300 shadow focus:border-green-500 focus:ring-green-500 text-base px-4 py-2">
                            <option value="">Pilih ukuran jersey</option>
                            <option value="XS">XS</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                            <option value="XXL">XXL</option>
                        </select>
                    </div>
                    <!-- Golongan Darah -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1">Golongan Darah</label>
                        <select name="registrations[0][blood_type]" required
                                class="mt-1 block w-full rounded-lg border-gray-300 shadow focus:border-green-500 focus:ring-green-500 text-base px-4 py-2">
                            <option value="">Pilih golongan darah</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                            <option value="O">O</option>
                        </select>
                    </div>
                    <!-- Nomor Kontak Darurat -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1">Nomor Kontak Darurat</label>
                        <input type="tel" name="registrations[0][emergency_contact_number]" required pattern="\d{10,20}" minlength="10" maxlength="20" inputmode="numeric" autocomplete="off"
                                class="mt-1 block w-full rounded-lg border-gray-300 shadow focus:border-green-500 focus:ring-green-500 text-base px-4 py-2"
                            placeholder="Contoh: 081234567890" oninput="this.value=this.value.replace(/[^0-9]/g,'')">
                    </div>
                    <!-- Riwayat Penyakit -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1">Riwayat Penyakit <span class="text-gray-400 font-normal">(opsional)</span></label>
                            <textarea name="registrations[0][medical_conditions]" rows="2" maxlength="255"
                                class="mt-1 block w-full rounded-lg border-gray-300 shadow focus:border-green-500 focus:ring-green-500 text-base px-4 py-2"
                            placeholder="Masukkan riwayat penyakit (opsional)"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Terms and Conditions -->
            <div class="mt-8 space-y-4 bg-green-50 border border-green-200 rounded-xl p-6">
                <div class="flex items-start gap-3">
                        <input id="terms" name="terms" type="checkbox" required
                        class="h-5 w-5 text-green-600 focus:ring-green-500 border-gray-300 rounded">
                    <label for="terms" class="font-medium text-gray-700 select-none">Saya menyetujui <a href="#" onclick="document.getElementById('termsModal').classList.remove('hidden');return false;" class="text-green-700 underline hover:text-green-900">syarat dan ketentuan</a> yang berlaku</label>
                </div>
                <div class="flex items-start gap-3">
                        <input id="data_confirmation" name="data_confirmation" type="checkbox" required
                        class="h-5 w-5 text-green-600 focus:ring-green-500 border-gray-300 rounded">
                    <label for="data_confirmation" class="font-medium text-gray-700 select-none">Data yang saya masukkan adalah benar dan dapat dipertanggungjawabkan</label>
                </div>
            </div>

            <div class="flex justify-end mt-8">
                <button type="submit"
                    class="inline-flex items-center gap-2 py-3 px-8 border border-transparent shadow-lg text-lg font-bold rounded-full text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                    Daftar Sekarang
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Terms Modal -->
<div id="termsModal" class="fixed inset-0 z-50 flex items-center justify-center bg-gradient-to-br from-green-200/80 via-white/80 to-emerald-100/80 backdrop-blur-sm hidden">
    <div class="relative bg-white border-2 border-green-400 shadow-2xl rounded-3xl max-w-2xl w-full mx-4 max-h-[80vh] overflow-y-auto p-8 animate-fade-in">
        <!-- Floating Close Button -->
        <button onclick="closeTerms()" class="absolute top-4 right-4 bg-green-100 hover:bg-green-200 text-green-700 rounded-full p-2 shadow transition" aria-label="Tutup">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
        <!-- Header -->
        <div class="flex items-center gap-3 mb-2">
            <div class="bg-green-100 p-2 rounded-full">
                <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-2a4 4 0 014-4h2a4 4 0 014 4v2M9 17H7a2 2 0 01-2-2v-5a2 2 0 012-2h2a2 2 0 012 2zm0 0v2a2 2 0 002 2h2a2 2 0 002-2v-2"/></svg>
            </div>
            <div>
                <h3 class="text-2xl font-extrabold text-green-800">Syarat & Ketentuan Event</h3>
                <p class="text-sm text-green-600 font-medium">Baca dengan seksama sebelum mendaftar</p>
            </div>
        </div>
        <div class="space-y-6 mt-4">
            <!-- Persyaratan Peserta -->
            <div>
                <div class="flex items-center gap-2 mb-1">
                    <span class="bg-green-100 p-1 rounded-full"><svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg></span>
                    <h4 class="font-bold text-green-700">1. Persyaratan Peserta</h4>
                </div>
                <ul class="pl-6 space-y-1">
                    <li class="flex items-start gap-2"><span class="mt-1"><svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20"><circle cx="10" cy="10" r="10"/></svg></span>Minimal berusia 17 tahun pada hari pelaksanaan</li>
                    <li class="flex items-start gap-2"><span class="mt-1"><svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20"><circle cx="10" cy="10" r="10"/></svg></span>Dalam kondisi sehat dan fit untuk berlari</li>
                    <li class="flex items-start gap-2"><span class="mt-1"><svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20"><circle cx="10" cy="10" r="10"/></svg></span>Memiliki identitas yang valid</li>
            </ul>
            </div>
            <!-- Ketentuan Event -->
            <div>
                <div class="flex items-center gap-2 mb-1">
                    <span class="bg-green-100 p-1 rounded-full"><svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M12 20h.01"/></svg></span>
                    <h4 class="font-bold text-green-700">2. Ketentuan Event</h4>
                </div>
                <ul class="pl-6 space-y-1">
                    <li class="flex items-start gap-2"><span class="mt-1"><svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><rect width="20" height="20" rx="5"/></svg></span>Peserta wajib menggunakan jersey yang telah disediakan</li>
                    <li class="flex items-start gap-2"><span class="mt-1"><svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><rect width="20" height="20" rx="5"/></svg></span>Peserta wajib mengikuti briefing sebelum event dimulai</li>
                    <li class="flex items-start gap-2"><span class="mt-1"><svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><rect width="20" height="20" rx="5"/></svg></span>Peserta wajib mematuhi rute yang telah ditentukan</li>
                    <li class="flex items-start gap-2"><span class="mt-1"><svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><rect width="20" height="20" rx="5"/></svg></span>Peserta wajib mematuhi protokol kesehatan yang berlaku</li>
            </ul>
            </div>
            <!-- Tanggung Jawab dan Risiko -->
            <div>
                <div class="flex items-center gap-2 mb-1">
                    <span class="bg-yellow-100 p-1 rounded-full"><svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 4h.01"/></svg></span>
                    <h4 class="font-bold text-yellow-700">3. Tanggung Jawab & Risiko</h4>
                </div>
                <ul class="pl-6 space-y-1">
                    <li class="flex items-start gap-2"><span class="mt-1"><svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><polygon points="10,2 2,18 18,18"/></svg></span>Peserta bertanggung jawab atas kondisi kesehatan pribadi</li>
                    <li class="flex items-start gap-2"><span class="mt-1"><svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><polygon points="10,2 2,18 18,18"/></svg></span>Panitia tidak bertanggung jawab atas kehilangan barang pribadi</li>
                    <li class="flex items-start gap-2"><span class="mt-1"><svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><polygon points="10,2 2,18 18,18"/></svg></span>Peserta memahami risiko cedera yang mungkin terjadi</li>
            </ul>
            </div>
            <!-- Pembatalan dan Refund -->
            <div>
                <div class="flex items-center gap-2 mb-1">
                    <span class="bg-red-100 p-1 rounded-full"><svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0A9 9 0 11 3 12a9 9 0 0118 0z"/></svg></span>
                    <h4 class="font-bold text-red-700">4. Pembatalan & Refund</h4>
                </div>
                <ul class="pl-6 space-y-1">
                    <li class="flex items-start gap-2"><span class="mt-1"><svg class="w-4 h-4 text-red-500" fill="currentColor" viewBox="0 0 20 20"><rect width="20" height="4" y="8" rx="2"/></svg></span>Tidak ada pengembalian biaya pendaftaran</li>
                    <li class="flex items-start gap-2"><span class="mt-1"><svg class="w-4 h-4 text-red-500" fill="currentColor" viewBox="0 0 20 20"><rect width="20" height="4" y="8" rx="2"/></svg></span>Event dapat dibatalkan jika terjadi force majeure</li>
                    <li class="flex items-start gap-2"><span class="mt-1"><svg class="w-4 h-4 text-red-500" fill="currentColor" viewBox="0 0 20 20"><rect width="20" height="4" y="8" rx="2"/></svg></span>Pendaftaran tidak dapat dialihkan ke orang lain</li>
            </ul>
            </div>
        </div>
        <div class="mt-8 flex justify-end">
            <button onclick="closeTerms()" class="px-6 py-3 bg-green-600 text-white rounded-full font-bold shadow hover:bg-green-700 transition flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                Tutup
            </button>
        </div>
    </div>
</div>

<style>
@keyframes fade-in {
  from { opacity: 0; transform: translateY(30px); }
  to { opacity: 1; transform: translateY(0); }
}
.animate-fade-in { animation: fade-in 0.4s cubic-bezier(.4,0,.2,1); }
</style>

@endsection

@push('scripts')
<script>
    let registrantCount = 1;
    const maxRegistrants = 5;

    function addRegistrant() {
        if (registrantCount >= maxRegistrants) {
            alert('Maksimal 5 pendaftar');
            return;
        }

        registrantCount++;
        const template = document.querySelector('.registrant-form').cloneNode(true);

        // Update form number and show remove button
        template.querySelector('h3').textContent = `Pendaftar #${registrantCount}`;
        template.querySelector('.remove-btn').classList.remove('hidden');

        // Update all input names with new index
        template.querySelectorAll('input, select, textarea').forEach(input => {
            const name = input.getAttribute('name');
            if (name) {
                input.setAttribute('name', name.replace('[0]', `[${registrantCount - 1}]`));
            }
        });

        // Clear all input values
        template.querySelectorAll('input, select, textarea').forEach(input => {
            if (input.type === 'checkbox') {
                input.checked = false;
            } else {
                input.value = '';
            }
        });

        document.getElementById('registrantsContainer').appendChild(template);

        // Hide add button if max registrants reached
        if (registrantCount >= maxRegistrants) {
            document.getElementById('addRegistrantBtn').classList.add('hidden');
        }
    }

    function removeRegistrant(button) {
        const form = button.closest('.registrant-form');
        form.remove();
        registrantCount--;

        // Show add button again
        document.getElementById('addRegistrantBtn').classList.remove('hidden');

        // Update remaining form numbers
        document.querySelectorAll('.registrant-form').forEach((form, index) => {
            form.querySelector('h3').textContent = `Pendaftar #${index + 1}`;
            form.querySelectorAll('input, select, textarea').forEach(input => {
                const name = input.getAttribute('name');
                if (name) {
                    input.setAttribute('name', name.replace(/\[\d+\]/, `[${index}]`));
                }
            });
        });
    }

    function closeTerms() {
        document.getElementById('termsModal').classList.add('hidden');
    }
</script>
@endpush

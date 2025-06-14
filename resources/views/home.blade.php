@extends('layouts.app')

@section('title', 'Form Pendaftaran Event')

@section('content')
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 bg-white border-b border-gray-200">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-semibold">Form Pendaftaran</h2>
            <button type="button" onclick="addRegistrant()" id="addRegistrantBtn" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600 transition">
                + Tambah Pendaftar
            </button>
        </div>

        @if(session('success'))
            <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                {{ session('success') }}
            </div>
        @endif
        @if($errors->any())
            <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                <ul class="list-disc pl-5">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('registration.store') }}" method="POST" class="space-y-6" id="registrationForm">
            @csrf
            <div id="registrantsContainer">
                <!-- Template for registrant form -->
                <div class="registrant-form bg-white shadow-sm rounded-lg p-6 mb-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-semibold">Pendaftar #1</h3>
                        <button type="button" onclick="removeRegistrant(this)" class="text-red-600 hover:text-red-800 hidden remove-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </button>
                    </div>

                    <!-- NIK -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">NIK</label>
                        <input type="text" name="registrations[0][nik]" required pattern="\d{16}" minlength="16" maxlength="16" inputmode="numeric" autocomplete="off"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-accent focus:ring-accent sm:text-sm"
                            placeholder="Masukkan 16 digit NIK" oninput="this.value=this.value.replace(/[^0-9]/g,'')">
                    </div>

                    <!-- Nama Lengkap -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                        <input type="text" name="registrations[0][full_name]" required maxlength="255"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-accent focus:ring-accent sm:text-sm"
                            placeholder="Masukkan nama lengkap">
                    </div>

                    <!-- Email -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="registrations[0][email]" required maxlength="255" autocomplete="email"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-accent focus:ring-accent sm:text-sm"
                            placeholder="Masukkan alamat email">
                    </div>

                    <!-- Nomor WhatsApp -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Nomor WhatsApp</label>
                        <input type="tel" name="registrations[0][whatsapp_number]" required pattern="\d{10,20}" minlength="10" maxlength="20" inputmode="numeric" autocomplete="off"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-accent focus:ring-accent sm:text-sm"
                            placeholder="Contoh: 081234567890" oninput="this.value=this.value.replace(/[^0-9]/g,'')">
                    </div>

                    <!-- Alamat -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Alamat Lengkap</label>
                        <textarea name="registrations[0][address]" rows="3" required maxlength="500"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-accent focus:ring-accent sm:text-sm"
                            placeholder="Masukkan alamat lengkap"></textarea>
                    </div>

                    <!-- Tanggal Lahir -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                        <input type="date" name="registrations[0][date_of_birth]" required max="{{ date('Y-m-d') }}"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-accent focus:ring-accent sm:text-sm">
                    </div>

                    <!-- Kota -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Kota</label>
                        <input type="text" name="registrations[0][city]" required maxlength="255"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-accent focus:ring-accent sm:text-sm"
                            placeholder="Masukkan kota domisili">
                    </div>

                    <!-- Ukuran Jersey -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Ukuran Jersey</label>
                        <select name="registrations[0][jersey_size]" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-accent focus:ring-accent sm:text-sm">
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
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Golongan Darah</label>
                        <select name="registrations[0][blood_type]" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-accent focus:ring-accent sm:text-sm">
                            <option value="">Pilih golongan darah</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                            <option value="O">O</option>
                        </select>
                    </div>

                    <!-- Nomor Kontak Darurat -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Nomor Kontak Darurat</label>
                        <input type="tel" name="registrations[0][emergency_contact_number]" required pattern="\d{10,20}" minlength="10" maxlength="20" inputmode="numeric" autocomplete="off"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-accent focus:ring-accent sm:text-sm"
                            placeholder="Contoh: 081234567890" oninput="this.value=this.value.replace(/[^0-9]/g,'')">
                    </div>

                    <!-- Riwayat Penyakit -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Riwayat Penyakit</label>
                        <textarea name="registrations[0][medical_conditions]" rows="3" maxlength="255"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-accent focus:ring-accent sm:text-sm"
                            placeholder="Masukkan riwayat penyakit (opsional)"></textarea>
                    </div>
                </div>
            </div>

            <!-- Terms and Conditions -->
            <div class="mt-6 space-y-4">
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="terms" name="terms" type="checkbox" required
                            class="h-4 w-4 text-accent focus:ring-accent border-gray-300 rounded">
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="terms" class="font-medium text-gray-700">Saya menyetujui syarat dan ketentuan yang berlaku</label>
                    </div>
                </div>

                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="data_confirmation" name="data_confirmation" type="checkbox" required
                            class="h-4 w-4 text-accent focus:ring-accent border-gray-300 rounded">
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="data_confirmation" class="font-medium text-gray-700">Data yang saya masukkan adalah benar dan dapat dipertanggungjawabkan</label>
                    </div>
                </div>
            </div>

            <div class="flex justify-end">
                <button type="submit"
                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-accent hover:bg-accent/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-accent">
                    Daftar Sekarang
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Terms Modal -->
<div id="termsModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white p-6 rounded-lg max-w-2xl w-full mx-4 max-h-[80vh] overflow-y-auto">
        <h3 class="text-xl font-bold mb-4">Syarat dan Ketentuan Event</h3>
        <div class="prose prose-sm">
            <h4 class="font-semibold">1. Persyaratan Peserta</h4>
            <ul class="list-disc pl-5 mb-4">
                <li>Minimal berusia 17 tahun pada hari pelaksanaan</li>
                <li>Dalam kondisi sehat dan fit untuk berlari</li>
                <li>Memiliki identitas yang valid</li>
            </ul>

            <h4 class="font-semibold">2. Ketentuan Event</h4>
            <ul class="list-disc pl-5 mb-4">
                <li>Peserta wajib menggunakan jersey yang telah disediakan</li>
                <li>Peserta wajib mengikuti briefing sebelum event dimulai</li>
                <li>Peserta wajib mematuhi rute yang telah ditentukan</li>
                <li>Peserta wajib mematuhi protokol kesehatan yang berlaku</li>
            </ul>

            <h4 class="font-semibold">3. Tanggung Jawab dan Risiko</h4>
            <ul class="list-disc pl-5 mb-4">
                <li>Peserta bertanggung jawab atas kondisi kesehatan pribadi</li>
                <li>Panitia tidak bertanggung jawab atas kehilangan barang pribadi</li>
                <li>Peserta memahami risiko cedera yang mungkin terjadi</li>
            </ul>

            <h4 class="font-semibold">4. Pembatalan dan Refund</h4>
            <ul class="list-disc pl-5 mb-4">
                <li>Tidak ada pengembalian biaya pendaftaran</li>
                <li>Event dapat dibatalkan jika terjadi force majeure</li>
                <li>Pendaftaran tidak dapat dialihkan ke orang lain</li>
            </ul>
        </div>
        <div class="mt-6 flex justify-end">
            <button onclick="closeTerms()" class="px-4 py-2 bg-accent text-white rounded hover:bg-accent/90 transition">
                Tutup
            </button>
        </div>
    </div>
</div>
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

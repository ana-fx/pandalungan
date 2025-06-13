@extends('layouts.app')

@section('title', 'Form Pendaftaran Event')

@section('content')
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 bg-white border-b border-gray-200">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-semibold">Form Pendaftaran</h2>
            <button type="button" onclick="addRegistrant()" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600 transition">
                + Tambah Pendaftar
            </button>
        </div>

        @if(session('success'))
            <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="/" class="space-y-6" id="registrationForm">
            @csrf
            <div id="registrants">
                <div class="registrant-form border rounded-lg p-4 mb-4">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-medium">Pendaftar #1</h3>
                    </div>

                    <!-- NIK -->
                    <div class="mb-4">
                        <x-input-label for="registrants[0][nik]" value="NIK" />
                        <x-text-input id="registrants[0][nik]" class="block mt-1 w-full" type="text" name="registrants[0][nik]" :value="old('registrants.0.nik')" required />
                        <x-input-error :messages="$errors->get('registrants.0.nik')" class="mt-2" />
                    </div>

                    <!-- Nama Lengkap -->
                    <div class="mb-4">
                        <x-input-label for="registrants[0][full_name]" value="Nama Lengkap" />
                        <x-text-input id="registrants[0][full_name]" class="block mt-1 w-full" type="text" name="registrants[0][full_name]" :value="old('registrants.0.full_name')" required />
                        <x-input-error :messages="$errors->get('registrants.0.full_name')" class="mt-2" />
                    </div>

                    <!-- No WhatsApp -->
                    <div class="mb-4">
                        <x-input-label for="registrants[0][whatsapp_number]" value="Nomor WhatsApp" />
                        <x-text-input id="registrants[0][whatsapp_number]" class="block mt-1 w-full" type="text" name="registrants[0][whatsapp_number]" :value="old('registrants.0.whatsapp_number')" required />
                        <x-input-error :messages="$errors->get('registrants.0.whatsapp_number')" class="mt-2" />
                    </div>

                    <!-- Email -->
                    <div class="mb-4">
                        <x-input-label for="registrants[0][email]" value="Email" />
                        <x-text-input id="registrants[0][email]" class="block mt-1 w-full" type="email" name="registrants[0][email]" :value="old('registrants.0.email')" required />
                        <x-input-error :messages="$errors->get('registrants.0.email')" class="mt-2" />
                    </div>

                    <!-- Alamat -->
                    <div class="mb-4">
                        <x-input-label for="registrants[0][address]" value="Alamat" />
                        <textarea id="registrants[0][address]" name="registrants[0][address]" rows="3" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>{{ old('registrants.0.address') }}</textarea>
                        <x-input-error :messages="$errors->get('registrants.0.address')" class="mt-2" />
                    </div>

                    <!-- Tanggal Lahir -->
                    <div class="mb-4">
                        <x-input-label for="registrants[0][date_of_birth]" value="Tanggal Lahir" />
                        <x-text-input id="registrants[0][date_of_birth]" class="block mt-1 w-full" type="date" name="registrants[0][date_of_birth]" :value="old('registrants.0.date_of_birth')" required />
                        <x-input-error :messages="$errors->get('registrants.0.date_of_birth')" class="mt-2" />
                    </div>

                    <!-- Kota -->
                    <div class="mb-4">
                        <x-input-label for="registrants[0][city]" value="Kota Tempat Tinggal" />
                        <x-text-input id="registrants[0][city]" class="block mt-1 w-full" type="text" name="registrants[0][city]" :value="old('registrants.0.city')" required />
                        <x-input-error :messages="$errors->get('registrants.0.city')" class="mt-2" />
                    </div>

                    <!-- Ukuran Jersey -->
                    <div class="mb-4">
                        <x-input-label for="registrants[0][jersey_size]" value="Ukuran Jersey" />
                        <select id="registrants[0][jersey_size]" name="registrants[0][jersey_size]" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                            <option value="">Pilih Ukuran</option>
                            <option value="XS">XS</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                            <option value="XXL">XXL</option>
                            <option value="XXXL">XXXL</option>
                        </select>
                        <x-input-error :messages="$errors->get('registrants.0.jersey_size')" class="mt-2" />
                    </div>

                    <!-- Golongan Darah -->
                    <div class="mb-4">
                        <x-input-label for="registrants[0][blood_type]" value="Golongan Darah" />
                        <select id="registrants[0][blood_type]" name="registrants[0][blood_type]" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                            <option value="">Pilih Golongan Darah</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                            <option value="O">O</option>
                        </select>
                        <x-input-error :messages="$errors->get('registrants.0.blood_type')" class="mt-2" />
                    </div>

                    <!-- Nomor Kontak Darurat -->
                    <div class="mb-4">
                        <x-input-label for="registrants[0][emergency_contact_number]" value="Nomor Kontak Darurat" />
                        <x-text-input id="registrants[0][emergency_contact_number]" class="block mt-1 w-full" type="text" name="registrants[0][emergency_contact_number]" :value="old('registrants.0.emergency_contact_number')" required />
                        <x-input-error :messages="$errors->get('registrants.0.emergency_contact_number')" class="mt-2" />
                    </div>

                    <!-- Penyakit Bawaan -->
                    <div class="mb-4">
                        <x-input-label for="registrants[0][medical_conditions]" value="Penyakit Bawaan (opsional)" />
                        <textarea id="registrants[0][medical_conditions]" name="registrants[0][medical_conditions]" rows="3" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">{{ old('registrants.0.medical_conditions') }}</textarea>
                        <x-input-error :messages="$errors->get('registrants.0.medical_conditions')" class="mt-2" />
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ml-4">
                    Daftar
                </x-primary-button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
    let registrantCount = 1;

    function addRegistrant() {
        registrantCount++;
        const template = document.querySelector('.registrant-form').cloneNode(true);

        // Update form number
        template.querySelector('h3').textContent = `Pendaftar #${registrantCount}`;

        // Add remove button for additional forms
        const header = template.querySelector('.flex');
        const removeButton = document.createElement('button');
        removeButton.type = 'button';
        removeButton.className = 'px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600 transition text-sm';
        removeButton.textContent = 'Hapus';
        removeButton.onclick = function() {
            template.remove();
            updateFormIndices();
        };
        header.appendChild(removeButton);

        // Update all input names and IDs
        template.querySelectorAll('input, select, textarea').forEach(input => {
            const newIndex = registrantCount - 1;
            input.name = input.name.replace('[0]', `[${newIndex}]`);
            input.id = input.id.replace('[0]', `[${newIndex}]`);
            input.value = ''; // Clear values
        });

        // Update all labels
        template.querySelectorAll('label').forEach(label => {
            const newIndex = registrantCount - 1;
            const forAttr = label.getAttribute('for');
            if (forAttr) {
                label.setAttribute('for', forAttr.replace('[0]', `[${newIndex}]`));
            }
        });

        document.getElementById('registrants').appendChild(template);
    }

    function updateFormIndices() {
        const forms = document.querySelectorAll('.registrant-form');
        forms.forEach((form, index) => {
            form.querySelector('h3').textContent = `Pendaftar #${index + 1}`;

            form.querySelectorAll('input, select, textarea').forEach(input => {
                input.name = input.name.replace(/\[\d+\]/, `[${index}]`);
                input.id = input.id.replace(/\[\d+\]/, `[${index}]`);
            });

            form.querySelectorAll('label').forEach(label => {
                const forAttr = label.getAttribute('for');
                if (forAttr) {
                    label.setAttribute('for', forAttr.replace(/\[\d+\]/, `[${index}]`));
                }
            });
        });
        registrantCount = forms.length;
    }
</script>
@endpush

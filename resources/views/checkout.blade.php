@extends('layouts.app')

@section('title', 'Checkout Pendaftaran - Night Run 2025')

@section('content')
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg max-w-4xl mx-auto">
    <div class="p-6 bg-white border-b border-gray-200">
        <!-- Success Message -->
        @if(session('success'))
            <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                {{ session('success') }}
            </div>
        @endif

        <!-- Order Info -->
        <div class="bg-gray-50 rounded-lg p-6 mb-8">
            <div class="flex justify-between items-start">
                <div>
                    <h2 class="text-2xl font-semibold">Order #{{ $checkout->order_number }}</h2>
                    <p class="text-gray-600 mt-1">Batas waktu pembayaran: {{ $checkout->payment_deadline->format('d M Y H:i') }}</p>
                    <p class="mt-2">
                        <span class="px-2 py-1 rounded text-xs font-semibold
                            @if($checkout->status === 'pending') bg-yellow-100 text-yellow-800
                            @elseif($checkout->status === 'paid') bg-blue-100 text-blue-800
                            @elseif($checkout->status === 'verified') bg-green-100 text-green-800
                            @elseif($checkout->status === 'expired') bg-red-100 text-red-800
                            @endif">
                            Status: {{ ucfirst($checkout->status) }}
                        </span>
                    </p>
                </div>
                <a href="#status-pembayaran" class="text-accent hover:text-accent/80">
                    Lihat Status Pembayaran
                </a>
            </div>
        </div>

        <!-- Registration Summary -->
        <div class="mb-8">
            <h2 class="text-2xl font-semibold mb-6">Ringkasan Pendaftaran</h2>

            <!-- Registration Details -->
            <div class="bg-gray-50 rounded-lg p-6 mb-6">
                <div class="space-y-4">
                    @foreach($registrants as $index => $registrant)
                    <div class="border-b border-gray-200 pb-4 last:border-0 last:pb-0">
                        <h3 class="font-semibold text-lg text-gray-800 mb-3">Pendaftar #{{ $index + 1 }}</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <p class="text-sm text-gray-600">Nama Lengkap</p>
                                <p class="font-medium">{{ $registrant['full_name'] }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">NIK</p>
                                <p class="font-medium">{{ $registrant['nik'] }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Email</p>
                                <p class="font-medium">{{ $registrant['email'] }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">No. WhatsApp</p>
                                <p class="font-medium">{{ $registrant['whatsapp_number'] }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Ukuran Jersey</p>
                                <p class="font-medium">{{ $registrant['jersey_size'] }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Payment Summary -->
            <div class="bg-gray-50 rounded-lg p-6">
                <h3 class="font-semibold text-lg text-gray-800 mb-4">Rincian Pembayaran</h3>
                <div class="space-y-2">
                    <div class="flex justify-between">
                        <span class="text-gray-600">Biaya Pendaftaran ({{ count($registrants) }}x)</span>
                        <span class="font-medium">Rp {{ number_format($checkout->total_amount, 0, ',', '.') }}</span>
                    </div>
                    <div class="flex justify-between pt-2 border-t border-gray-200">
                        <span class="font-semibold">Total Pembayaran</span>
                        <span class="font-semibold text-lg text-accent">Rp {{ number_format($checkout->total_amount, 0, ',', '.') }}</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Payment Instructions and Upload -->
        <div class="border rounded-lg p-6 bg-primary/5">
            <h3 class="text-xl font-semibold mb-4">Instruksi Pembayaran</h3>

            <!-- Bank Info -->
            <div class="bg-white rounded-lg p-4 mb-6 border">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/bank-jatim.png') }}" alt="Bank Jatim" class="h-8 mr-3">
                    <span class="font-semibold text-lg">Bank Jatim</span>
                </div>
                <div class="space-y-2">
                    <div>
                        <p class="text-sm text-gray-600">Nomor Rekening</p>
                        <div class="flex items-center gap-2">
                            <p class="font-mono text-lg font-semibold">0123456789</p>
                            <button onclick="copyToClipboard('0123456789')" class="text-accent hover:text-accent/80 text-sm">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Atas Nama</p>
                        <p class="font-medium">PANDALUNGAN NIGHT RUN 2025</p>
                    </div>
                </div>
            </div>

            <!-- Upload Bukti Pembayaran -->
            <div class="bg-white rounded-lg p-6 mb-6 border">
                <h4 class="font-semibold text-lg mb-4">Upload Bukti Pembayaran</h4>
                @if($checkout->payment_proof)
                    <div class="mb-4">
                        <p class="text-sm text-gray-700 mb-2">Bukti pembayaran yang sudah diupload:</p>
                        <img src="{{ asset('storage/'.$checkout->payment_proof) }}" alt="Bukti Pembayaran" class="max-w-xs rounded shadow border">
                    </div>
                @endif
                @if($checkout->status === 'pending' || $checkout->status === 'waiting')
                    <form action="{{ route('checkout.upload-payment', $checkout->unique_id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                        @csrf
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Pilih File Bukti Pembayaran
                            </label>
                            <input type="file" name="payment_proof" accept="image/*" {{ $checkout->payment_proof ? '' : 'required' }}
                                class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-accent file:text-white hover:file:bg-accent/90">
                            <p class="mt-2 text-sm text-gray-500">Format: JPG, PNG (Max. 2MB)</p>
                            @error('payment_proof')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-accent hover:bg-accent/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-accent">
                            {{ $checkout->payment_proof ? 'Ganti Bukti Pembayaran' : 'Upload Bukti Pembayaran' }}
                        </button>
                    </form>
                @endif
            </div>

            <!-- WhatsApp Admin Link -->
            <div class="bg-white rounded-lg p-6 border">
                <h4 class="font-semibold text-lg mb-4">Konfirmasi via WhatsApp</h4>
                <p class="text-gray-600 mb-4">Setelah upload bukti pembayaran, silakan konfirmasi ke admin melalui WhatsApp dengan menyertakan:</p>
                <ul class="list-disc list-inside text-gray-600 mb-4 space-y-1">
                    <li>Nomor Order: <span class="font-medium">{{ $checkout->order_number }}</span></li>
                    <li>Screenshot bukti pembayaran</li>
                    <li>Nama lengkap peserta</li>
                </ul>
                <a href="https://wa.me/6281234567890?text=Halo Admin, saya ingin konfirmasi pembayaran untuk Order %23{{ $checkout->order_number }}"
                   target="_blank"
                   class="inline-flex items-center justify-center w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                    Hubungi Admin via WhatsApp
                </a>
            </div>

            <!-- Payment Steps -->
            <div class="mt-6 p-4 bg-yellow-50 rounded-lg">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-yellow-800">Penting!</h3>
                        <div class="mt-2 text-sm text-yellow-700">
                            <ul class="list-disc list-inside">
                                <li>Pembayaran harus dilakukan dalam waktu 24 jam</li>
                                <li>Pendaftaran akan dibatalkan otomatis jika pembayaran tidak dilakukan</li>
                                <li>Simpan nomor order Anda: <span class="font-medium">{{ $checkout->order_number }}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Back Button -->
        <div class="mt-6 flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-gray-600 hover:text-gray-800">
                <span class="flex items-center">
                    <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Kembali
                </span>
            </a>
            <button onclick="window.print()" class="flex items-center px-4 py-2 bg-accent text-white rounded hover:bg-accent/90 transition">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"/>
                </svg>
                Cetak Halaman
            </button>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
function copyToClipboard(text) {
    navigator.clipboard.writeText(text).then(() => {
        alert('Nomor rekening berhasil disalin!');
    }).catch(err => {
        console.error('Failed to copy text: ', err);
    });
}
</script>
@endpush

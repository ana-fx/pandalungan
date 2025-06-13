@extends('layouts.app')

@section('title', 'Detail Event - Night Run 2025')

@section('content')
<!-- Hero Event Section -->
<div class="relative bg-secondary py-16">
    <div class="absolute inset-0 overflow-hidden">
        <img src="{{ asset('images/night-run.jpg') }}" alt="Night Run Background" class="w-full h-full object-cover opacity-10">
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-6xl font-extrabold text-primary">
            Night Run <span class="text-accent">2025</span>
        </h1>
        <p class="mt-4 text-xl text-primary/80 max-w-3xl mx-auto">
            Rasakan sensasi berlari di malam hari dalam event spektakuler Pandalungan Festival Sayap Jatim
        </p>
    </div>
</div>

<!-- Event Timeline -->
<div class="py-16 bg-primary/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative">
            <!-- Timeline Line -->
            <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-secondary/20"></div>

            <!-- Timeline Items -->
            <div class="space-y-12">
                <!-- Registration Period -->
                <div class="relative">
                    <div class="flex items-center justify-center">
                        <span class="bg-accent text-primary text-lg font-semibold px-4 py-2 rounded-full z-10">
                            Periode Pendaftaran
                        </span>
                    </div>
                    <div class="mt-4 bg-white rounded-lg shadow-lg p-6 ml-4 mr-4">
                        <p class="text-secondary text-center">1 Januari - 30 Januari 2025</p>
                    </div>
                </div>

                <!-- Race Pack Collection -->
                <div class="relative">
                    <div class="flex items-center justify-center">
                        <span class="bg-accent text-primary text-lg font-semibold px-4 py-2 rounded-full z-10">
                            Pengambilan Race Pack
                        </span>
                    </div>
                    <div class="mt-4 bg-white rounded-lg shadow-lg p-6 ml-4 mr-4">
                        <p class="text-secondary text-center">5 Februari 2025</p>
                    </div>
                </div>

                <!-- Event Day -->
                <div class="relative">
                    <div class="flex items-center justify-center">
                        <span class="bg-accent text-primary text-lg font-semibold px-4 py-2 rounded-full z-10">
                            Hari Event
                        </span>
                    </div>
                    <div class="mt-4 bg-white rounded-lg shadow-lg p-6 ml-4 mr-4">
                        <p class="text-secondary text-center">10 Februari 2025</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Event Details Grid -->
<div class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Route Info -->
            <div class="bg-primary/30 rounded-xl p-8 transform hover:scale-105 transition-transform duration-300">
                <div class="flex items-center justify-center w-16 h-16 bg-secondary rounded-full mb-6 mx-auto">
                    <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-secondary text-center mb-4">Rute Lari</h3>
                <ul class="space-y-3 text-secondary/80">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-accent mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Jarak: 5km
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-accent mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        3 Water Station
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-accent mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Rute Bersertifikat
                    </li>
                </ul>
            </div>

            <!-- Registration Info -->
            <div class="bg-primary/30 rounded-xl p-8 transform hover:scale-105 transition-transform duration-300">
                <div class="flex items-center justify-center w-16 h-16 bg-secondary rounded-full mb-6 mx-auto">
                    <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-secondary text-center mb-4">Pendaftaran</h3>
                <div class="space-y-3 text-secondary/80">
                    <p class="text-center font-bold text-2xl text-accent">Rp 150.000</p>
                    <p class="text-center mb-4">Termasuk:</p>
                    <ul class="space-y-2">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-accent mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Jersey Exclusive
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-accent mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Race Number
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-accent mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Refreshment
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Prize Info -->
            <div class="bg-primary/30 rounded-xl p-8 transform hover:scale-105 transition-transform duration-300">
                <div class="flex items-center justify-center w-16 h-16 bg-secondary rounded-full mb-6 mx-auto">
                    <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-secondary text-center mb-4">Hadiah</h3>
                <div class="space-y-4">
                    <div class="text-center">
                        <h4 class="font-semibold text-secondary mb-2">Kategori Putra & Putri</h4>
                        <ul class="space-y-2 text-secondary/80">
                            <li class="flex items-center justify-between">
                                <span>Juara 1</span>
                                <span class="font-bold text-accent">Rp 1.000.000</span>
                            </li>
                            <li class="flex items-center justify-between">
                                <span>Juara 2</span>
                                <span class="font-bold text-accent">Rp 750.000</span>
                            </li>
                            <li class="flex items-center justify-between">
                                <span>Juara 3</span>
                                <span class="font-bold text-accent">Rp 500.000</span>
                            </li>
                        </ul>
                    </div>
                    <div class="pt-4 border-t border-secondary/10 text-center">
                        <p class="text-secondary/80">
                            Sertifikat untuk 500 finisher pertama
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FAQ Section -->
<div class="py-16 bg-primary/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-secondary text-center mb-12">Frequently Asked Questions</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white rounded-lg p-6 shadow-lg">
                <h3 class="text-lg font-semibold text-secondary mb-2">Apa saja yang perlu dibawa saat event?</h3>
                <p class="text-secondary/80">Jersey yang telah diberikan (wajib), headlamp (disarankan), dan ID untuk verifikasi.</p>
            </div>
            <div class="bg-white rounded-lg p-6 shadow-lg">
                <h3 class="text-lg font-semibold text-secondary mb-2">Bagaimana dengan timing system?</h3>
                <p class="text-secondary/80">Menggunakan timing chip dengan hasil berdasarkan waktu tercepat. Chip akan diberikan saat pengambilan race pack.</p>
            </div>
            <div class="bg-white rounded-lg p-6 shadow-lg">
                <h3 class="text-lg font-semibold text-secondary mb-2">Apakah ada batasan usia?</h3>
                <p class="text-secondary/80">Minimal 17 tahun pada hari pelaksanaan event.</p>
            </div>
            <div class="bg-white rounded-lg p-6 shadow-lg">
                <h3 class="text-lg font-semibold text-secondary mb-2">Bagaimana jika hujan?</h3>
                <p class="text-secondary/80">Event akan tetap berlangsung kecuali ada kondisi cuaca ekstrem yang membahayakan peserta.</p>
            </div>
        </div>
    </div>
</div>

<!-- CTA Section -->
<div class="bg-secondary py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-primary mb-8">Siap Untuk Bergabung?</h2>
        <a href="#registration-form" class="inline-block bg-accent text-primary px-8 py-4 rounded-full font-bold text-lg hover:bg-accent/90 transition-colors duration-300">
            Daftar Sekarang
        </a>
    </div>
</div>
@endsection

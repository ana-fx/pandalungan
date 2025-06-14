@extends('layouts.app')

@section('title', 'Detail Event - Night Run 2025')

@section('content')
<div class="flex flex-col min-h-screen">
    <!-- Prize Section as Hero -->
    <div class="bg-gradient-to-b from-secondary via-secondary/95 to-secondary pt-16 pb-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-accent text-lg font-medium tracking-wider mb-3 block">PANDALUNGAN FESTIVAL NIGHT RUN 2025</span>
                <h1 class="text-4xl md:text-6xl font-extrabold text-primary mb-4">Hadiah Juara</h1>
                <p class="text-xl text-primary/80 max-w-2xl mx-auto">
                    Raih kesempatan memenangkan total hadiah jutaan rupiah dan berbagai hadiah menarik lainnya dalam Night Run 2025
                </p>
                <div class="mt-8">
                    <a href="/" class="inline-flex items-center px-8 py-3 rounded-lg bg-accent text-primary font-bold hover:bg-accent/90 transition-all duration-300">
                        Daftar Sekarang
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <!-- Second Place -->
                <div class="relative mt-8 md:mt-16">
                    <div class="bg-primary/80 rounded-xl p-6 transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                        <div class="absolute -top-6 left-1/2 transform -translate-x-1/2">
                            <div class="w-12 h-12 bg-accent/80 rounded-full flex items-center justify-center border-4 border-primary">
                                <span class="text-primary font-bold text-xl">2</span>
                            </div>
                        </div>
                        <div class="text-center pt-8">
                            <div class="text-2xl font-bold text-accent mb-2">Runner Up</div>
                            <div class="text-3xl font-extrabold text-secondary mb-4">Rp 750.000</div>
                            <svg class="w-20 h-20 mx-auto mb-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 6.5C13.5 6.5 15 7 16 8C17 9 17.5 10.5 17.5 12C17.5 13.5 17 15 16 16C15 17 13.5 17.5 12 17.5C10.5 17.5 9 17 8 16C7 15 6.5 13.5 6.5 12C6.5 10.5 7 9 8 8C9 7 10.5 6.5 12 6.5Z" fill="#C0C0C0"/>
                                <path d="M12 4L13.5 2H10.5L12 4Z" fill="#C0C0C0"/>
                                <path d="M12 19L10.5 21H13.5L12 19Z" fill="#C0C0C0"/>
                                <path d="M12 6C9.24 6 7 8.24 7 11C7 13.76 9.24 16 12 16C14.76 16 17 13.76 17 11C17 8.24 14.76 6 12 6ZM12 14.5C10.07 14.5 8.5 12.93 8.5 11C8.5 9.07 10.07 7.5 12 7.5C13.93 7.5 15.5 9.07 15.5 11C15.5 12.93 13.93 14.5 12 14.5Z" fill="#A0A0A0"/>
                                <path d="M12 8.5C10.62 8.5 9.5 9.62 9.5 11C9.5 12.38 10.62 13.5 12 13.5C13.38 13.5 14.5 12.38 14.5 11C14.5 9.62 13.38 8.5 12 8.5Z" fill="#C0C0C0"/>
                            </svg>
                            <ul class="text-secondary/80 text-sm space-y-2">
                                <li>Medali Perak</li>
                                <li>Sertifikat Juara</li>
                                <li>Merchandise Exclusive</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- First Place -->
                <div class="relative -mt-8">
                    <div class="bg-primary rounded-xl p-8 transform transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
                        <div class="absolute -top-8 left-1/2 transform -translate-x-1/2">
                            <div class="w-16 h-16 bg-accent rounded-full flex items-center justify-center border-4 border-primary">
                                <span class="text-primary font-bold text-2xl">1</span>
                            </div>
                        </div>
                        <div class="text-center pt-8">
                            <div class="text-3xl font-bold text-accent mb-2">Juara Utama</div>
                            <div class="text-4xl font-extrabold text-secondary mb-4">Rp 1.000.000</div>
                            <svg class="w-24 h-24 mx-auto mb-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 6.5C13.5 6.5 15 7 16 8C17 9 17.5 10.5 17.5 12C17.5 13.5 17 15 16 16C15 17 13.5 17.5 12 17.5C10.5 17.5 9 17 8 16C7 15 6.5 13.5 6.5 12C6.5 10.5 7 9 8 8C9 7 10.5 6.5 12 6.5Z" fill="#FFD700"/>
                                <path d="M12 4L13.5 2H10.5L12 4Z" fill="#FFD700"/>
                                <path d="M12 19L10.5 21H13.5L12 19Z" fill="#FFD700"/>
                                <path d="M12 6C9.24 6 7 8.24 7 11C7 13.76 9.24 16 12 16C14.76 16 17 13.76 17 11C17 8.24 14.76 6 12 6ZM12 14.5C10.07 14.5 8.5 12.93 8.5 11C8.5 9.07 10.07 7.5 12 7.5C13.93 7.5 15.5 9.07 15.5 11C15.5 12.93 13.93 14.5 12 14.5Z" fill="#DAA520"/>
                                <path d="M12 8.5C10.62 8.5 9.5 9.62 9.5 11C9.5 12.38 10.62 13.5 12 13.5C13.38 13.5 14.5 12.38 14.5 11C14.5 9.62 13.38 8.5 12 8.5Z" fill="#FFD700"/>
                                <circle cx="12" cy="11" r="2" fill="#DAA520"/>
                            </svg>
                            <ul class="text-secondary/80 space-y-2">
                                <li>Medali Emas</li>
                                <li>Sertifikat Juara</li>
                                <li>Trophy</li>
                                <li>Merchandise Exclusive</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Third Place -->
                <div class="relative mt-8 md:mt-16">
                    <div class="bg-primary/80 rounded-xl p-6 transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                        <div class="absolute -top-6 left-1/2 transform -translate-x-1/2">
                            <div class="w-12 h-12 bg-accent/80 rounded-full flex items-center justify-center border-4 border-primary">
                                <span class="text-primary font-bold text-xl">3</span>
                            </div>
                        </div>
                        <div class="text-center pt-8">
                            <div class="text-2xl font-bold text-accent mb-2">Second Runner Up</div>
                            <div class="text-3xl font-extrabold text-secondary mb-4">Rp 500.000</div>
                            <svg class="w-20 h-20 mx-auto mb-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 6.5C13.5 6.5 15 7 16 8C17 9 17.5 10.5 17.5 12C17.5 13.5 17 15 16 16C15 17 13.5 17.5 12 17.5C10.5 17.5 9 17 8 16C7 15 6.5 13.5 6.5 12C6.5 10.5 7 9 8 8C9 7 10.5 6.5 12 6.5Z" fill="#CD7F32"/>
                                <path d="M12 4L13.5 2H10.5L12 4Z" fill="#CD7F32"/>
                                <path d="M12 19L10.5 21H13.5L12 19Z" fill="#CD7F32"/>
                                <path d="M12 6C9.24 6 7 8.24 7 11C7 13.76 9.24 16 12 16C14.76 16 17 13.76 17 11C17 8.24 14.76 6 12 6ZM12 14.5C10.07 14.5 8.5 12.93 8.5 11C8.5 9.07 10.07 7.5 12 7.5C13.93 7.5 15.5 9.07 15.5 11C15.5 12.93 13.93 14.5 12 14.5Z" fill="#8B4513"/>
                                <path d="M12 8.5C10.62 8.5 9.5 9.62 9.5 11C9.5 12.38 10.62 13.5 12 13.5C13.38 13.5 14.5 12.38 14.5 11C14.5 9.62 13.38 8.5 12 8.5Z" fill="#CD7F32"/>
                            </svg>
                            <ul class="text-secondary/80 text-sm space-y-2">
                                <li>Medali Perunggu</li>
                                <li>Sertifikat Juara</li>
                                <li>Merchandise Exclusive</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Prizes -->
            <div class="mt-16 grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <div class="bg-primary/30 backdrop-blur-sm rounded-xl p-6 text-center">
                    <div class="inline-block p-3 bg-accent/20 rounded-full mb-4">
                        <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-primary mb-2">Kategori Putra & Putri</h3>
                    <p class="text-primary/80">Hadiah yang sama untuk kategori putra dan putri</p>
                </div>

                <div class="bg-primary/30 backdrop-blur-sm rounded-xl p-6 text-center">
                    <div class="inline-block p-3 bg-accent/20 rounded-full mb-4">
                        <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-primary mb-2">Finisher Rewards</h3>
                    <p class="text-primary/80">Sertifikat eksklusif untuk 500 finisher pertama</p>
                </div>
            </div>

            <!-- Prize Note -->
            <div class="mt-12 text-center">
                <div class="inline-block bg-primary/20 rounded-full px-6 py-3">
                    <p class="text-primary/90 text-sm">
                        * Semua pemenang akan diumumkan pada hari event setelah perlombaan selesai
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="bg-primary flex-grow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <!-- Event Info Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                <!-- Event Details Card -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="bg-secondary/10 px-6 py-4">
                        <h2 class="text-xl font-bold text-secondary">Detail Event</h2>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-accent mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                <div>
                                    <p class="font-semibold text-secondary">Tanggal Event</p>
                                    <p class="text-secondary/80">10 Februari 2025</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-accent mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <div>
                                    <p class="font-semibold text-secondary">Lokasi</p>
                                    <p class="text-secondary/80">Pandalungan Festival Area</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-accent mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <div>
                                    <p class="font-semibold text-secondary">Waktu Mulai</p>
                                    <p class="text-secondary/80">19:00 WIB</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-accent mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                                </svg>
                                <div>
                                    <p class="font-semibold text-secondary">Jarak</p>
                                    <p class="text-secondary/80">5KM dengan 3 water station</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Registration Info Card -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="bg-secondary/10 px-6 py-4">
                        <h2 class="text-xl font-bold text-secondary">Pendaftaran</h2>
                    </div>
                    <div class="p-6">
                        <div class="text-center mb-6">
                            <p class="text-3xl font-bold text-accent">Rp 150.000</p>
                            <p class="text-secondary/80 mt-1">Per Peserta</p>
                        </div>
                        <div class="space-y-4">
                            <div>
                                <p class="font-semibold text-secondary mb-2">Periode Pendaftaran:</p>
                                <p class="text-secondary/80">1 - 30 Januari 2025</p>
                            </div>
                            <div>
                                <p class="font-semibold text-secondary mb-2">Fasilitas:</p>
                                <ul class="space-y-2 text-secondary/80">
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
                    </div>
                </div>

                <!-- Timeline Card -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="bg-secondary/10 px-6 py-4">
                        <h2 class="text-xl font-bold text-secondary">Timeline Event</h2>
                    </div>
                    <div class="p-6">
                        <div class="space-y-6">
                            <div class="text-center p-4 bg-secondary/5 rounded-lg">
                                <div class="font-bold text-accent mb-2">Pendaftaran</div>
                                <p class="text-secondary">1 - 30 Januari 2025</p>
                            </div>
                            <div class="text-center p-4 bg-secondary/5 rounded-lg">
                                <div class="font-bold text-accent mb-2">Race Pack Collection</div>
                                <p class="text-secondary">5 Februari 2025</p>
                            </div>
                            <div class="text-center p-4 bg-secondary/5 rounded-lg">
                                <div class="font-bold text-accent mb-2">Hari Event</div>
                                <p class="text-secondary">10 Februari 2025</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Card -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="bg-secondary/10 px-6 py-4">
                    <h2 class="text-xl font-bold text-secondary">FAQ</h2>
                </div>
                <div class="p-6">
                    <div class="space-y-6">
                        @foreach([
                            [
                                'question' => 'Apa saja yang perlu dibawa saat event?',
                                'answer' => 'Jersey yang telah diberikan (wajib), headlamp (disarankan), dan ID untuk verifikasi.'
                            ],
                            [
                                'question' => 'Bagaimana dengan timing system?',
                                'answer' => 'Menggunakan timing chip dengan hasil berdasarkan waktu tercepat. Chip akan diberikan saat pengambilan race pack.'
                            ],
                            [
                                'question' => 'Apakah ada batasan usia?',
                                'answer' => 'Minimal 17 tahun pada hari pelaksanaan event.'
                            ],
                            [
                                'question' => 'Bagaimana jika hujan?',
                                'answer' => 'Event akan tetap berlangsung kecuali ada kondisi cuaca ekstrem yang membahayakan peserta.'
                            ]
                        ] as $faq)
                        <div class="border-b border-secondary/10 last:border-0 pb-4 last:pb-0">
                            <h3 class="text-lg font-semibold text-secondary mb-2">{{ $faq['question'] }}</h3>
                            <p class="text-secondary/80">{{ $faq['answer'] }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-secondary">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center py-12">
            <h2 class="text-3xl font-bold text-primary mb-8">Siap Untuk Bergabung?</h2>
            <a href="#registration-form" class="inline-block bg-accent text-primary px-8 py-4 rounded-lg font-bold text-lg hover:bg-accent/90 transition-colors duration-300">
                Daftar Sekarang
            </a>
        </div>
    </div>
</div>
@endsection

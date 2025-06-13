<!-- Hero Section -->
<div class="relative bg-primary overflow-hidden">
    <div class="max-w-7xl mx-auto">
        <div class="relative z-10 pb-8 bg-primary sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
            <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-primary transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                <polygon points="50,0 100,0 50,100 0,100" />
            </svg>
            <div class="relative px-4 pt-4 sm:px-6 lg:px-8"></div>
            <main class="mt-6 sm:mt-8 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="text-center lg:text-left">
                    <h1 class="text-3xl tracking-tight font-extrabold text-secondary sm:text-4xl md:text-5xl lg:text-6xl">
                        <span class="block mb-1">Pandalungan Festival</span>
                        <span class="block text-accent">Night Run 2025</span>
                    </h1>
                    <p class="mt-3 text-base text-secondary sm:text-lg md:text-xl">
                        Bergabunglah dalam lomba lari malam yang spektakuler di Pandalungan Festival Sayap Jatim, dipersembahkan oleh Bank Jatim. Rasakan pengalaman berlari yang berbeda dalam suasana malam yang meriah dan penuh semangat.
                    </p>
                    <div class="mt-5 flex flex-col sm:flex-row sm:justify-center lg:justify-start gap-3">
                        <a href="#registration-form" class="w-full sm:w-auto inline-flex justify-center items-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-primary bg-accent hover:bg-accent/90 md:text-lg">
                            Daftar Night Run
                        </a>
                        <a href="{{ route('event.details') }}" class="w-full sm:w-auto inline-flex justify-center items-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-primary bg-secondary hover:bg-secondary/90 md:text-lg">
                            Detail Event
                        </a>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
        <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="{{ asset('images/night-run.jpg') }}" alt="Pandalungan Festival Night Run">
    </div>
</div>

<!-- Event Details Section -->
<div id="event-details" class="py-12 bg-primary/30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-extrabold text-secondary sm:text-4xl">
                Detail Event Night Run
            </h2>
            <p class="mt-4 text-xl text-secondary/80">
                Informasi lengkap mengenai lomba lari malam Pandalungan Festival
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Mekanisme Lomba -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden border border-secondary/10">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-secondary mb-4">Mekanisme Lomba</h3>
                    <ul class="space-y-3 text-secondary/80">
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-accent mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Jalur: 5km dengan 3 waterstation
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-accent mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Kategori: Putra dan Putri
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-accent mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Sistem: Timing chip dengan hasil berdasarkan waktu tercepat
                        </li>
                        <li class="flex items-start">
                            <svg class="h-6 w-6 text-accent mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Peralatan: Jersey wajib dipakai, headlamp disarankan
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Pendaftaran Lomba -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden border border-secondary/10">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-secondary mb-4">Pendaftaran Lomba</h3>
                    <div class="space-y-3 text-secondary/80">
                        <p class="flex items-start">
                            <svg class="h-6 w-6 text-accent mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Via akun official atau website resmi
                        </p>
                        <div>
                            <p class="font-semibold mb-2 text-secondary">Data yang diperlukan:</p>
                            <ul class="space-y-2 ml-8 list-disc">
                                <li>Data pribadi (nama, alamat, kontak)</li>
                                <li>Ukuran jersey</li>
                                <li>Nomor rekening Bank Jatim</li>
                            </ul>
                        </div>
                        <p class="flex items-start">
                            <svg class="h-6 w-6 text-accent mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Biaya: Rp 150.000 (termasuk jersey & refreshment)
                        </p>
                    </div>
                </div>
            </div>

            <!-- Hadiah Lomba -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden border border-secondary/10">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-secondary mb-4">Hadiah Lomba</h3>
                    <div class="space-y-4">
                        <div>
                            <p class="font-semibold text-secondary mb-2">Kategori Putra:</p>
                            <ul class="space-y-2 text-secondary/80">
                                <li class="flex items-center">
                                    <svg class="h-6 w-6 text-accent mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    Juara I: Rp 1.000.000
                                </li>
                                <li class="flex items-center">
                                    <svg class="h-6 w-6 text-secondary mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    Juara II: Rp 750.000
                                </li>
                                <li class="flex items-center">
                                    <svg class="h-6 w-6 text-accent mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    Juara III: Rp 500.000
                                </li>
                            </ul>
                        </div>
                        <div>
                            <p class="font-semibold text-secondary mb-2">Kategori Putri:</p>
                            <ul class="space-y-2 text-secondary/80">
                                <li class="flex items-center">
                                    <svg class="h-6 w-6 text-accent mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    Juara I: Rp 1.000.000
                                </li>
                                <li class="flex items-center">
                                    <svg class="h-6 w-6 text-secondary mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    Juara II: Rp 750.000
                                </li>
                                <li class="flex items-center">
                                    <svg class="h-6 w-6 text-accent mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    Juara III: Rp 500.000
                                </li>
                            </ul>
                        </div>
                        <div class="mt-4 pt-4 border-t border-secondary/10">
                            <p class="text-secondary/80 flex items-center">
                                <svg class="h-6 w-6 text-accent mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                Sertifikat untuk 500 finisher pertama
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

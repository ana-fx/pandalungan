<!-- Hero Section -->
<div class="relative bg-primary">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row items-center gap-8 py-12 lg:py-16">
            <!-- Content Section -->
            <div class="w-full lg:w-1/2 text-center lg:text-left">
                <h1 class="text-3xl tracking-tight font-extrabold text-secondary sm:text-4xl md:text-5xl lg:text-6xl">
                    <span class="block mb-1">Pandalungan Festival</span>
                    <span class="block text-accent">Night Run 2025</span>
                </h1>
                <p class="mt-3 text-base text-secondary sm:text-lg md:text-xl">
                    Bergabunglah dalam lomba lari malam yang spektakuler di Pandalungan Festival Sayap Jatim, dipersembahkan oleh Bank Jatim. Rasakan pengalaman berlari yang berbeda dalam suasana malam yang meriah dan penuh semangat.
                </p>
                <div class="mt-5 flex flex-col sm:flex-row justify-center lg:justify-start gap-3">
                    <a href="#registration-form" class="w-full sm:w-auto inline-flex justify-center items-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-primary bg-accent hover:bg-accent/90 md:text-lg">
                        Daftar Night Run
                    </a>
                    <a href="{{ route('event.details') }}" class="w-full sm:w-auto inline-flex justify-center items-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-primary bg-secondary hover:bg-secondary/90 md:text-lg">
                        Detail Event
                    </a>
                </div>
            </div>

            <!-- Image Section -->
            <div class="w-full lg:w-1/2">
                <div class="relative aspect-square rounded-2xl overflow-hidden shadow-xl">
                    <img
                        class="absolute inset-0 w-full h-full object-cover transform hover:scale-105 transition-transform duration-300"
                        src="{{ asset('images/image.png') }}"
                        alt="Pandalungan Festival Night Run"
                    >
                </div>
            </div>
        </div>
    </div>
</div>
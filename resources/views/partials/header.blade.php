<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">
            <h1 class="text-xl font-bold text-gray-900">
                <a href="{{ route('home') }}" class="hover:text-gray-600">
                    Pendaftaran Event
                </a>
            </h1>
            @auth
                <nav>
                    <a href="{{ route('admin.dashboard') }}" class="text-gray-600 hover:text-gray-900">Dashboard Admin</a>
                </nav>
            @endauth
        </div>
    </div>
</header>

<header class="bg-white shadow">
    <div class="container mx-auto px-4 py-6 flex justify-between items-center">
        <h1 class="text-2xl font-bold text-blue-600">{{ config('app.name', 'Laravel') }}</h1>
        <div class="flex items-center gap-4">
            @auth
                <span class="text-gray-700">{{ Auth::user()->name }}</span>
            @endauth
            <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative">
                <button class="text-gray-700 hover:text-gray-900">
                    <i class="fas fa-globe"></i>
                </button>
                <div x-show="open" x-transition class="absolute right-0 mt-2 bg-white border border-gray-300 rounded shadow-lg z-50">
                    <a href="{{ route('locale', 'es') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Español</a>
                    <a href="{{ route('locale', 'en') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">English</a>
                    <a href="{{ route('locale', 'fr') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Français</a>
                </div>
            </div>
        </div>
    </div>
</header>

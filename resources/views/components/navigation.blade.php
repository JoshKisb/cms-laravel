<header class="bg-amber-900 shadow-lg sticky top-0 z-50">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
        <div class="flex items-center justify-between"> <a href="{{ url('/') }}"
                class="flex items-center gap-2 font-semibold text-xl text-amber-50 focus:outline-none focus:opacity-80">
                🍽️ {{ config('app.name') }} </a>
            <div class="hidden md:flex items-center gap-8">
                <x-filament-menu-builder::menu slug="main" class="flex gap-6 text-amber-50" />
                <a href="#reservations"
                    class="bg-amber-600 hover:bg-amber-700 text-white px-6 py-2 rounded-lg transition font-semibold">
                    Reserve
                </a>
            </div>

            <button class="md:hidden text-amber-50" id="menu-toggle">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </nav>
</header>

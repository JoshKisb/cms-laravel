<x-layouts.app>

    <!-- Hero Section -->
    <div class="relative">
        <img
            src="/images/exterior.png"
            alt="Ofie restaurant interior"
            class="absolute inset-0 w-full h-full object-cover"
        />
    
        <div class="absolute inset-0 bg-amber-900/70"></div>
    
        <div class="relative max-w-5xl mx-auto px-4 xl:px-0 pt-28 pb-28">
            <h1 class="font-semibold text-amber-50 text-5xl md:text-6xl leading-tight">
                Welcome to <span class="text-amber-200">Ofie</span>
            </h1>
    
            <p class="mt-6 max-w-3xl text-amber-100 text-lg leading-relaxed">
                Celebrating local flavours and timeless hospitality.
            </p>
    
            <div class="mt-12 flex flex-wrap gap-6">
                <a href="#reservations"
                   class="bg-amber-600 hover:bg-amber-700 text-white px-8 py-3 rounded-lg font-semibold transition">
                    Reserve Your Table
                </a>
                <a href="#menu"
                   class="border-2 border-amber-200 text-amber-50 hover:bg-amber-800 px-8 py-3 rounded-lg font-semibold transition">
                    View Menu
                </a>
            </div>
        </div>
    </div>

    <!-- Decorative Wave -->
    <div class="relative overflow-hidden pt-4 bg-amber-50">
        <svg class="absolute -top-1 w-full h-20 text-amber-900" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,50 Q300,0 600,50 T1200,50 L1200,120 L0,120 Z" fill="currentColor"></path>
        </svg>
    </div>

    <!-- Features -->
    <div class="bg-amber-50 py-24">
        <div class="max-w-6xl mx-auto px-4 xl:px-0">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="bg-white/70 backdrop-blur rounded-xl p-8 text-center shadow-sm">
                    <div class="text-5xl mb-6">🌾</div>
                    <h3 class="text-xl font-semibold text-amber-900 mb-3">Local Sourcing</h3>
                    <p class="text-amber-800 leading-relaxed">
                        Fresh ingredients from trusted local suppliers, supporting our community.
                    </p>
                </div>

                <div class="bg-white/70 backdrop-blur rounded-xl p-8 text-center shadow-sm">
                    <div class="text-5xl mb-6">👨‍🍳</div>
                    <h3 class="text-xl font-semibold text-amber-900 mb-3">Expert Chefs</h3>
                    <p class="text-amber-800 leading-relaxed">
                        Passionate culinary professionals crafting every dish with meticulous attention.
                    </p>
                </div>

                <div class="bg-white/70 backdrop-blur rounded-xl p-8 text-center shadow-sm">
                    <div class="text-5xl mb-6">🏡</div>
                    <h3 class="text-xl font-semibold text-amber-900 mb-3">Warm Ambiance</h3>
                    <p class="text-amber-800 leading-relaxed">
                        Intimate dining in a welcoming neighbourhood setting perfect for any occasion.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Gallery + Experience -->
    <div class="bg-white py-24">
        <div class="max-w-6xl mx-auto px-4 xl:px-0">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                <div class="grid grid-cols-2 gap-4">
                    <img class="rounded-xl shadow-lg w-full h-48 object-cover"
                        src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=500&q=60" />
                    <img class="rounded-xl shadow-lg w-full h-48 object-cover"
                        src="https://images.unsplash.com/photo-1495521821757-a1efb6729352?auto=format&fit=crop&w=500&q=60" />
                    <img class="rounded-xl shadow-lg w-full h-56 object-cover col-span-2"
                        src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?auto=format&fit=crop&w=800&q=60"
                        alt="Restaurant interior" />
                </div>

                <div class="space-y-8 lg:pt-8 max-w-xl">
                    <h2 class="text-4xl font-bold text-amber-900">
                        The Ofie Experience
                    </h2>

                    <p class="text-gray-700 leading-relaxed">
                        At Ofie, we believe that exceptional dining is about more than just food. It's about creating
                        moments, building memories, and celebrating the art of hospitality.
                    </p>

                    <ul class="space-y-4">
                        <li class="flex items-start gap-4">
                            <span
                                class="mt-0.5 size-5 rounded-full bg-amber-100 text-amber-700 flex items-center justify-center">✓</span>
                            <span class="font-medium text-amber-900">Seasonal menus crafted daily</span>
                        </li>
                        <li class="flex items-start gap-4">
                            <span
                                class="mt-0.5 size-5 rounded-full bg-amber-100 text-amber-700 flex items-center justify-center">✓</span>
                            <span class="font-medium text-amber-900">Extensive wine & beverage selection</span>
                        </li>
                        <li class="flex items-start gap-4">
                            <span
                                class="mt-0.5 size-5 rounded-full bg-amber-100 text-amber-700 flex items-center justify-center">✓</span>
                            <span class="font-medium text-amber-900">Private dining experiences available</span>
                        </li>
                        <li class="flex items-start gap-4">
                            <span
                                class="mt-0.5 size-5 rounded-full bg-amber-100 text-amber-700 flex items-center justify-center">✓</span>
                            <span class="font-medium text-amber-900">Warm, attentive service</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Menu Preview -->
    <div class="bg-amber-50 py-24">
        <div class="max-w-5xl mx-auto px-4 xl:px-0">
            <h2 class="text-4xl font-bold text-center text-amber-900 mb-16">
                Our Menu
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <!-- Starters -->
                <div
                    class="bg-white rounded-xl shadow-md overflow-hidden transition hover:-translate-y-1 hover:shadow-lg">
                    <img class="h-40 w-full object-cover"
                        src="https://images.unsplash.com/photo-1540189549336-e6e99c3679fe?auto=format&fit=crop&w=800&q=60"
                        alt="Starters" />
                    <div class="p-8 border-t-4 border-amber-600">
                        <h3 class="text-2xl font-semibold text-amber-900 mb-3">Starters</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Carefully curated appetisers showcasing the season's finest ingredients.
                        </p>
                    </div>
                </div>

                <!-- Main Courses -->
                <div
                    class="bg-white rounded-xl shadow-md overflow-hidden transition hover:-translate-y-1 hover:shadow-lg">
                    <img class="h-40 w-full object-cover"
                        src="https://images.unsplash.com/photo-1600891964599-f61ba0e24092?auto=format&fit=crop&w=800&q=60"
                        alt="Main courses" />
                    <div class="p-8 border-t-4 border-amber-600">
                        <h3 class="text-2xl font-semibold text-amber-900 mb-3">Main Courses</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Signature dishes prepared with meticulous attention and passion.
                        </p>
                    </div>
                </div>

                <!-- Desserts -->
                <div
                    class="bg-white rounded-xl shadow-md overflow-hidden transition hover:-translate-y-1 hover:shadow-lg">
                    <img class="h-40 w-full object-cover"
                        src="https://images.unsplash.com/photo-1551024601-bec78aea704b?auto=format&fit=crop&w=800&q=60"
                        alt="Desserts" />
                    <div class="p-8 border-t-4 border-amber-600">
                        <h3 class="text-2xl font-semibold text-amber-900 mb-3">Desserts</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Artisanal desserts and petit fours to finish on a high note.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA -->
    <div class="bg-amber-900 text-amber-50 py-28">
        <div class="max-w-4xl mx-auto px-4 xl:px-0 text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">
                Ready to Dine with Us?
            </h2>

            <p class="text-lg text-amber-100 mb-10">
                Join us for an unforgettable evening of fine dining and warm hospitality.
            </p>

            <a href="#reservations"
                class="inline-block bg-amber-600 hover:bg-amber-700 text-white px-10 py-4 rounded-lg font-semibold transition">
                Reserve Your Table Today
            </a>
        </div>
    </div>

    {!! $page->content !!}

</x-layouts.app>

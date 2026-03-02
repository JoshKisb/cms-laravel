<x-layouts.app>

    <!-- Header -->
    <div class="bg-gradient-to-b from-amber-50 to-white">
        <div class="max-w-6xl mx-auto px-4 py-28">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-5xl font-semibold tracking-tight text-amber-900">
                    {{ $collection->name }}
                </h1>

                @if($collection->description)
                    <p class="mt-6 text-lg text-amber-800 leading-relaxed">
                        {{ $collection->description }}
                    </p>
                @endif
            </div>
        </div>
    </div>

    <!-- Blog Grid -->
    <div class="max-w-6xl mx-auto px-4 py-24">
        <div class="grid gap-16 sm:grid-cols-2 lg:grid-cols-3">

            @forelse($collection->items as $item)
                <a href="{{ url($collection->slug . '/' . $item->slug) }}"
                   class="group block">

                    <article class="flex flex-col h-full">

                        <!-- Image surface -->
                        <div class="relative h-60 rounded-3xl overflow-hidden bg-amber-100 shadow-md">
                            @if(!empty($item->image))
                                <img
                                    src="{{ $item->image }}"
                                    alt="{{ $item->title }}"
                                    class="absolute inset-0 w-full h-full object-cover
                                           transition duration-700 ease-out group-hover:scale-105"
                                />
                            @else
                                <div class="absolute inset-0 flex items-center justify-center text-amber-300">
                                    <svg class="w-14 h-14" fill="none" stroke="currentColor" stroke-width="1.25"
                                         viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M3 7h18M3 7l2 10h14l2-10M8 7V5a4 4 0 118 0v2" />
                                    </svg>
                                </div>
                            @endif
                        </div>

                        <!-- Text -->
                        <div class="mt-5 px-2 flex flex-col flex-1">
                            <div class="text-xs uppercase tracking-wider text-gray-400 mb-3">
                                {{ optional($item->published_at)->format('M d, Y') }}
                            </div>

                            <h2 class="text-xl font-medium text-gray-900 leading-snug
                                       group-hover:text-amber-800 transition">
                                {{ $item->title }}
                            </h2>

                            @if($item->excerpt)
                                <p class="mt-4 text-gray-600 leading-relaxed line-clamp-3">
                                    {{ $item->excerpt }}
                                </p>
                            @endif
                        </div>

                    </article>
                </a>
            @empty
                <p class="text-gray-500">
                    No content yet.
                </p>
            @endforelse

        </div>
    </div>

</x-layouts.app>
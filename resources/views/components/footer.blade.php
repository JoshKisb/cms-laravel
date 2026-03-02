<footer class="mt-auto w-full bg-amber-950 text-amber-50">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-10">
            <div> <a class="flex-none font-semibold text-2xl text-amber-50 focus:outline-none focus:opacity-80"
                    href="{{ url('/') }}" aria-label="Ofie Restaurant"> 🍽️ Ofie </a>
                <p class="mt-3 text-sm text-amber-100">Fine local dining celebrating authentic flavours and warm
                    hospitality.</p>
            </div>
            <div>
                <h3 class="font-semibold text-amber-50 mb-4">Hours</h3>
                <ul class="space-y-2 text-sm text-amber-100">
                    <li>Mon - Thu: 11am - 10pm</li>
                    <li>Fri - Sat: 11am - 11pm</li>
                    <li>Sun: 12pm - 9pm</li>
                </ul>
            </div>

            <div>
                <h3 class="font-semibold text-amber-50 mb-4">Contact</h3>
                <ul class="space-y-2 text-sm text-amber-100">
                    <li>📞 (123) 456-7890</li>
                    <li>📧 hello@ofie.co.uk</li>
                    <li>📍 123 High Street</li>
                </ul>
            </div>

            <div>
                <h3 class="font-semibold text-amber-50 mb-4">Follow Us</h3>
                <div class="flex space-x-4">
                    <a href="#" class="text-amber-100 hover:text-amber-50 transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-amber-100 hover:text-amber-50 transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M8.29 20v-7.21H5.5V9.25h2.79V7.05c0-2.76 1.69-4.27 4.16-4.27 1.18 0 2.19.09 2.49.13v2.88h-1.71c-1.34 0-1.6.64-1.6 1.57v2.05h3.21l-.41 3.54h-2.8V20" />
                        </svg>
                    </a>
                    <a href="#" class="text-amber-100 hover:text-amber-50 transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.011 4.85.07 3.252.148 4.771 1.691 4.919 4.919.059 1.266.07 1.646.07 4.85 0 3.204-.011 3.584-.07 4.85-.149 3.225-1.664 4.771-4.919 4.919-1.266.059-1.644.07-4.85.07-3.204 0-3.584-.011-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.059-1.265-.07-1.644-.07-4.849 0-3.204.011-3.584.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="pt-8 border-t border-amber-800">
            <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4">
                <p class="text-sm text-amber-200">© {{ Date('Y') }} {{ config('app.name') }}. All rights reserved.
                </p>
                <div class="space-x-6 text-sm">
                    <a href="#" class="text-amber-100 hover:text-amber-50 transition">Terms</a>
                    <a href="#" class="text-amber-100 hover:text-amber-50 transition">Privacy</a>
                    <a href="#" class="text-amber-100 hover:text-amber-50 transition">Cookies</a>
                </div>
            </div>
        </div>
    </div>
</footer>

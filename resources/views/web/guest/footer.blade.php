<!-- This example requires Tailwind CSS v2.0+ -->
<footer class="bg-white">
    <div class="max-w-7xl mx-auto py-12 px-4 overflow-hidden sm:px-6 lg:px-8">
        <nav class="-mx-5 -my-2 flex flex-wrap justify-center" aria-label="Footer">

            <div class="px-5 py-2">
                <a href="{{ route('welcome') }}" class="text-base text-gray-500 hover:text-gray-900">
                    Accueil
                </a>
            </div>

            <div class="px-5 py-2">
                <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                    Blog
                </a>
            </div>

            <div class="px-5 py-2">
                <a href="#" class="text-base text-gray-500 hover:text-gray-900">
                    Mentions légales
                </a>
            </div>

        </nav>
        <div class="mt-8 flex justify-center space-x-6">
            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Facebook</span>
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>
        <p class="mt-8 text-center text-base text-gray-400">
            &copy; 2021 Vinvui, Tous droits réservés.
        </p>
    </div>
</footer>

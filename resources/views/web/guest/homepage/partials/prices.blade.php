<section id="tarifs" class="py-32">
    <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
        <div class="lg:grid lg:grid-cols-3 lg:gap-24 lg:items-center">

            <div>
                <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl pointer-events-none">
                    Tarifs
                </h2>
                <p class="mt-6 max-w-3xl text-lg leading-7 text-gray-500 pointer-events-none">
                    Tarifs préférentiels sur demande pour les groupes, les clubs, les colonies de vacances, les scolaires, etc.
                </p>

                <div class="mt-6">
                    <div class="inline-flex rounded-md shadow">
                        <a href="#contact" class="group inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-th hover:bg-gray-50 hover:text-black-th">
                            Contactez nous
                            <svg xmlns="http://www.w3.org/2000/svg" class="-mr-1 ml-3 h-5 w-5 text-white group-hover:text-black-th" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="flex mt-8 pointer-events-none">
                    <div class="mr-4 flex-shrink-0 self-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-green-th" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold">Réduction !</h4>
                        <p class="mt-1">
                            -10% sur présentation de la carte Avantage Jeune
                        </p>
                        <p class="mt-4 text-xs flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 pr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                            Pas de réduction sur les forfaits à 3 et 10 euros.
                        </p>
                    </div>
                </div>



            </div>

            <div class="mt-12 col-span-2 pointer-events-none">
                <div class="bg-white shadow-2xl overflow-hidden rounded-lg">
                    <ul class="divide-y divide-gray-200">

                        @foreach (App\Models\Price::all() as $price)

                        <li>
                            <div class="min-w-0 p-4 items-center grid grid-cols-12 sm:gap-4 gap-1">
                                <div class="col-span-1 sm:block hidden">
                                    <img class="h-12 w-12 rounded-full" src="{{ url('storage/'.$price->image) }}" alt="">
                                </div>
                                <div class="col-span-7">
                                    <p class="sm:text-2xl text-lg font-medium text-black-th">
                                        {{ $price->public }}
                                        @if ($price->description != null)
                                        <span class="text-sm pl-2 hidden sm:inline-block">{{ $price->description }}</span>
                                        @endif
                                    </p>
                                </div>
                                <div class="sm:col-span-4 col-span-5">
                                    <p class="sm:text-2xl text-lg font-bold text-green-th flex justify-end">{{ $price->price }}</p>
                                </div>

                                @if ($price->description != null)
                                <div class="col-span-12 sm:hidden">
                                    <span class="text-sm pl-2 flex justify-start">{{ $price->description }}</span>
                                </div>
                                @endif

                            </div>
                        </li>

                        @endforeach

                    </ul>
                </div>

            </div>

        </div>
    </div>

</section>

<div class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
    <div class="absolute inset-0 flex items-center" aria-hidden="true">
        <div class="w-full border-t border-gray-300"></div>
    </div>
</div>

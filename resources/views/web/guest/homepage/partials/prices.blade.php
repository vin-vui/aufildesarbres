<section id="tarifs" class="py-32">
    <div class="max-w-md px-4 mx-auto sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
        <div class="lg:grid lg:grid-cols-3 lg:gap-24 lg:items-center">

            <div>
                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 pointer-events-none sm:text-4xl">
                    Tarifs
                </h2>
                <p class="max-w-3xl mt-6 text-lg leading-7 text-gray-500 pointer-events-none">
                    Tarifs préférentiels sur demande pour les groupes, les clubs, les colonies de vacances, les scolaires, etc.
                </p>

                <div class="mt-6">
                    <div class="inline-flex rounded-md shadow">
                        <a href="#contact" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-white border border-transparent rounded-md group bg-blue-th hover:bg-gray-50 hover:text-black-th">
                            Contactez nous
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-3 -mr-1 text-white group-hover:text-black-th" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="flex mt-8 pointer-events-none">
                    <div class="self-start flex-shrink-0 mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 text-green-th" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold">Réduction !</h4>
                        <p class="mt-1">
                            -10% sur présentation de la carte Avantage Jeune
                        </p>
                        <p class="flex mt-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 pr-2 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                            Pas de réduction sur les forfaits à 3 et 10 euros.
                        </p>
                    </div>
                </div>

            </div>

            <div class="col-span-2 mt-12 pointer-events-none">
                <div class="overflow-hidden bg-white rounded-lg shadow-2xl">
                    <ul class="divide-y divide-gray-200">

                        @foreach (App\Models\Price::all() as $price)

                        <li>
                            <div class="grid items-center min-w-0 grid-cols-12 gap-1 p-4 sm:gap-4">
                                <div class="hidden col-span-1 sm:block">
                                    <img class="w-12 h-12 rounded-full" src="{{ url('storage/'.$price->image) }}" alt="">
                                </div>
                                <div class="col-span-7">
                                    <p class="text-lg font-medium sm:text-2xl text-black-th">
                                        {{ $price->public }}
                                        @if ($price->description != null)
                                        <span class="hidden pl-2 text-sm sm:inline-block">{{ $price->description }}</span>
                                        @endif
                                    </p>
                                </div>
                                <div class="col-span-5 sm:col-span-4">
                                    <p class="flex justify-end text-lg font-bold sm:text-2xl text-green-th">{{ $price->price }}</p>
                                </div>

                                @if ($price->description != null)
                                <div class="col-span-12 sm:hidden">
                                    <span class="flex justify-start pl-2 text-sm">{{ $price->description }}</span>
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

<div class="relative max-w-md px-4 mx-auto sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
    <div class="absolute inset-0 flex items-center" aria-hidden="true">
        <div class="w-full border-t border-gray-300"></div>
    </div>
</div>

<section id="prices" class="pt-32">
    <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
        <div class="lg:grid lg:grid-cols-3 lg:gap-24 lg:items-center">

            <div>
                <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">
                    Tarifs
                </h2>
                <p class="mt-6 max-w-3xl text-lg leading-7 text-gray-500">
                    Tarifs préférentiels sur demande pour les groupes, les clubs, les colonies de vacances, les scolaires, etc.
                </p>

                <div class="mt-6">
                    <div class="inline-flex rounded-md shadow">
                        <a href="#" class="group inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-th hover:bg-gray-50 hover:text-black-th">
                            Contactez nous
                            <svg class="-mr-1 ml-3 h-5 w-5 text-white group-hover:text-black-th" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
                                <path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="flex mt-8">
                    <div class="mr-4 flex-shrink-0 self-end">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-green-th" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold">Réduction !</h4>
                        <p class="mt-1">
                            -10% sur présentation de la carte Avantage Jeune
                        </p>
                    </div>
                </div>
            </div>

            <div class="mt-12 col-span-2">
                <div class="bg-white shadow-2xl overflow-hidden rounded-lg">
                    <ul class="divide-y divide-gray-200">

                        @foreach (App\Models\Price::all() as $price)

                        <li>
                            <div class="min-w-0 p-4 items-center grid grid-cols-12 gap-4">
                                <div class="col-span-1 sm:block hidden">
                                    <img class="h-12 w-12 rounded-full" src="{{ url('storage/'.$price->image) }}" alt="">
                                </div>
                                <div class="col-span-7">
                                    <p class="sm:text-2xl text-md font-medium text-black-th">
                                    {{ $price->public }}
                                    @if ($price->description != null)
                                        <span class="text-sm pl-2">{{ $price->description }}</span>
                                    @endif
                                    </p>
                                </div>
                                <div class="sm:col-span-4 col-span-5">
                                    <p class="sm:text-2xl text-lg font-bold text-green-th flex justify-end">{{ $price->price }}</p>
                                </div>
                            </div>
                        </li>

                        @endforeach

                    </ul>
                </div>

            </div>

        </div>
    </div>
</section>

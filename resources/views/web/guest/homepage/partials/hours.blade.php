<section id="horaires" class="py-32">
    <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
        <div class="lg:grid lg:grid-cols-3 lg:gap-24 lg:items-center flex-col flex">

            <div class="col-span-2 pointer-events-none">
                <div class="max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">

                    @foreach (App\Models\Hour::all() as $hour)

                    <div class="flex flex-col rounded-lg shadow-2xl overflow-hidden">
                        <div class="flex-shrink-0">
                            <img class="h-48 w-full object-cover" src="{{ url('storage/'.$hour->image) }}" alt="">
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <div class="block mt-2">
                                    <p class="text-xl font-semibold text-gray-900">
                                        {{ $hour->title }}
                                    </p>
                                    <p class="mt-3 text-base text-gray-500">
                                        {{ $hour->description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach

                </div>
            </div>

            <div class="sm:order-last order-first mb-6">
                <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl pointer-events-none">
                    Horaires
                </h2>
                <p class="mt-6 max-w-3xl text-lg leading-7 text-gray-500 pointer-events-none">
                    Possibilité d'ouverture sur réservation
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
            </div>

        </div>
    </div>

</section>

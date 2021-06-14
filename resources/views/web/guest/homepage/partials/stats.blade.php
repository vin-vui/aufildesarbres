<section class="">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-extrabold text-black-th sm:text-4xl pointer-events-none">
                Il y en aura pour tous !
            </h2>
            <p class="mt-3 text-xl text-gray-500 sm:mt-4 pointer-events-none">
                Le ticket d’entrée vous donne un accès illimité au parc en temps et en activité
            </p>
        </div>
    </div>

    <div class="mt-10 pb-12 bg-gray-50 sm:pb-16">
        <div class="relative z-40">
            <div class="absolute inset-0 h-1/2"></div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-4xl mx-auto">
                    <dl class="rounded-lg bg-white shadow-2xl sm:grid sm:grid-cols-3 pointer-events-none">
                        <div class="flex flex-col border-b border-gray-100 p-6 text-center sm:border-0 sm:border-r">
                            <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500">
                                Parcours
                            </dt>
                            <dd class="order-1 text-5xl font-extrabold text-green-th">
                                {{ App\Models\Course::all()->count() }}
                            </dd>
                        </div>
                        <div class="flex flex-col border-t border-b border-gray-100 p-6 text-center sm:border-0 sm:border-l sm:border-r">
                            <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500">
                                Niveaux de difficultés
                            </dt>
                            <dd class="order-1 text-5xl font-extrabold text-green-th">
                                {{ App\Models\Course::distinct()->count('level') }}
                            </dd>
                        </div>
                        <div class="flex flex-col border-t border-gray-100 p-6 text-center sm:border-0 sm:border-l">
                            <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500">
                                Mètres de hauteur
                            </dt>
                            <dd class="order-1 text-5xl font-extrabold text-green-th">
                                {{ App\Models\Course::whereNotNull('max_height')->where('max_height', '<>', 0)->orderBy('max_height', 'asc')->first()->max_height }} à {{ App\Models\Course::whereNotNull('max_height')->orderBy('max_height', 'desc')->first()->max_height }}
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>

        <div class="relative bg-black-th -mt-16 z-10">
            <div class="h-56 bg-indigo-600 sm:h-72 md:absolute md:left-0 md:h-full md:w-1/2">
                <img class="w-full h-full object-cover" src="https://www.parcaventure-malbuisson.fr/img/parcours/autres/autres_06.jpg" alt="">
            </div>
            <div class="relative max-w-7xl mx-auto px-4 py-12 sm:px-6 lg:px-8 lg:py-16">
                <div class="md:ml-auto md:w-1/2 md:pl-10">
                    <p class="mt-12 text-white text-3xl font-extrabold tracking-tight sm:text-4xl pointer-events-none">
                        Sécurité
                    </p>
                    <p class="mt-3 text-lg text-gray-300 pointer-events-none">
                        Tous nos parcours sont équipés d'un système de ligne de vie continue et contrôlé annuellement pour vous garantir une sécurité maximale.
                    </p>
                    <div class="mt-8">
                        <div class="inline-flex rounded-md shadow">
                            <a href="#parcours" class="group inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-th hover:bg-gray-50 hover:text-black-th">
                                Tous nos parcours
                                <svg xmlns="http://www.w3.org/2000/svg" class="-mr-1 ml-3 h-5 w-5 text-white group-hover:text-black-th" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 13l-5 5m0 0l-5-5m5 5V6" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

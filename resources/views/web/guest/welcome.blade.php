<x-guest-layout>

    <div class="bg-white">

        <!-- HERO -->
        <div class="relative pb-32 bg-gray-800 bg-fixed" style="background-image: url(https://images.unsplash.com/photo-1538935732373-f7a495fea3f6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2627&q=80)">
            <div class="absolute inset-0">
                {{-- <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1538935732373-f7a495fea3f6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2627&q=80" alt=""> --}}
                <div class="absolute inset-0 bg-gray-700 mix-blend-multiply" aria-hidden="true"></div>
            </div>
            <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
                <p class="mt-6 max-w-3xl sm:text-3xl text-xl text-gray-300">Parc aventure, Accrobranche</p>
                <h1 class="text-4xl font-extrabold tracking-tight bg-clip-text text-transparent bg-gradient-to-r from-green-th to-blue-th md:text-5xl lg:text-6xl">Au Fil Des Arbres</h1>
            </div>
        </div>

        <!-- NEWS -->
        <section class="-mt-32 max-w-7xl mx-auto relative z-10 pb-32 px-4 sm:px-6 lg:px-8" aria-labelledby="contact-heading">
            <div class="grid grid-cols-1 gap-y-20 lg:grid-cols-3 lg:gap-y-0 lg:gap-x-8">

                <div class="flex flex-col bg-white rounded-2xl shadow-xl">
                    <div class="flex-1 relative pt-16 px-6 pb-8 md:px-8">
                        <div class="absolute top-0 p-5 inline-block bg-green-th rounded-xl shadow-lg transform -translate-y-1/2">
                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-medium text-black-th">Réouverture !</h3>
                        <p class="mt-4 text-base text-gray-500">
                            Nous avons le plaisir de vous annoncer la réouverture du parc aventure Au Fil des Arbres le samedi 22 mai !
                        </p>
                    </div>
                    <div class="p-6 bg-blue-th rounded-bl-2xl rounded-br-2xl md:px-8">
                        <a href="#" class="text-base font-medium text-white hover:text-black-th">Nos horaires<span aria-hidden="true"> &rarr;</span></a>
                    </div>
                </div>

                <div class="flex flex-col bg-white rounded-2xl shadow-xl">
                    <div class="flex-1 relative pt-16 px-6 pb-8 md:px-8">
                        <div class="absolute top-0 p-5 inline-block bg-green-th rounded-xl shadow-lg transform -translate-y-1/2">
                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-medium text-black-th">Nouveautés !</h3>
                        <p class="mt-4 text-base text-gray-500">
                            Cette année notre parc s'enrichit d'un parcours enfant et d'un parcours noir pour les plus courageux ! 🤗
                        </p>
                    </div>
                    <div class="p-6 bg-blue-th rounded-bl-2xl rounded-br-2xl md:px-8">
                        <a href="#" class="text-base font-medium text-white hover:text-black-th">Nos actus<span aria-hidden="true"> &rarr;</span></a>
                    </div>
                </div>

                <div class="flex flex-col bg-white rounded-2xl shadow-xl">
                    <div class="flex-1 relative pt-16 px-6 pb-8 md:px-8">
                        <div class="absolute top-0 p-5 inline-block bg-green-th rounded-xl shadow-lg transform -translate-y-1/2">
                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-medium text-black-th">Informations</h3>
                        <p class="mt-4 text-base text-gray-500">
                            Dans le contexte du Covid-19, un protocole a été mis en place pour vous accueillir dans les meilleures conditions. Masques et gants sont fortement recommandés et seront en vente à l'accueil.
                        </p>
                    </div>
                    <div class="p-6 bg-black-th rounded-bl-2xl rounded-br-2xl md:px-8">
                        <a class="text-base font-medium text-green-th">Au plaisir de vous accueillir sur notre site !</a>
                    </div>
                </div>

            </div>
        </section>

        <!-- STATS -->
        <section class="bg-white -mb-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-4xl mx-auto text-center">
                    <h2 class="text-3xl font-extrabold text-black-th sm:text-4xl">
                        Il y en aura pour tous !
                    </h2>
                    <p class="mt-3 text-xl text-gray-500 sm:mt-4">
                        Le ticket d’entrée vous donne un accès illimité au parc en temps et en activité
                    </p>
                </div>
            </div>

            <div class="mt-10 pb-12 bg-white sm:pb-16">
                <div class="relative z-50">
                    <div class="absolute inset-0 h-1/2 bg-white"></div>
                    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="max-w-4xl mx-auto">
                            <dl class="rounded-lg bg-white shadow-2xl sm:grid sm:grid-cols-3">
                                <div class="flex flex-col border-b border-gray-100 p-6 text-center sm:border-0 sm:border-r">
                                    <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500">
                                        Parcours
                                    </dt>
                                    <dd class="order-1 text-5xl font-extrabold text-green-th">
                                        8
                                    </dd>
                                </div>
                                <div class="flex flex-col border-t border-b border-gray-100 p-6 text-center sm:border-0 sm:border-l sm:border-r">
                                    <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500">
                                        Difficultés
                                    </dt>
                                    <dd class="order-1 text-5xl font-extrabold text-green-th">
                                        5
                                    </dd>
                                </div>
                                <div class="flex flex-col border-t border-gray-100 p-6 text-center sm:border-0 sm:border-l">
                                    <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500">
                                        mètres de hauteur
                                    </dt>
                                    <dd class="order-1 text-5xl font-extrabold text-green-th">
                                        1 à 16
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
                            <p class="mt-12 text-white text-3xl font-extrabold tracking-tight sm:text-4xl">
                                Restauration
                            </p>
                            <p class="mt-3 text-lg text-gray-300">
                                Pour un bon départ ou une petite pause, nous vous proposons des barres de céréales et des boissons. Nous mettons à votre disposition des tables de pic-nique entouré d'un cadre exceptionnel.
                            </p>
                            <div class="mt-8">
                                <div class="inline-flex rounded-md shadow">
                                    <a href="#" class="group inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-th hover:bg-gray-50 hover:text-black-th">
                                        Tous nos parcours
                                        <!-- Heroicon name: solid/external-link -->
                                        <svg class="-mr-1 ml-3 h-5 w-5 text-white group-hover:text-black-th" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
                                            <path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- PARCOURS -->
        <section id="courses" class="relative bg-gradient-to-r from-green-th to-blue-th pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">

            <div class="relative max-w-7xl mx-auto">
                <div class="text-center">
                    <h2 class="text-3xl tracking-tight font-extrabold text-black-th sm:text-4xl">
                        Nos parcours
                    </h2>
                    <p class="mt-3 max-w-2xl mx-auto text-xl text-white sm:mt-4">
                        En ligne de vie continue pour une sécurité parfaite !
                    </p>
                </div>
                <div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">

                    <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                        <div class="flex-shrink-0">
                            <img class="h-48 w-full object-cover" src="https://www.parcaventure-malbuisson.fr/img/parcours/rose/rose_01.jpg" alt="">
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <p class="text-sm font-medium text-green-th">
                                    <a href="#" class="hover:underline">
                                        Enfant
                                    </a>
                                </p>
                                <a href="#" class="block mt-2">
                                    <p class="text-xl font-semibold text-gray-900">
                                        Rose
                                    </p>
                                    <p class="mt-3 text-base text-gray-500">
                                        Le parcours le plus simple pour vos bambins. Même pas besoin de harnais !
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                        <div class="flex-shrink-0">
                            <img class="h-48 w-full object-cover" src="https://www.parcaventure-malbuisson.fr/img/parcours/jaune/jaune_01.jpg" alt="">
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <p class="text-sm font-medium text-green-th">
                                    <a href="#" class="hover:underline">
                                        Enfant
                                    </a>
                                </p>
                                <a href="#" class="block mt-2">
                                    <p class="text-xl font-semibold text-gray-900">
                                        Jaune
                                    </p>
                                    <p class="mt-3 text-base text-gray-500">
                                        À un mètre du sol, les enfants évolueront sur une succession de ponts de singe et de passerelles mouvantes.
                                        Ils ramperont dans des tonneaux et dévaleront des tyroliennes en toute sécurité.
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                        <div class="flex-shrink-0">
                            <img class="h-48 w-full object-cover" src="https://www.parcaventure-malbuisson.fr/img/parcours/vert/vert_02.jpg" alt="">
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <p class="text-sm font-medium text-green-th">
                                    <a href="#" class="hover:underline">
                                        Débutant
                                    </a>
                                </p>
                                <a href="#" class="block mt-2">
                                    <p class="text-xl font-semibold text-gray-900">
                                        Vert
                                    </p>
                                    <p class="mt-3 text-base text-gray-500">
                                        Un peu plus haut que le parcour précédent, petits et grands s’entraideront à passer d’arbres en arbres au moyen de balançoires, de prises d’escalade, slackline et bien entendu de multiples tyroliennes.
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                        <div class="flex-shrink-0">
                            <img class="h-48 w-full object-cover" src="https://www.parcaventure-malbuisson.fr/img/parcours/autres/autres_09.jpg" alt="">
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <p class="text-sm font-medium text-green-th">
                                    <a href="#" class="hover:underline">
                                        Débutant
                                    </a>
                                </p>
                                <a href="#" class="block mt-2">
                                    <p class="text-xl font-semibold text-gray-900">
                                        Blanc
                                    </p>
                                    <p class="mt-3 text-base text-gray-500">
                                        Venez détendre vos bras sur des tyroliennes !
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                        <div class="flex-shrink-0">
                            <img class="h-48 w-full object-cover" src="https://www.parcaventure-malbuisson.fr/img/parcours/bleu/bleu_02.jpg" alt="">
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <p class="text-sm font-medium text-green-th">
                                    <a href="#" class="hover:underline">
                                        Sportif du dimanche
                                    </a>
                                </p>
                                <a href="#" class="block mt-2">
                                    <p class="text-xl font-semibold text-gray-900">
                                        Bleu
                                    </p>
                                    <p class="mt-3 text-base text-gray-500">
                                        4 ateliers montants vous permettrons d’atteindre une hauteur de 15 mètres, oserez-vous vous lancer sur les tyroliennes ?! Funambules, passerelles et cordes vous permettront de retourner au sol.
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                        <div class="flex-shrink-0">
                            <img class="h-48 w-full object-cover" src="https://www.parcaventure-malbuisson.fr/img/parcours/orange/orange_01.jpg" alt="">
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <p class="text-sm font-medium text-green-th">
                                    <a href="#" class="hover:underline">
                                        Sportif du dimanche
                                    </a>
                                </p>
                                <a href="#" class="block mt-2">
                                    <p class="text-xl font-semibold text-gray-900">
                                        Orange
                                    </p>
                                    <p class="mt-3 text-base text-gray-500">
                                        Des tyroliennes à l'infini !
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                        <div class="flex-shrink-0">
                            <img class="h-48 w-full object-cover" src="https://www.parcaventure-malbuisson.fr/img/parcours/rouge/rouge_03.jpg" alt="">
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <p class="text-sm font-medium text-green-th">
                                    <a href="#" class="hover:underline">
                                        Sportif
                                    </a>
                                </p>
                                <a href="#" class="block mt-2">
                                    <p class="text-xl font-semibold text-gray-900">
                                        Rouge
                                    </p>
                                    <p class="mt-3 text-base text-gray-500">
                                        Pas fatigué ?! Voici de quoi vous achever !
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                        <div class="flex-shrink-0">
                            <img class="h-48 w-full object-cover" src="https://www.parcaventure-malbuisson.fr/img/parcours/bleu/bleu_03.jpg" alt="">
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <p class="text-sm font-medium text-green-th">
                                    <a href="#" class="hover:underline">
                                        Sportif
                                    </a>
                                </p>
                                <a href="#" class="block mt-2">
                                    <p class="text-xl font-semibold text-gray-900">
                                        Noir
                                    </p>
                                    <p class="mt-3 text-base text-gray-500">
                                        Venez détendre vos bras sur des tyroliennes !
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- TARIFS -->
        <section id="prices" class="mt-16">
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

                                <li>
                                    <div class="min-w-0 p-4 items-center grid grid-cols-12 gap-4">
                                        <div class="col-span-1 sm:block hidden">
                                            <img class="h-12 w-12 rounded-full" src="{{ url('img/adult.png') }}" alt="">
                                        </div>
                                        <div class="col-span-7">
                                            <p class="sm:text-2xl text-md font-medium text-black-th">Adulte</p>
                                        </div>
                                        <div class="sm:col-span-4 col-span-5">
                                            <p class="sm:text-2xl text-lg font-bold text-green-th flex justify-end">20 €</p>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="min-w-0 p-4 items-center grid grid-cols-12 gap-4">
                                        <div class="col-span-1 sm:block hidden">
                                            <img class="h-12 w-12 rounded-full" src="{{ url('img/ado.png') }}" alt="">
                                        </div>
                                        <div class="col-span-7">
                                            <p class="sm:text-2xl text-md font-medium text-black-th">Ado <span class="text-sm pl-2">(moins de 18 ans)</span></p>
                                        </div>
                                        <div class="sm:col-span-4 col-span-5">
                                            <p class="sm:text-2xl text-lg font-bold text-green-th flex justify-end">17 €</p>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="min-w-0 p-4 items-center grid grid-cols-12 gap-4">
                                        <div class="col-span-1 sm:block hidden">
                                            <img class="h-12 w-12 rounded-full" src="{{ url('img/kid.png') }}" alt="">
                                        </div>
                                        <div class="col-span-7">
                                            <p class="sm:text-2xl text-md font-medium text-black-th">Enfant - parcours jaune & rose</p>
                                        </div>
                                        <div class="sm:col-span-4 col-span-5">
                                            <p class="sm:text-2xl text-lg font-bold text-green-th flex justify-end">10 €</p>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="min-w-0 p-4 items-center grid grid-cols-12 gap-4">
                                        <div class="col-span-1 sm:block hidden">
                                            <img class="h-12 w-12 rounded-full" src="{{ url('img/kid.png') }}" alt="">
                                        </div>
                                        <div class="col-span-7">
                                            <p class="sm:text-2xl text-md font-medium text-black-th">Enfant - parcours rose <span class="text-sm pl-2">(sans harnais)</span></p>
                                        </div>
                                        <div class="sm:col-span-4 col-span-5">
                                            <p class="sm:text-2xl text-lg font-bold text-green-th flex justify-end">3 €</p>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="min-w-0 p-4 items-center grid grid-cols-12 gap-4">
                                        <div class="col-span-1 sm:block hidden">
                                            <img class="h-12 w-12 rounded-full" src="{{ url('img/group.png') }}" alt="">
                                        </div>
                                        <div class="col-span-7">
                                            <p class="sm:text-2xl text-md font-medium text-black-th">Dès 4 personnes</p>
                                        </div>
                                        <div class="sm:col-span-4 col-span-5">
                                            <p class="sm:text-2xl text-lg font-bold text-green-th flex justify-end"> -1 € <span class="text-sm pl-2 sm:block hidden">par place</span></p>
                                            <p class="text-green-th flex justify-end text-sm sm:hidden">par place</p>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="min-w-0 p-4 items-center grid grid-cols-12 sm:gap-4 gap-0">
                                        <div class="col-span-1 sm:block hidden">
                                            <img class="h-12 w-12 rounded-full" src="{{ url('img/group.png') }}" alt="">
                                        </div>
                                        <div class="sm:col-span-7 col-span-6">
                                            <p class="sm:text-2xl text-md font-medium text-black-th">Dès 10 personnes</p>
                                        </div>
                                        <div class="sm:col-span-4 col-span-6">
                                            <p class="sm:text-2xl text-lg font-bold text-green-th flex justify-end"> -1,50 € <span class="text-sm pl-2 sm:block hidden">par place</span></p>
                                            <p class="text-green-th flex justify-end text-sm sm:hidden">par place</p>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>


                    </div>

                </div>
            </div>
        </section>

        <!-- HORAIRES -->
        <section id="hours" class="bg-white mt-32 pb-32">
            <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
                <div class="lg:grid lg:grid-cols-3 lg:gap-24 lg:items-center flex-col flex">

                    <div class="col-span-2">
                        <div class="max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">

                            <div class="flex flex-col rounded-lg shadow-2xl overflow-hidden">
                                <div class="flex-shrink-0">
                                    <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1489919712052-23b74fe5bbf2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1650&q=80" alt="">
                                </div>
                                <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                                    <div class="flex-1">
                                        <a href="#" class="block mt-2">
                                            <p class="text-xl font-semibold text-gray-900">
                                                Mai - Juin
                                            </p>
                                            <p class="mt-3 text-base text-gray-500">
                                                Tous les mecredis & tous les weekend de 14h à 19h
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-col rounded-lg shadow-2xl overflow-hidden">
                                <div class="flex-shrink-0">
                                    <img class="h-48 w-full object-cover" src="https://images.unsplash.com/uploads/14121010130570e22bcdf/e1730efe?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1650&q=80" alt="">
                                </div>
                                <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                                    <div class="flex-1">
                                        <a href="#" class="block mt-2">
                                            <p class="text-xl font-semibold text-gray-900">
                                                Juillet - Août
                                            </p>
                                            <p class="mt-3 text-base text-gray-500">
                                                Tous les jours de 11h à 19h
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-col rounded-lg shadow-2xl overflow-hidden">
                                <div class="flex-shrink-0">
                                    <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1507502707541-f369a3b18502?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=934&q=80" alt="">
                                </div>
                                <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                                    <div class="flex-1">
                                        <a href="#" class="block mt-2">
                                            <p class="text-xl font-semibold text-gray-900">
                                                Nocturne
                                            </p>
                                            <p class="mt-3 text-base text-gray-500">
                                                Sur réservation
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="sm:order-last order-first mb-6">
                        <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">
                            Horaires
                        </h2>
                        <p class="mt-6 max-w-3xl text-lg leading-7 text-gray-500">
                            Possibilité d'ouverture sur réservation
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
                    </div>

                </div>
            </div>

        </section>

        <!-- CONTACT -->
        <section id="contact" class="bg-fixed" style="background-image: url(https://images.unsplash.com/photo-1441974231531-c6227db76b6e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1651&q=80)">
            <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
                <div class="relative bg-white shadow-xl rounded-lg">

                    <div class="grid grid-cols-1 lg:grid-cols-3">
                        <!-- Contact information -->
                        <div class="relative overflow-hidden py-10 px-6 bg-gradient-to-br from-green-th to-blue-th sm:px-10 xl:p-12">
                            <div class="absolute inset-0 pointer-events-none sm:hidden" aria-hidden="true">
                                <svg class="absolute inset-0 w-full h-full" width="343" height="388" viewBox="0 0 343 388" fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M-99 461.107L608.107-246l707.103 707.107-707.103 707.103L-99 461.107z" fill="url(#linear1)" fill-opacity=".1" />
                                    <defs>
                                        <linearGradient id="linear1" x1="254.553" y1="107.554" x2="961.66" y2="814.66" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#fff"></stop>
                                            <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                            <div class="hidden absolute top-0 right-0 bottom-0 w-1/2 pointer-events-none sm:block lg:hidden" aria-hidden="true">
                                <svg class="absolute inset-0 w-full h-full" width="359" height="339" viewBox="0 0 359 339" fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M-161 382.107L546.107-325l707.103 707.107-707.103 707.103L-161 382.107z" fill="url(#linear2)" fill-opacity=".1" />
                                    <defs>
                                        <linearGradient id="linear2" x1="192.553" y1="28.553" x2="899.66" y2="735.66" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#fff"></stop>
                                            <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                            <div class="hidden absolute top-0 right-0 bottom-0 w-1/2 pointer-events-none lg:block" aria-hidden="true">
                                <svg class="absolute inset-0 w-full h-full" width="160" height="678" viewBox="0 0 160 678" fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M-161 679.107L546.107-28l707.103 707.107-707.103 707.103L-161 679.107z" fill="url(#linear3)" fill-opacity=".1" />
                                    <defs>
                                        <linearGradient id="linear3" x1="192.553" y1="325.553" x2="899.66" y2="1032.66" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#fff"></stop>
                                            <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                            <h2 class="text-3xl font-extrabold text-black-th tracking-tight sm:text-4xl">
                                Contact
                            </h2>
                            <p class="mt-6 max-w-3xl text-lg leading-7 text-white">
                                Pour toute demande spécifique, merci d'utiliser le formulaire.
                            </p>
                            <dl class="mt-8 space-y-6">
                                <dt><span class="sr-only">Phone number</span></dt>
                                <dd class="flex text-base text-white">
                                    <!-- Heroicon name: outline/phone -->
                                    <svg class="flex-shrink-0 w-6 h-6 text-black-th" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                    <span class="ml-3">+33 6 31 13 31 67</span>
                                </dd>
                                <dt><span class="sr-only">Email</span></dt>
                                <dd class="flex text-base text-white">
                                    <!-- Heroicon name: outline/mail -->
                                    <svg class="flex-shrink-0 w-6 h-6 text-black-th" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    <span class="ml-3">aufildesarbres25@gmail.com</span>
                                </dd>
                            </dl>
                            <ul class="mt-8 flex space-x-12" role="list">
                                <li>
                                    <a class="text-blue-th hover:text-indigo-100" href="#">
                                        <span class="sr-only">Facebook</span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" aria-hidden="true">
                                            <path d="M22.258 1H2.242C1.556 1 1 1.556 1 2.242v20.016c0 .686.556 1.242 1.242 1.242h10.776v-8.713h-2.932V11.39h2.932V8.887c0-2.906 1.775-4.489 4.367-4.489 1.242 0 2.31.093 2.62.134v3.037l-1.797.001c-1.41 0-1.683.67-1.683 1.653v2.168h3.362l-.438 3.396h-2.924V23.5h5.733c.686 0 1.242-.556 1.242-1.242V2.242C23.5 1.556 22.944 1 22.258 1" fill="currentColor" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Contact form -->
                        <div class="py-10 px-6 sm:px-10 lg:col-span-2 xl:p-12">
                            <h3 class="text-lg font-medium text-gray-900">Envoyez-nous un message</h3>
                            <form action="#" method="POST" class="mt-6 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
                                <div>
                                    <label for="first_name" class="block text-sm font-medium text-gray-900">Prénom</label>
                                    <div class="mt-1">
                                        <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="py-3 px-4 block w-full shadow-sm text-gray-900 focus:ring-green-th focus:border-green-th border-gray-300 rounded-md">
                                    </div>
                                </div>
                                <div>
                                    <label for="last_name" class="block text-sm font-medium text-gray-900">Nom</label>
                                    <div class="mt-1">
                                        <input type="text" name="last_name" id="last_name" autocomplete="family-name" class="py-3 px-4 block w-full shadow-sm text-gray-900 focus:ring-green-th focus:border-green-th border-gray-300 rounded-md">
                                    </div>
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-900">Email</label>
                                    <div class="mt-1">
                                        <input id="email" name="email" type="email" autocomplete="email" class="py-3 px-4 block w-full shadow-sm text-gray-900 focus:ring-green-th focus:border-green-th border-gray-300 rounded-md">
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between">
                                        <label for="phone" class="block text-sm font-medium text-gray-900">Téléphone</label>
                                        {{-- <span id="phone-optional" class="text-sm text-gray-500">Optionel</span> --}}
                                    </div>
                                    <div class="mt-1">
                                        <input type="text" name="phone" id="phone" autocomplete="tel" class="py-3 px-4 block w-full shadow-sm text-gray-900 focus:ring-green-th focus:border-green-th border-gray-300 rounded-md" aria-describedby="phone-optional">
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="subject" class="block text-sm font-medium text-gray-900">Sujet</label>
                                    <div class="mt-1">
                                        <input type="text" name="subject" id="subject" class="py-3 px-4 block w-full shadow-sm text-gray-900 focus:ring-green-th focus:border-green-th border-gray-300 rounded-md">
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <div class="flex justify-between">
                                        <label for="message" class="block text-sm font-medium text-gray-900">Message</label>
                                    </div>
                                    <div class="mt-1">
                                        <textarea id="message" name="message" rows="4" class="py-3 px-4 block w-full shadow-sm text-gray-900 focus:ring-green-th focus:border-green-th border-gray-300 rounded-md" aria-describedby="message-max"></textarea>
                                    </div>
                                </div>
                                <div class="sm:col-span-2 sm:flex sm:justify-end">
                                    <button type="submit" class="group inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-th hover:bg-gray-50 hover:text-black-th">
                                        Envoyer
                                        <svg class="-mr-1 ml-3 h-5 w-5 text-white group-hover:text-black-th" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
                                            <path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- MAP -->
        <section class="">
            <div class="relative">
                <iframe class="w-full" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10924.578399260992!2d6.312918978820795!3d46.8014574597317!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x71e8556d7a9788be!2sParc%20Aventure%20Malbuisson!5e0!3m2!1sfr!2sfr!4v1622560883762!5m2!1sfr!2sfr" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </section>

    </div>

</x-guest-layout>

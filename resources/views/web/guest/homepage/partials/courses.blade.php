<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="bg-gradient-to-r from-green-th to-blue-th">
    <path fill="rgba(249, 250, 251, 1)" fill-opacity="1" d="M0,256L240,128L480,256L720,96L960,160L1200,96L1440,224L1440,0L1200,0L960,0L720,0L480,0L240,0L0,0Z"></path>
</svg>

<section id="parcours" class="relative bg-gradient-to-r from-green-th to-blue-th pt-24 sm:pt-32">

    <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
        <div class="text-center">
            <h2 class="text-3xl tracking-tight font-extrabold text-black-th sm:text-4xl pointer-events-none">
                Nos parcours
            </h2>
            <p class="mt-3 max-w-2xl mx-auto text-xl text-white sm:mt-4 pointer-events-none">
                En ligne de vie continue pour une sécurité parfaite !
            </p>
        </div>
        <div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">

            @foreach (App\Models\Course::orderBy('order')->get() as $course)

            <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                <div class="flex-shrink-0">
                    <img class="h-48 w-full object-cover" src="{{ url('storage/'.$course->image) }}" alt="">
                </div>
                <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                    <div class="flex-1">
                        <div class="flex justify-between">
                            <p class="text-sm font-medium text-green-th pointer-events-none">
                                {{ $course->level }}
                            </p>
                            <p class="text-sm font-medium text-gray-500 inline-flex items-center" title="Hauteur maximum">
                                @if($course->max_height != 0)
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                </svg>
                                {{ $course->max_height }} m
                                @endif
                            </p>
                        </div>
                        <div class="block mt-2 pointer-events-none">
                            <p class="text-xl font-semibold text-black-th">
                                {{ $course->title }}
                            </p>
                            <p class="mt-2 text-base text-gray-500">
                                {{ $course->description }}
                            </p>
                        </div>

                    </div>
                </div>
            </div>

            @endforeach

        </div>
    </div>

    <div class="relative pt-24 sm:pt-32">
        <div class="max-w-7xl mx-auto bg-black-th lg:bg-transparent lg:px-8">
            <div class="lg:grid lg:grid-cols-12">
                <div class="relative z-10 lg:col-start-1 lg:row-start-1 lg:col-span-4 pt-16 lg:py-16 lg:bg-transparent">
                    <div class="max-w-md mx-auto px-4 sm:max-w-3xl sm:px-6 lg:max-w-none lg:p-0">
                        <div class="aspect-w-10 aspect-h-6 sm:aspect-w-2 sm:aspect-h-1 lg:aspect-w-1">
                            <img class="object-cover object-center rounded-3xl shadow-2xl" src="https://images.unsplash.com/photo-1464895216333-d859b45bf394?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1650&q=80" alt="">
                        </div>
                    </div>
                </div>

                <div class="relative shadow-2xl bg-black-th lg:col-start-3 lg:row-start-1 lg:col-span-10 lg:rounded-3xl lg:grid lg:grid-cols-10 lg:items-center">
                    <div class="hidden absolute inset-0 overflow-hidden rounded-3xl lg:block" aria-hidden="true">
                        <svg class="absolute top-full transform -translate-y-1/3 -translate-x-1/3 xl:-translate-y-1/2" width="404" height="384" fill="none" viewBox="0 0 404 384" aria-hidden="true">
                            <defs>
                                <pattern id="64e643ad-2176-4f86-b3d7-f2c5da3b6a6d" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                    <rect x="0" y="0" width="4" height="4" class="text-green-th" fill="currentColor" />
                                </pattern>
                            </defs>
                            <rect width="404" height="384" fill="url(#64e643ad-2176-4f86-b3d7-f2c5da3b6a6d)" />
                        </svg>
                    </div>
                    <div class="relative max-w-md mx-auto py-12 px-4 space-y-6 sm:max-w-3xl sm:py-16 sm:px-6 lg:max-w-none lg:p-0 lg:col-start-4 lg:col-span-6">
                        <h2 class="text-3xl font-extrabold text-white" id="join-heading">Restauration</h2>
                        <p class="text-lg text-white">Pour un bon départ ou une petite pause, nous vous proposons des produits locaux fabriqués uniquement dans le Doubs ! Des tables de pic-nique sont également à votre disposition.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="bg-gradient-to-r from-green-th to-blue-th">
    <path fill="rgba(249, 250, 251, 1)" fill-opacity="1" d="M0,320L240,256L480,192L720,224L960,288L1200,192L1440,192L1440,320L1200,320L960,320L720,320L480,320L240,320L0,320Z"></path>
</svg>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="bg-gradient-to-r from-green-th to-blue-th">
    <path fill="rgba(249, 250, 251, 1)" fill-opacity="1" d="M0,256L240,128L480,256L720,96L960,160L1200,96L1440,224L1440,0L1200,0L960,0L720,0L480,0L240,0L0,0Z"></path>
</svg>

<section id="parcours" class="relative bg-gradient-to-r from-green-th to-blue-th pt-24 sm:pt-32 pointer-events-none">

    <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
        <div class="text-center">
            <h2 class="text-3xl tracking-tight font-extrabold text-black-th sm:text-4xl">
                Nos parcours
            </h2>
            <p class="mt-3 max-w-2xl mx-auto text-xl text-white sm:mt-4">
                En ligne de vie continue pour une sécurité parfaite !
            </p>
        </div>
        <div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">

            @foreach (App\Models\Course::all() as $course)

            <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                <div class="flex-shrink-0">
                    <img class="h-48 w-full object-cover" src="{{ url('storage/'.$course->image) }}" alt="">
                </div>
                <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                    <div class="flex-1">
                    <div class="flex justify-between">
                        <p class="text-sm font-medium text-green-th">
                            {{ $course->level }}
                        </p>
                        <p class="text-sm font-medium text-gray-500">
                            @if($course->max_height != null)
                                hauteur max. : {{ $course->max_height }} m
                            @endif
                        </p>
                        </div>
                        <div class="block mt-2">
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

</section>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="bg-gradient-to-r from-green-th to-blue-th">
    <path fill="rgba(249, 250, 251, 1)" fill-opacity="1" d="M0,320L240,256L480,192L720,224L960,288L1200,192L1440,192L1440,320L1200,320L960,320L720,320L480,320L240,320L0,320Z"></path>
</svg>

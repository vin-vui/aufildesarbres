<section class="relative bg-black-th py-32" id="photos">
    <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl overflow-x-hidden sm:masonry before:box-inherit after:box-inherit">

        <div class="mb-8 rounded-lg break-inside">
            <p class="text-white text-3xl font-extrabold tracking-tight sm:text-4xl pointer-events-none">
                Galerie Photo
            </p>
            <p class="mt-3 text-lg text-gray-300 pointer-events-none">
                Venez découvrir nos superbes parcours accrobranche dans la magnifique forêt de Malbuisson !
            </p>
        </div>

        @foreach (App\Models\Photo::all() as $photo)

        <div class="sm:mb-8 mb-4 rounded-lg break-inside">
            @if ($photo->title != null)
            <div class="relative group shadow-xl block w-full aspect-w-10 aspect-h-7 rounded-lg bg-black-th focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-blue-th overflow-hidden">
                <img src="{{ url('storage/'.$photo->image) }}" alt="" class="object-cover pointer-events-none group-hover:opacity-25">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 absolute bottom-2 left-2 text-white group-hover:opacity-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <div class="absolute bottom-2 left-2 block ">
                    <p class="text-lg font-medium text-white truncate pointer-events-none opacity-0 group-hover:opacity-100">{{ $photo->title }}</p>
                    <p class="text-sm font-medium text-gray-100 truncate pointer-events-none opacity-0 group-hover:opacity-100">{{ $photo->description }}</p>
                </div>
            </div>
            @else
            <div class="relative shadow-xl block w-full aspect-w-10 aspect-h-7 rounded-lg bg-black-th focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-blue-th overflow-hidden">
                <img src="{{ url('storage/'.$photo->image) }}" alt="" class="object-cover pointer-events-none">
            </div>
            @endif
        </div>

        @endforeach

    </div>
</section>

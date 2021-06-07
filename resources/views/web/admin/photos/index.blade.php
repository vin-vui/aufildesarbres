<div>

    <header class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Galerie Photo
                </h2>

                <div class="hidden sm:block">
                    <button wire:click="create()" type="button" class="uppercase inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md
                    text-white bg-blue-th hover:bg-white hover:text-black-th hover:border-black-th focus:outline-none focus:shadow-outline-indigo focus:border-ornage active:bg-white">
                        <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        {{ __('Ajouter une Photo') }}
                    </button>
                </div>

                <div class="fixed bottom-2 right-2 block sm:hidden">
                    <button wire:click="create()" type="button" class="shadow-lg uppercase inline-flex items-center p-2 border border-transparent text-sm leading-5 font-medium rounded-full
                    text-white bg-blue-th hover:bg-white hover:text-black-th hover:border-black-th focus:outline-none focus:shadow-outline-indigo focus:border-ornage active:bg-white">
                        <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                    </button>
                </div>

                @if($isOpen)
                @include('web.admin.photos.store')
                @endif

            </div>
        </div>
    </header>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 sm:py-6 py-2">

        @if ($photos->count() != 0)
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-8 align-middle inline-block min-w-full sm:px-6 lg:px-8">

                    <div class="box-border max-w-7xl mx-auto sm:masonry before:box-inherit after:box-inherit">

                        @foreach ($photos as $photo)
                        <div class="px-4 py-4 mb-8 shadow-lg bg-white rounded-lg break-inside">
                            <div class="block w-full aspect-w-10 aspect-h-7 rounded-lg bg-white focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-blue-th overflow-hidden">
                                <img src="{{ url('storage/'.$photo->image) }}" alt="" class="object-cover pointer-events-none">
                            </div>
                            <div class="pt-4 flex justify-end">
                                <button wire:click="edit({{ $photo->id }})" class="rounded p-1">
                                    <svg class="h-6 w-6 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </button>
                                @if($confirming === $photo->id)
                                <button wire:click="delete({{ $photo->id }})" class="bg-red-500 rounded p-1">
                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </button>
                                @else
                                <button wire:click="confirmDelete({{ $photo->id }})" class="rounded p-1">
                                    <svg class="h-6 w-6 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                                @endif
                            </div>
                            <p class="block text-xs font-medium text-gray-500 pointer-events-none">{{ $photo->category }}</p>
                            <p class="block text-lg font-medium text-gray-900 truncate pointer-events-none">{{ $photo->title }}</p>
                            <p class="block text-sm font-medium text-gray-500 pointer-events-none">{{ $photo->description }}</p>
                        </div>
                        @endforeach

                    </div>

                </div>
            </div>
        </div>

        @else
        @include('web.admin.partials.empty')
        @endif

    </div>
</div>

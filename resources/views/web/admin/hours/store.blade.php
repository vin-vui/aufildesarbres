<div class="fixed z-50 inset-0 overflow-y-auto transition ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-2xl sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">

            <form>
                @csrf

                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="">

                        <div class="mb-4">
                            <label for="inputTitle" class="block text-gray-500 text-sm mb-2">Période</label>
                            <input type="text" class="shadow appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="inputTitle" placeholder="" wire:model="title">
                            @error('title') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>

                        <div class="mb-4">
                            <label for="inputParagraph" class="block text-gray-500 text-sm mb-2">Description</label>
                            <textarea rows="4" class="shadow appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="inputParagraph" wire:model="description" placeholder=""></textarea>
                            @error('description') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>

                        <div class="lg:grid lg:grid-cols-3 lg:gap-2 lg:items-center mb-4">
                            <div class="col-span-2">
                                <label for="inputImage" class="block text-gray-500 text-sm mb-2">Image</label>
                                <div class="border-2 border-gray-300 border-dashed rounded-md relative" x-data="{ noImage: true, isUploading: false, isUploaded: false }" x-on:livewire-upload-start="isUploading = true, noImage = false" x-on:livewire-upload-finish="isUploading = false, isUploaded = true" x-on:livewire-upload-error="isUploading = false">

                                    <input id="inputImage" type="file" wire:model="image" class="cursor-pointer relative block opacity-0 w-full h-full p-8 z-50">

                                    <div class="text-center p-8 absolute top-1 right-0 left-0 m-auto">
                                        <div x-show="noImage">
                                            <p class="text-sm leading-normal text-gray-400">Déposer ou selectionner une image</p>
                                        </div>
                                        <div>
                                            @error('image') <span class="text-sm text-red-500 italic">{{ $message }}</span>@enderror
                                        </div>
                                        <div x-show="isUploading">
                                            <p class="text-sm leading-normal text-gray-400">Chargement...</p>
                                        </div>
                                        <div x-show="isUploaded">
                                            <p class="text-sm leading-normal text-green-500">Image chargée !</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-span-1 pt-8 mx-auto">
                                <div class="flex-shrink-0 h-24 w-24 bg-cover bg-center rounded-full" style="background-image: url({{ url('storage/'.$this->image) }})"></div>
                            </div>

                            @if(!is_string($image))
                            @if ($image)
                            <div class="col-span-3 pt-8">
                                <img src="{{ $image->temporaryUrl() }}">
                            </div>
                            @endif
                            @endif
                        </div>

                    </div>
                </div>

                <div class="bg-gradient-to-l from-green-th to-blue-th px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                        <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            VALIDER
                        </button>
                    </span>
                    <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                        <button wire:click="closeModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            ANNULER
                        </button>
                    </span>
                </div>

            </form>

        </div>
    </div>
</div>

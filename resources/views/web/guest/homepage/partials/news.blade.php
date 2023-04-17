<section class="-mt-32 max-w-7xl mx-auto relative z-10 pb-32 px-4 sm:px-6 lg:px-8" aria-labelledby="contact-heading">

    <div class="grid grid-cols-1 gap-y-8 lg:grid-cols-3 lg:gap-y-0 lg:gap-x-8">

        <div class="flex flex-col bg-white rounded-2xl shadow-xl mb-16">

            <div class="flex-1 relative pt-16 px-6 pb-8 md:px-8">
                <div class="absolute top-0 p-5 inline-block bg-green-th rounded-xl shadow-lg transform -translate-y-1/2">
                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"><path d="M4 16.5V20a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-3.5M3 14v-1a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v1m-9-6v3m0-3c1.262 0 2-.968 2-2.625S12 2 12 2s-2 1.718-2 3.375S10.738 8 12 8Z"/><path d="M9 14a3 3 0 1 1-6 0m12 0a3 3 0 1 1-6 0m12 0a3 3 0 1 1-6 0"/></g>
                    </svg>
                </div>
                <h3 class="text-xl font-medium text-black-th pointer-events-none">Evénement Spécial</h3>
                <p class="mt-4 text-base text-gray-500 pointer-events-none">
                    Viens fêter ton anniversaire au parc ! Avec ce bon d'invitation pour tes amis ! (à imprimer)
                </p>
            </div>
            <div class="p-6 bg-blue-th rounded-bl-2xl rounded-br-2xl md:px-8">
                <a href="/Invitation - Parc Aventure Malbuisson.pdf" download="Invitation - Parc Aventure Malbuisson.pdf" class="text-base font-medium text-white hover:text-black-th">Télécharger le bon<span aria-hidden="true"> &rarr;</span></a>
            </div>
        </div>

        @foreach (App\Models\Report::all() as $report)

        <div class="flex flex-col bg-white rounded-2xl shadow-xl mb-16">

            <div class="flex-1 relative pt-16 px-6 pb-8 md:px-8">
                <div class="absolute top-0 p-5 inline-block bg-green-th rounded-xl shadow-lg transform -translate-y-1/2">
                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        {!! $report->logo !!}
                    </svg>
                </div>
                <h3 class="text-xl font-medium text-black-th pointer-events-none">{{ $report->title }}</h3>
                <p class="mt-4 text-base text-gray-500 pointer-events-none">
                    {{ $report->description }}
                </p>
            </div>

            @if ($report->link != null)
            <div class="p-6 bg-blue-th rounded-bl-2xl rounded-br-2xl md:px-8">
                <a href="{{ $report->link }}" class="text-base font-medium text-white hover:text-black-th">{{ $report->go_to }}<span aria-hidden="true"> &rarr;</span></a>
            </div>
            @else
            <div class="p-6 bg-black-th rounded-bl-2xl rounded-br-2xl md:px-8">
                <div class="text-base font-medium text-green-th pointer-events-none">{{ $report->go_to }}</div>
            </div>
            @endif

        </div>

        @endforeach

    </div>

</section>

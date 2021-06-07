<section class="-mt-32 max-w-7xl mx-auto relative z-10 pb-32 px-4 sm:px-6 lg:px-8" aria-labelledby="contact-heading">

    <div class="grid grid-cols-1 gap-y-20 lg:grid-cols-3 lg:gap-y-0 lg:gap-x-8">

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

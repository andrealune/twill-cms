<section class="paragraph paragraph--gallery py-10 px-6 border-b">
    @foreach($block->images('image', 'desktop') as $image)
        @if($loop->index == 0)
        <img class="w-full" src="{{ $image }}">
        @endif
    @endforeach
    <div class="mt-4">
        <div class="inline-block p-2 border border-gray-200 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
            </svg>
        </div>
        <div class="inline-block p-2 border border-gray-200 ml-2 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
            </svg>
        </div>
    </div>
</section>

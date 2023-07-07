<section class="paragraph paragraph--tabs py-10 px-6 border-b">
    <div class="paragraph-wrapper flex flex-wrap">
        <h2 class="paragraph-title font-medium text-3xl w-full">
            {!! $block->translatedInput('title') !!}
            <div class="float-right text-sm uppercase">
                <span>{!! $block->translatedInput('author_role') !!}</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                </svg>
            </div>
        </h2>
        <div class="paragraph-left w-1/3">
            <h2 class="paragraph-screamer font-medium text-2xl"></h2>
            <div class="paragraph-author-name text-sm font-semibold mt-6"></div>
            <div class="paragraph-author-role text-sm"></div>
        </div>
        <div class="paragraph-right w-2/3">
            <div class="paragraph-text"></div>
        </div>
    </div>
</section>

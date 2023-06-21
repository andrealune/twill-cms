<section class="paragraph paragraph--screamer-text py-10 px-6 border-b">
    <div class="paragraph-wrapper flex flex-wrap">
        <div class="paragraph-left w-1/4">
            <h2 class="paragraph-screamer font-medium text-2xl">"{!! $block->translatedInput('quote') !!}"</h2>
            <div class="paragraph-author-name text-sm font-semibold mt-6">{!! $block->translatedInput('author_name') !!}</div>
            <div class="paragraph-author-role text-sm">{!! $block->translatedInput('author_role') !!}</div>
        </div>
        <div class="paragraph-right w-1/4"></div>
        <div class="paragraph-right w-2/4">
            <div class="paragraph-text">{!! nl2br($block->translatedInput('text')) !!}</div>
        </div>
    </div>
</section>

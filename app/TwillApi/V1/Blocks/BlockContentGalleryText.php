<?php

namespace App\TwillApi\V1\Blocks;

use A17\Twill\API\JsonApi\V1\Blocks\BlockContent;

class BlockContentGalleryText extends BlockContent
{
    /**
     * Get the resource's content attributes.
     *
     * @return iterable
     */
    public function content(): iterable
    {
        $slides = [];
        foreach($this->resource->children as $item) {
            $slides[] = $item->content;
        }
        return [
            'slides' => $slides,
        ];
    }
}

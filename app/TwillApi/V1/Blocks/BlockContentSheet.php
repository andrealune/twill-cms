<?php

namespace App\TwillApi\V1\Blocks;

use A17\Twill\API\JsonApi\V1\Blocks\BlockContent;

class BlockContentSheet extends BlockContent
{
    /**
     * Get the resource's content attributes.
     *
     * @return iterable
     */
    public function content(): iterable
    {
        $texts = [];
        foreach($this->resource->children as $item) {
            $texts[] = $item->content;
        }
        return [
            'title' => $this->resource->input('title'),
            'subtitle' => $this->resource->input('subtitle'),
            'texts' => $texts,
        ];
    }
}

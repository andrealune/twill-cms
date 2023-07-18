<?php

namespace App\TwillApi\V1\Blocks;

use A17\Twill\API\JsonApi\V1\Blocks\BlockContent;

class BlockContentAreas extends BlockContent
{
    /**
     * Get the resource's content attributes.
     *
     * @return iterable
     */
    public function content(): iterable
    {
        $areas = [];
        foreach($this->resource->children as $item) {
            $areas[] = $item->content;
        }
        return [
            'title' => $this->resource->input('title'),
            'areas' => $areas,
        ];
    }
}

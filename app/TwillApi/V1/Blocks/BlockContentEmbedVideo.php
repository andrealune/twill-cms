<?php

namespace App\TwillApi\V1\Blocks;

use A17\Twill\API\JsonApi\V1\Blocks\BlockContent;

class BlockContentEmbedVideo extends BlockContent
{
    /**
     * Get the resource's content attributes.
     *
     * @return iterable
     */
    public function content(): iterable
    {
        $tabs = [];
        foreach($this->resource->children as $item) {
            $tabs[] = $item->content;
        }
        return [
            'url' => $this->resource->input('url'),
        ];
    }
}

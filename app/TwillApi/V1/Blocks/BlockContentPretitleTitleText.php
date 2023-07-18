<?php

namespace App\TwillApi\V1\Blocks;

use A17\Twill\API\JsonApi\V1\Blocks\BlockContent;

class BlockContentPretitleTitleText extends BlockContent
{
    /**
     * Get the resource's content attributes.
     *
     * @return iterable
     */
    public function content(): iterable
    {
        return [
            'pretitle' => $this->resource->input('pretitle'),
            'title' => $this->resource->input('title'),
            'text' => $this->resource->input('text')
        ];
    }
}

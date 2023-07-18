<?php

namespace App\TwillApi\V1\Blocks;

use A17\Twill\API\JsonApi\V1\Blocks\BlockContent;

class BlockContentTab extends BlockContent
{
    /**
     * Get the resource's content attributes.
     *
     * @return iterable
     */
    public function content(): iterable
    {
        return [
            'title' => $this->resource->input('title'),
            'subtitle' => $this->resource->input('subtitle'),
            'text' => $this->resource->input('text'),
            'cta_label' => $this->resource->input('cta_label'),
            'cta_url' => $this->resource->input('cta_url')
        ];
    }
}

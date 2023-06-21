<?php

namespace App\TwillApi\V1\Blocks;

use A17\Twill\API\JsonApi\V1\Blocks\BlockContent;

class BlockContentQuoteText extends BlockContent
{
    /**
     * Get the resource's content attributes.
     *
     * @return iterable
     */
    public function content(): iterable
    {
        return [
            'quote' => $this->resource->input('quote'),
            'author' => [
                'name' => $this->resource->input('author_name'),
                'role' => $this->resource->input('author_role')
            ],
            'text' => $this->resource->input('text'),
        ];
    }
}

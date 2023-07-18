<?php

namespace App\TwillApi\V1\Blocks;

use A17\Twill\API\JsonApi\V1\Blocks\BlockContent;

class BlockContentTabs extends BlockContent
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
            'title' => $this->resource->input('title'),
            'cta_label' => $this->resource->input('cta_label'),
            'cta_url' => $this->resource->input('cta_url'),
            'tabs' => $tabs,
        ];
    }
}

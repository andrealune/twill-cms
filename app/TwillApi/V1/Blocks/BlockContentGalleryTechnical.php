<?php

namespace App\TwillApi\V1\Blocks;

use A17\Twill\API\JsonApi\V1\Blocks\BlockContent;

class BlockContentGalleryTechnical extends BlockContent
{
    /**
     * Get the resource's content attributes.
     *
     * @return iterable
     */
    public function content(): iterable
    {
        $sheets = [];
        foreach($this->resource->children as $item) {
            $texts = [];
            foreach($item->children as $item2) {
                $texts[] = $item2->content;
            }
            $sheets[] = array_merge($item->content, ['texts' => $texts]);
        }
        return [
            'sheets' => $sheets,
        ];
    }
}

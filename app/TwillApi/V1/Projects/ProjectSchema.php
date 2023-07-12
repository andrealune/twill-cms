<?php

namespace App\TwillApi\V1\Projects;

use App\Twill\Capsules\Projects\Models\Project;
use LaravelJsonApi\Eloquent\Fields\Str;
use LaravelJsonApi\Eloquent\Fields\DateTime;
use A17\Twill\API\JsonApi\V1\Models\ModelSchema;

class ProjectSchema extends ModelSchema
{
    /**
     * The model the schema corresponds to.
     *
     * @var string
     */
    public static string $model = Project::class;

    /**
     * Show published or draft status attribute
     *
     * @var boolean
     */
    protected bool $publishedAttribute = true;

    /**
     * Get the resource fields.
     *
     * @return array
     */
    public function fields(): array
    {
        $fields = parent::fields();

        return array_merge($fields, [
            DateTime::make('createdAt')->sortable()->readOnly(),
            DateTime::make('updatedAt')->sortable()->readOnly(),
            Str::make('title'),
            Str::make('abstract'),
            Str::make('description'),
            Str::make('client'),
            Str::make('location'),
            Str::make('year'),
            Str::make('seo_title'),
            Str::make('seo_description')
        ]);
    }

    /**
     * Get the resource filters.
     *
     * @return array
     */
    public function filters(): array
    {
        $filters = parent::filters();

        return array_merge($filters, [
            //
        ]);
    }
}

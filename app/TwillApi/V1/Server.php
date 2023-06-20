<?php

namespace App\TwillApi\V1;

use LaravelJsonApi\Core\Server\Server as BaseServer;

class Server extends BaseServer
{

    /**
     * The base URI namespace for this server.
     *
     * @var string
     */
    protected string $baseUri = '/api/v1';

    /**
     * Bootstrap the server when it is handling an HTTP request.
     *
     * @return void
     */
    public function serving(): void
    {
        // no-op
    }

    /**
     * Get the server's list of schemas.
     *
     * @return array
     */
    protected function allSchemas(): array
    {
        return [
            // @TODO
            \A17\Twill\API\JsonApi\V1\Blocks\BlockSchema::class,
            \A17\Twill\API\JsonApi\V1\Features\FeatureSchema::class,
            \A17\Twill\API\JsonApi\V1\Files\FileSchema::class,
            \A17\Twill\API\JsonApi\V1\Medias\MediaSchema::class,
            \A17\Twill\API\JsonApi\V1\RelatedItems\RelatedItemSchema::class,
            \A17\Twill\API\JsonApi\V1\Settings\SettingSchema::class,
            \A17\Twill\API\JsonApi\V1\Tags\TagSchema::class,
            \A17\Twill\API\JsonApi\V1\Users\UserSchema::class,
            News\NewsSchema::class,
        ];
    }

    function authorizable(): bool
    {
        return false;
    }
}

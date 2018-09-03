<?php

namespace ElusiveDocks\Reporter\Source\Handler;

use ElusiveDocks\Reporter\Contract\HandlerInterface;
use Whoops\Handler\JsonResponseHandler;

/**
 * Class JsonHandler
 * @package ElusiveDocks\Reporter\Source\Handler
 */
class JsonHandler extends AbstractHandler implements HandlerInterface
{
    /**
     * JsonHandler constructor.
     */
    public function __construct()
    {
        $this->setServiceProviderAdapter(
            new JsonResponseHandler()
        );
    }
}

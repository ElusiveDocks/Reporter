<?php

namespace ElusiveDocks\Peacemaker\Source\Handler;

use ElusiveDocks\Peacemaker\Contract\HandlerInterface;
use Whoops\Handler\JsonResponseHandler;

/**
 * Class JsonHandler
 * @package ElusiveDocks\Peacemaker\Source\Handler
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

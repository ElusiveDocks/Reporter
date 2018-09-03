<?php

namespace ElusiveDocks\Peacemaker\Source\Handler;

use ElusiveDocks\Peacemaker\Contract\HandlerInterface;
use Whoops\Handler\PlainTextHandler;

/**
 * Class TextHandler
 * @package ElusiveDocks\Peacemaker\Source\Handler
 */
class TextHandler extends AbstractHandler implements HandlerInterface
{
    /**
     * TextHandler constructor.
     */
    public function __construct()
    {
        $this->setServiceProviderAdapter(
            new PlainTextHandler()
        );
    }
}

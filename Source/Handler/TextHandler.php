<?php

namespace ElusiveDocks\Reporter\Source\Handler;

use ElusiveDocks\Reporter\Contract\HandlerInterface;
use Whoops\Handler\PlainTextHandler;

/**
 * Class TextHandler
 * @package ElusiveDocks\Reporter\Source\Handler
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

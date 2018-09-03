<?php

namespace ElusiveDocks\Reporter\Source\Handler;

use ElusiveDocks\Reporter\Contract\HandlerInterface;
use Whoops\Handler\PrettyPageHandler;

/**
 * Class HtmlHandler
 * @package ElusiveDocks\Reporter\Source\Handler
 */
class HtmlHandler extends AbstractHandler implements HandlerInterface
{
    /**
     * HtmlHandler constructor.
     */
    public function __construct()
    {
        $this->setServiceProviderAdapter(
            new PrettyPageHandler()
        );
    }
}

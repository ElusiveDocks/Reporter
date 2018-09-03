<?php

namespace ElusiveDocks\Peacemaker\Source\Handler;

use ElusiveDocks\Peacemaker\Contract\HandlerInterface;
use Whoops\Handler\PrettyPageHandler;

/**
 * Class HtmlHandler
 * @package ElusiveDocks\Peacemaker\Source\Handler
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

<?php

namespace ElusiveDocks\Peacemaker\Source\Handler;

use Whoops\Run;

/**
 * Class GenericHandler
 * @package ElusiveDocks\Peacemaker\Source\Handler
 */
class GenericHandler extends AbstractHandler
{
    /**
     * GenericHandler constructor.
     */
    public function __construct()
    {
        $this->setServiceProviderAdapter(
            new Run()
        );
    }

    /**
     * @return GenericHandler
     */
    public function registerHandler()
    {
        $this->getServiceProviderAdapter()->pushHandler(
            new \Whoops\Handler\PrettyPageHandler
        );

        $this->getServiceProviderAdapter()->register();
        return $this;
    }
}

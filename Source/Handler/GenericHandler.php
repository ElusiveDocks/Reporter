<?php

namespace ElusiveDocks\Peacemaker\Source\Handler;

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
        $this->getServiceProviderAdapter()->pushHandler(
            new \Whoops\Handler\PrettyPageHandler
        );
    }

    /**
     * @return GenericHandler
     */
    public function registerHandler()
    {
        $this->getServiceProviderAdapter()->register();
        return $this;
    }
}

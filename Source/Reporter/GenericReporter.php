<?php

namespace ElusiveDocks\Peacemaker\Source\Reporter;

use ElusiveDocks\Peacemaker\Contract\HandlerInterface;
use Whoops\Run;

/**
 * Class GenericReporter
 * @package ElusiveDocks\Peacemaker\Source\Reporter
 */
class GenericReporter extends AbstractReporter
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
     * @param HandlerInterface $handler
     * @return GenericReporter
     */
    public function pushHandler( HandlerInterface $handler )
    {
        $this->getServiceProviderAdapter()->pushHandler(
            $handler->getServiceProviderAdapter()
        );
        return $this;
    }

    /**
     * @return GenericReporter
     */
    public function registerReporter()
    {
        $this->getServiceProviderAdapter()->register();
        return $this;
    }
}

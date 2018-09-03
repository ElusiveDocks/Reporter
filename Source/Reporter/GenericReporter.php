<?php

namespace ElusiveDocks\Reporter\Source\Reporter;

use ElusiveDocks\Reporter\Contract\HandlerInterface;
use Whoops\Run;

/**
 * Class GenericReporter
 * @package ElusiveDocks\Reporter\Source\Reporter
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

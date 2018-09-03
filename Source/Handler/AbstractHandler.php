<?php

namespace ElusiveDocks\Peacemaker\Source\Handler;

use ElusiveDocks\Peacemaker\Contract\HandlerInterface;
use Whoops\Handler\HandlerInterface as ServiceProviderInterface;

/**
 * Class AbstractHandler
 * @package ElusiveDocks\Peacemaker\Source\Handler
 */
abstract class AbstractHandler implements HandlerInterface
{
    /** @var null|ServiceProviderInterface $ServiceProviderAdapter */
    private $ServiceProviderAdapter = null;

    /**
     * @return null|ServiceProviderInterface
     */
    public function getServiceProviderAdapter(): ?ServiceProviderInterface
    {
        return $this->ServiceProviderAdapter;
    }

    /**
     * @param ServiceProviderInterface|null $ServiceProviderAdapter
     * @return AbstractHandler
     */
    public function setServiceProviderAdapter(?ServiceProviderInterface $ServiceProviderAdapter): AbstractHandler
    {
        $this->ServiceProviderAdapter = $ServiceProviderAdapter;
        return $this;
    }
}

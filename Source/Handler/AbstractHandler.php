<?php

namespace ElusiveDocks\Peacemaker\Source\Handler;

use Whoops\Run;

/**
 * Class AbstractHandler
 * @package ElusiveDocks\Peacemaker\Source\Handler
 */
abstract class AbstractHandler
{
    /** @var null|Run $ServiceProviderAdapter */
    private $ServiceProviderAdapter = null;

    /**
     * @return null|Run
     */
    public function getServiceProviderAdapter(): ?Run
    {
        return $this->ServiceProviderAdapter;
    }

    /**
     * @param Run|null $ServiceProviderAdapter
     * @return AbstractHandler
     */
    public function setServiceProviderAdapter(?Run $ServiceProviderAdapter): AbstractHandler
    {
        $this->ServiceProviderAdapter = $ServiceProviderAdapter;
        return $this;
    }
}

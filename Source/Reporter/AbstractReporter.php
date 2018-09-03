<?php

namespace ElusiveDocks\Peacemaker\Source\Reporter;

use Whoops\Run;

/**
 * Class AbstractReporter
 * @package ElusiveDocks\Peacemaker\Source\Reporter
 */
abstract class AbstractReporter
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
     * @return AbstractReporter
     */
    public function setServiceProviderAdapter(?Run $ServiceProviderAdapter): AbstractReporter
    {
        $this->ServiceProviderAdapter = $ServiceProviderAdapter;
        return $this;
    }
}

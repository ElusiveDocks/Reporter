<?php

namespace ElusiveDocks\Peacemaker\Contract;

/**
 * Interface HandlerInterface
 * @package ElusiveDocks\Peacemaker\Contract
 */
interface HandlerInterface
{
    /**
     * @return null|\Whoops\Handler\HandlerInterface
     */
    public function getServiceProviderAdapter(): ?\Whoops\Handler\HandlerInterface;
}

<?php

namespace ElusiveDocks\Reporter\Contract;

/**
 * Interface HandlerInterface
 * @package ElusiveDocks\Reporter\Contract
 */
interface HandlerInterface
{
    /**
     * @return null|\Whoops\Handler\HandlerInterface
     */
    public function getServiceProviderAdapter(): ?\Whoops\Handler\HandlerInterface;
}

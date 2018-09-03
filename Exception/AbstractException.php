<?php

namespace ElusiveDocks\Peacemaker\Exception;

use ElusiveDocks\Peacemaker\Contract\ExceptionInterface;

/**
 * Class AbstractException
 * @package ElusiveDocks\Peacemaker\Exception
 */
abstract class AbstractException extends \Exception implements ExceptionInterface
{
    /**
     * @return string
     */
    public function __toString()
    {
        return parent::__toString();
    }
}

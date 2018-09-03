<?php

namespace ElusiveDocks\Reporter\Exception;

use ElusiveDocks\Reporter\Contract\ExceptionInterface;

/**
 * Class AbstractException
 * @package ElusiveDocks\Reporter\Exception
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

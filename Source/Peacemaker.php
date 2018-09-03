<?php

namespace ElusiveDocks\Peacemaker\Source;

use ElusiveDocks\Peacemaker\Source\Handler\GenericHandler;

/**
 * Class Peacemaker
 * @package ElusiveDocks\Peacemaker\Source
 */
class Peacemaker
{
    private static $Self = null;
    private static $Singleton = null;

    /**
     * Peacemaker constructor.
     */
    final private function __construct()
    {


    }

    /**
     * @return Peacemaker
     */
    public static function enableHandler()
    {
        self::useSingleton()->registerHandler();

        return self::useSelf();
    }

    /**
     * @return GenericHandler
     */
    private static function useSingleton()
    {
        if (self::$Singleton === null) {
            self::$Singleton = new GenericHandler();
        }
        return self::$Singleton;
    }

    /**
     * @return Peacemaker
     */
    private static function useSelf()
    {
        if (self::$Self === null) {
            self::$Self = new self;
        }
        return self::$Self;
    }
}

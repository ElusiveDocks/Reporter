<?php

namespace ElusiveDocks\Peacemaker\Source;

use ElusiveDocks\Peacemaker\Contract\HandlerInterface;
use ElusiveDocks\Peacemaker\Source\Handler\HtmlHandler;
use ElusiveDocks\Peacemaker\Source\Handler\JsonHandler;
use ElusiveDocks\Peacemaker\Source\Handler\TextHandler;
use ElusiveDocks\Peacemaker\Source\Reporter\GenericReporter;

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
     * @param null|HandlerInterface $handler
     * @return Peacemaker
     */
    public static function enableHandler(HandlerInterface $handler = null)
    {
        if ($handler === null) {
            $handler = self::useSelf()->createTextHandler();
        }

        self::useSingleton()->pushHandler($handler);
        self::useSingleton()->registerReporter();

        return self::useSelf();
    }

    /**
     * @return TextHandler
     */
    public static function createTextHandler()
    {
        return new TextHandler();
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

    /**
     * @return GenericReporter
     */
    private static function useSingleton()
    {
        if (self::$Singleton === null) {
            self::$Singleton = new GenericReporter();
        }
        return self::$Singleton;
    }

    /**
     * @return HtmlHandler
     */
    public static function createHtmlHandler()
    {
        return new HtmlHandler();
    }

    /**
     * @return JsonHandler
     */
    public static function createJsonHandler()
    {
        return new JsonHandler();
    }
}

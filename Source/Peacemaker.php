<?php

namespace ElusiveDocks\Reporter\Source;

use ElusiveDocks\Reporter\Contract\HandlerInterface;
use ElusiveDocks\Reporter\Source\Handler\HtmlHandler;
use ElusiveDocks\Reporter\Source\Handler\JsonHandler;
use ElusiveDocks\Reporter\Source\Handler\TextHandler;
use ElusiveDocks\Reporter\Source\Reporter\GenericReporter;

/**
 * Class Reporter
 * @package ElusiveDocks\Reporter\Source
 */
class Reporter
{
    private static $Self = null;
    private static $Singleton = null;

    /**
     * Reporter constructor.
     */
    final private function __construct()
    {


    }

    /**
     * @param null|HandlerInterface $handler
     * @return Reporter
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
     * @return Reporter
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

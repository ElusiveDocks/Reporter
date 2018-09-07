<?php

namespace ElusiveDocks\Reporter\Test;

use ElusiveDocks\Reporter\Source\Handler\HtmlHandler;
use ElusiveDocks\Reporter\Source\Handler\JsonHandler;
use ElusiveDocks\Reporter\Source\Handler\TextHandler;
use ElusiveDocks\Reporter\Source\Reporter;
use PHPUnit\Framework\TestCase;

/**
 * Class ReporterTest
 * @package ElusiveDocks\Reporter\Test
 */
class ReporterTest extends TestCase
{


    public function testCreateTextHandler()
    {
        $this->assertEquals(new TextHandler(), Reporter::createTextHandler());
    }

    public function testCreateHtmlHandler()
    {
        $this->assertEquals(new HtmlHandler(), Reporter::createHtmlHandler());
    }

    public function testCreateJsonHandler()
    {
        $this->assertEquals(new JsonHandler(), Reporter::createJsonHandler());
    }

    public function testEnableHandler()
    {
        $this->assertEquals(
            Reporter::enableHandler(
                Reporter::createTextHandler()
            ),
            Reporter::enableHandler()
        );

        try {
            throw new \Exception();
        } catch (\Exception $exception) {
            $this->assertEquals(\Exception::class, get_class($exception));
        }
    }

}

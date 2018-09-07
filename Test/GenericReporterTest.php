<?php

namespace ElusiveDocks\Reporter\Test;

use ElusiveDocks\Reporter\Source\Handler\HtmlHandler;
use ElusiveDocks\Reporter\Source\Handler\JsonHandler;
use ElusiveDocks\Reporter\Source\Handler\TextHandler;
use ElusiveDocks\Reporter\Source\Reporter\GenericReporter;
use PHPUnit\Framework\TestCase;

/**
 * Class GenericReporterTest
 * @package ElusiveDocks\Reporter\Test
 */
class GenericReporterTest extends TestCase
{
    /** @var null|GenericReporter $Probe */
    protected $Probe = null;

    public function testPushHandler()
    {
        $this->assertEquals($this->Probe, $this->Probe->pushHandler(new TextHandler()));
        $this->assertEquals($this->Probe, $this->Probe->pushHandler(new JsonHandler()));
        $this->assertEquals($this->Probe, $this->Probe->pushHandler(new HtmlHandler()));
    }

    public function testRegisterReporter()
    {
        $this->assertEquals($this->Probe, $this->Probe->registerReporter());
    }

    /**
     * This method is called before each test.
     */
    protected function setUp()
    {
        $this->Probe = new GenericReporter();

    }

    /**
     * This method is called after each test.
     */
    protected function tearDown()
    {
        $this->Probe = null;
    }
}

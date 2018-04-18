<?php

use \PHPUnit\Framework\TestCase;
use \Events\BugCloseEvent;
require '../../vendor/autoload.php';
final class BugCloseTest extends TestCase
{
    public function testCanBeCreatedEventObject(): void
    {
        $bugCloseEvent = new BugCloseEvent("Tester");
        $class =  get_class($bugCloseEvent);
        $this->assertEquals('Events\BugCloseEvent',  $class);
    }
    public function testUserName(): void
    {
        $bugCloseEvent = new BugCloseEvent("Tester");
        $this->assertEquals("Tester", $bugCloseEvent->getUserName());
    }
}
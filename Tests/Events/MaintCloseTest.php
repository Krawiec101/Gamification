<?php

use PHPUnit\Framework\TestCase;
use Events\MaintCloseEvent;
use ValueObjects\Worklog;
require '../../vendor/autoload.php';
final class BugCloseTest extends TestCase
{
    public function testCanBeCreatedEventObject(): void
    {
        $worklog = new Worklog();
        $bugCloseEvent = new MaintCloseEvent($worklog);
        $class =  get_class($bugCloseEvent);
        $this->assertEquals('Events\MaintCloseEvent',  $class);
    }
}
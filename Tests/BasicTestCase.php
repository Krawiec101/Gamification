<?php

use \PHPUnit\Framework\TestCase;
require '../vendor/autoload.php';
abstract class BasicTestCase extends TestCase
{
    public function testBase(): void
    {
        $this->assertEquals(1,1);
    }
}
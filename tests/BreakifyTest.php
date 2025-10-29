<?php

namespace AJ\LineBreak\Tests;

use AJ\LineBreak\Breakify;
use PHPUnit\Framework\TestCase;

class BreakifyTest extends TestCase
{
    public function testCheckRequestForCli()
    {
        $linebreakObject = new Breakify();
        $this->assertEquals('cli', $linebreakObject->checkRequest());
    }
}

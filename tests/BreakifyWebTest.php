<?php

namespace AJ\LineBreak\Tests;

use AJ\LineBreak\Breakify;
use PHPUnit\Framework\MockObject\MockClass;
use PHPUnit\Framework\TestCase;

class BreakifyWebTest extends TestCase
{
    protected Breakify $breakifyMockObject;
    public function setUp(): void
    {
        $this->breakifyMockObject = $this->getMockBuilder(Breakify::class)
            ->onlyMethods(['isCliEnv'])
            ->enableOriginalConstructor()
            ->getMock();
    }

    public function testCheckRequestForWebWhenIsCLiReturnFalse()
    {
        // set isCli() return to false for web
        $this->breakifyMockObject->expects($this->once())
            ->method('isCliEnv')
            ->willReturn(false);
        $this->assertEquals('web', $this->breakifyMockObject->checkRequest());
    }

    public function testPLineBreakForWebBrTag()
    {
        $this->assertEquals('<br />', $this->breakifyMockObject->pLineBreak());
    }
}

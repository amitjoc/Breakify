<?php

namespace AJ\LineBreak\Tests;

use AJ\LineBreak\Breakify;
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
        $this->assertEquals('web', $this->breakifyMockObject->exeEnvType());
    }

    public function testPLineBreakForWebBrTag()
    {
        $this->assertEquals('<br />', $this->breakifyMockObject->getLineBreak());
    }

    public function testPrintWebBrTag()
    {
        $this->expectOutputString('<br />');
        $this->breakifyMockObject->pbr();
    }

    public function testPrintHrTag()
    {
        $this->expectOutputString('<hr />');
        $this->breakifyMockObject->phr();
    }

    public function testPrintDashedHrTag()
    {
        $this->expectOutputString("<hr style='border-style: dashed' />");
        $this->breakifyMockObject->phrDashed();
    }

    public function testPrintDottedHrTag()
    {
        $this->expectOutputString("<hr style='border-style: dotted' />");
        $this->breakifyMockObject->phrDotted();
    }

    public function testPrintDoubledHrTag()
    {
        $this->expectOutputString("<hr style='border-style: double' />");
        $this->breakifyMockObject->phrDouble();
    }

    public function testPrintRidgeHrTag()
    {
        $this->expectOutputString("<hr style='border-style: ridge' />");
        $this->breakifyMockObject->phrRidge();
    }
}

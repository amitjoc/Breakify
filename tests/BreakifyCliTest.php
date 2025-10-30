<?php

namespace AJ\LineBreak\Tests;

use AJ\LineBreak\Breakify;
use PHPUnit\Framework\TestCase;

class BreakifyCliTest extends TestCase
{
    protected Breakify $breakifyMockObject;
    public function setUp(): void
    {
        $this->breakifyMockObject = $this->getMockBuilder(Breakify::class)
        ->onlyMethods(['isCliEnv'])->getMock();
        // mock isCli() to always return true as these tests are only for Cli
        $this->breakifyMockObject->expects($this->any())
            ->method('isCliEnv')
            ->willReturn(true);
    }

    public function testCheckRequestForCliWhenIsCLiReturnTrue()
    {

        $this->assertEquals('cli', $this->breakifyMockObject->exeEnvType());
    }

    public function testPrintNewLineForCliSingleLine()
    {
        $this->expectOutputString(PHP_EOL);
        $this->breakifyMockObject->pNewLine();
    }

    public function testPrintNewDoubleLineForCli()
    {
        $this->expectOutputString(PHP_EOL . PHP_EOL);
        $this->breakifyMockObject->pNewLine(true);
    }

    public function testCliBeep()
    {
        $this->expectOutputString(chr(7));
        $this->breakifyMockObject->cliBeep();
    }
}

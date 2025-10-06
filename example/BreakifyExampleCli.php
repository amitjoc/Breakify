<?php

use AJ\LineBreak\Breakify;

include_once dirname(__DIR__) . "/vendor/autoload.php";

$cliBreak = new Breakify();

$cliBreak->cliBeep();

echo "This is cli first line.";
$cliBreak->pnl();
echo "This is cli second line.";

$cliBreak->pnl();
echo "Before this line only one new line is there after this line 2 new line break applied";
$cliBreak->pnl(true);
echo "2 Line Break before this";

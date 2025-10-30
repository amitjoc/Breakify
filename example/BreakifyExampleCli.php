<?php

use AJ\LineBreak\Breakify;

include_once dirname(__DIR__) . "/vendor/autoload.php";

$cliBreak = new Breakify();

//$cliBreak->cliBeep();

echo $cliBreak->getLineBreak();
echo "This is cli first line.";
$cliBreak->pNewLine();
echo "This is cli second line.";

$cliBreak->pNewLine();
echo "Before this line only one new line is there after this line 2 new line break applied";
$cliBreak->pNewLine();
echo "2 Line Break before this";

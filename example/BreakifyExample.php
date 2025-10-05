<?php

use AJ\LineBreak\Breakify;

include_once dirname(__DIR__) . "/vendor/autoload.php";

$lineBreak = new Breakify();

// To check request is coming form web or cli
echo $lineBreak->checkRequest();

// Prints web break
$lineBreak->pbr();

// prints horizontal line for web if true is passed as argument
echo "Horizontal Line: <code>pbr(true)</code>";
$lineBreak->pbr(true);
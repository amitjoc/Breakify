<?php

use AJ\LineBreak\Breakify;

include_once dirname(__DIR__) . "/vendor/autoload.php";

$lineBreak = new Breakify();

// To check request is coming form web or cli
echo "<code>checkRequest()</code> : ";
echo $lineBreak->exeEnvType();

echo "<h1>For Web</h1>";
echo "<h3>Printing Web break</h3>";
echo '<code>$lineBreak->pbr()</code>';
$lineBreak->pbr();
echo "<h3>Printing Horizontal Line</h3>";
echo "Horizontal Line: <code>pbr(true)</code>";
$lineBreak->pbr();
echo "Horizontal Line: <code>phr()</code>";
$lineBreak->phr();
echo "Horizontal Dashed Line: <code>phr_dashed()</code>";
$lineBreak->phrDashed();
echo "Horizontal Dotted Line: <code>phr_dotted()</code>";
$lineBreak->phrDotted();
echo "Horizontal ridge Line: <code>phr_ridge()</code>";
$lineBreak->phrRidge();
echo "Horizontal double Line: <code>phr_double()</code>";
$lineBreak->phrDouble();

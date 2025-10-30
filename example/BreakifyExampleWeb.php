<?php

use AJ\LineBreak\Breakify;

include_once dirname(__DIR__) . "/vendor/autoload.php";

$web = new Breakify();

// To check request is coming form web or cli
echo "<code>exeEnvType()</code> : ";
echo $web->exeEnvType();

echo "<h1>For Web</h1>";

echo "<h3>Printing Web break</h3>";

echo '<code>$web->pbr()</code>';
$web->pbr();


echo "<h3>Printing Horizontal Line</h3>";

echo "Horizontal Line: <code>phr()</code>";
$web->phr();

echo "Horizontal Dashed Line: <code>phr_dashed()</code>";
$web->phrDashed();

echo "Horizontal Dotted Line: <code>phr_dotted()</code>";
$web->phrDotted();

echo "Horizontal ridge Line: <code>phr_ridge()</code>";
$web->phrRidge();

echo "Horizontal double Line: <code>phr_double()</code>";
$web->phrDouble();

<?php

use AJ\LineBreak\Breakify;

include_once dirname(__DIR__) . "/vendor/autoload.php";

$lineBreak = new Breakify();

// To check request is coming form web or cli
echo "<code>checkRequest()</code> : "; echo $lineBreak->checkRequest();

echo "<h1>For Web</h1>";

echo "<h3>Printing Web break</h3>";
// Prints web break
echo '<code>$lineBreak->pbr()</code>';
$lineBreak->pbr();

// prints horizontal line for web if true is passed as argument
echo "<h3>Printing Horizontal Line</h3>";
echo "Horizontal Line: <code>pbr(true)</code>";                 $lineBreak->pbr(true);
echo "Horizontal Line: <code>phr()</code>";                     $lineBreak->phr();
echo "Horizontal Dashed Line: <code>phr_dashed()</code>";       $lineBreak->phr_dashed();
echo "Horizontal Dotted Line: <code>phr_dotted()</code>";       $lineBreak->phr_dotted();
echo "Horizontal ridge Line: <code>phr_ridge()</code>";         $lineBreak->phr_ridge();
echo "Horizontal double Line: <code>phr_double()</code>";       $lineBreak->phr_double();

$lineBreak->pLineBreak();
echo "<h1>For CLI</h1>";
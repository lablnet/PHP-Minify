<?php

require_once '../vendor/autoload.php';

$minify = new Minify();
$file = $minify->htmlMinify('test.html');
$file = $minify->cssMinify("test.html");
$file = $minify->javascriptMinify("test.html");

var_dump($file);

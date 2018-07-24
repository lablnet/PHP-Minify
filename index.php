<?php 
require_once 'classes/Minify.php';

$minify = new Minify;

$file = $minify->htmlMinify("test.html");
var_dump($file);
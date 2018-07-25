<?php 
require_once 'classes/Minify.php';

$minify = new Minify;
$file = $minify->htmlMinify("test.html");
//$file = $minify->cssMinify("boostrap.css");
var_dump($file);
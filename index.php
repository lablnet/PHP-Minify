<?php 
require_once 'classes/Minify.php';

$minify = new Minify;

$file = $minify->cssMinify("boostrap.css");
var_dump($file);
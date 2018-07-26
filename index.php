<?php 
require_once 'classes/Minify.php';

$minify = new Minify;
$file = $minify->htmlMinify("test.html");
//$file = $minify->cssMinify("boostrap.css");
//$file = $minify->javascriptMinify("jsfile");
/* OR */
//$code = $minify->htmlMinify($code,"code");
//$code = $minify->cssMinify($code,"code")
//$code = $minify->javascriptMinify($code,"code")
/* These three functions support two arguments
First file or code,
second type default is file if you passed code so you should passed code in first argument
*/
var_dump($file);
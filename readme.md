# PHP Minify
Minify your code with php

## Requirement
1. PHP 7 (7.3 Recommanded).
2. Composer.

## Insallation
Installing this package is very simple, first ensure you have the right PHP version and composer installed then in your terminal/(command prompt) run:
``` composer require lablnet/minify```

## Feature
-   Minify HTML
-   Minify CSS
-   Minify JavaScript

## Example
```php
<?php
# index.php

require_once '../vendor/autoload.php';

$minify = new Minify();
$file = $minify->htmlMinify('test.html');
$file = $minify->cssMinify("test.html");
$file = $minify->javascriptMinify("test.html");

var_dump($file);
```
```test.html```
```html
<!DOCTYPE html>
<html>
<head>
	<title>Im not mainfied</title>
	<style type="text/css">
	/*im comments in css block */
		body {
			background-color: black;
			color: white;
			/*display: inline-flex;*/
		}
	</style>
</head>
<body>
	<h1>Im heading</h1>
	<p>Im paragraph</p>
	<p id='demo'></p>
	<!-- Im html comments  -->
</body>
<script type="text/javascript">
	/* im script */
	document.getElementById('demo').innerHTML = 'Hello JavaScript';
</script>
</html>
```

## Methods

- `htmlMinify($file, $type)` Minify HTML code, `$file` file path or code, `$type` supported, file, code.
- `cssMinify($file, $type)` Minify CSS code, `$file` file path or code, `$type` supported, file, code.
- `javascriptMinify($file, $type)` Minify JS code, `$file` file path or code, `$type` supported, file, code.

## Contributions  
There is still a lot of work to do, so feel free to contribute to open `PR`  
  
## License  
MIT  
  
## Support  
Donate coffee?  
here is the bitcoin address  
[![Balance](https://img.balancebadge.io/btc/37x6PA4qtPu2fQnYdW5U7jztYhbchASpBV.svg)](https://img.balancebadge.io/btc/37x6PA4qtPu2fQnYdW5U7jztYhbchASpBV.svg)

   ```37x6PA4qtPu2fQnYdW5U7jztYhbchASpBV```  
  
Thanks you so much.

## Disclaimer
**I don't Accept any responsibility for any illegal usage**
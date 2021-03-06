--TEST--
Test imagecolorstotal() function : error conditions - Pass invalid resource type
--SKIPIF--
<?php
if(!extension_loaded('gd')) {
    die('skip gd extension is not loaded');
}
if(!function_exists('imagecolorstotal')) {
    die('skip imagecolorstotal function is not available');
}
?>
--FILE--
<?php
/* Prototype  : int imagecolorstotal  ( resource $image  )
 * Description: Find out the number of colors in an image's palette
 * Source code: ext/gd/gd.c
 */

echo "*** Testing imagecolorstotal() : error conditions ***\n";

// Get a resource
$im = fopen(__FILE__, 'r');

echo "\n-- Testing imagecolorstotal() function with a invalid resource\n";
var_dump( imagecolorstotal($im) );

fclose($im);
?>
===DONE===
--EXPECTF--
*** Testing imagecolorstotal() : error conditions ***

-- Testing imagecolorstotal() function with a invalid resource

Warning: imagecolorstotal(): supplied resource is not a valid Image resource in %s on line %d
bool(false)
===DONE===

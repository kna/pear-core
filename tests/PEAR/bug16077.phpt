--TEST--
Bug #16077: PEAR5::getStaticProperty does not return a reference to the property
--FILE--
<?php
require_once 'PEAR.php';

$skiptrace1 = &PEAR::getStaticProperty('PEAR_Error', 'skiptrace1');
$skiptrace1 = true;
var_dump(PEAR::getStaticProperty('PEAR_Error', 'skiptrace1'));

$skiptrace = &PEAR5::getStaticProperty('PEAR_Error', 'skiptrace');
$skiptrace = true;
var_dump(PEAR5::getStaticProperty('PEAR_Error', 'skiptrace'));
?>
--EXPECT--
bool(true)
bool(true)
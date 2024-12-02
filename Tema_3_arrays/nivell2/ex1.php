<?php
$primer_nums = array("1", "5", "9", "7", "8", "3");
$segun_nums= array("1.55", "5", "9.99", "7.1", "6.5", "3");

$tercer = array_intersect($primer_nums,$segun_nums);         //array_intersect(array1, array2, array3, ...)

echo " !intersection arrays: ";
print_r($tercer);

echo "!la mescla array: "; 
print_r(array_merge($primer_nums,$segun_nums));               //array_merge(array1, array2, array3, ...)

?>
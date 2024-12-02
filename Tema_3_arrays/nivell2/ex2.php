<?php
//an associative array grades of/the students of a clas
//key will be the name of each student.5 (rated grades from 0 to 10) for each student.
//a function that, given the grades of all/the students, shows us both the average grade of each student,
// and the average grade of the entire class.

$students = array("joan" => [5, 7, 6, 1, 9], "max" => [4, 0, 5, 4, 6], "david" => [3, 9, 7, 8, 4]);

$stu_1 = $students["joan"];
$stu_2 = $students["max"];
$stu_3 = $students["david"];

echo " la nota media de \"joan\"  es   : " . $stu_1_average  = array_sum($stu_1) / count($students["joan"]);
echo "\n la nota media de \"max\"   es   : " . $stu_2_average  = array_sum($stu_2) / count($students["max"]);
echo "\n la nota media de \"david\" es   : " . $stu_3_average  = array_sum($stu_3) / count($students["david"]);


$toal_avrage = ($stu_1_average + $stu_2_average + $stu_3_average) / 3;
echo "\n la media de toda la clase es  : " . $toal_avrage;

// foreach ($students as $key => $value) {
//  echo "\n the toal sum of students is : " . $sum_total = array_sum($value); /// 5 to get the average
// echo "\n average is: " . $sum_total = $sum_total / count($value);
// }
?>
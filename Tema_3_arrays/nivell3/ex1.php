<?php
//Given an array of integers, make a program that:
//Return each value of the raised array to the cube using the function array_map().

$my_array = array(6, 4, 6, 5, 7, 9);

function encontrar_cube_num($my_array)
{

    $resultado = array_map(fn($a) => pow($a, 3), $my_array);
    return $resultado;
}

print_r($resultado = encontrar_cube_num($my_array));
?>
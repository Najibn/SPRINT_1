<?php

function calificacion($grade) :String{
if ($grade >= 60) {
    $result = "Primera Division!";
  } elseif ($grade >= 45) {
    $result = "Segunda Division!";
  } elseif ($grade >= 33) {
    $result = "Tercera Division!";
  }else{
    $result = "Reprendido!";
  }
  return $result;
}

echo calificacion(60). "  ";
echo calificacion(45)  . "  ";
echo calificacion(33)  . "  ";
echo calificacion(12)  . "  ";















?>
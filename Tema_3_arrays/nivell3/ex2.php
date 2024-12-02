<?php
// Given a string of strings, make a program that:
// Return an array where only strings have an even name using the function array_filter().
//array array_filter ( array $array [, callable $callback [, int $flag = 0 ]] ) 
 
$mis_palabras = ["Caminante", "si", "somos ", "niveles", "palabras" ,"pares ", "juntos"];

function encontrar_pares($mis_palabras)
{
    foreach ($mis_palabras as $palabras) {
      $resultado = array_filter($mis_palabras, fn($palabras)=> strlen($palabras) % 2 == 0);
    
return $resultado;
   
    }
    
}

echo "las palabras pares son: ";
print_r(array_values($resultado = encontrar_pares($mis_palabras)));

?>
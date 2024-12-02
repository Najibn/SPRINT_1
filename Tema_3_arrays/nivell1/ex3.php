<?php

function mi_plabra(array $palabras, $character)
{

    foreach ($palabras as $p) {
        $posicion = strpos($p, $character);
        if ($posicion !== false) {                                     //stripos(string,find,start)
            return true . ": existe";
        } else {
            return false . ": No existe";
        }
    }
}    

$palabras = array("hola", "Php", "Html");


echo  mi_plabra($palabras, "h"). "\n";
echo  mi_plabra($palabras, "p") ;

?>
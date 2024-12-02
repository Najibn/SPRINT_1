<?php

function llamada($minsllamada){

    if($minsllamada >= 0 && $minsllamada <= 3 ){
       return  10;
    }elseif ($minsllamada > 3 ) {
        return  (($minsllamada - 3)* 5) + 10;
    }else {
        return  "entrada invalida!";
    }
}


  echo "  el coste de la llamada es :". llamada(-1)."\n";
  echo "  el coste de la llamada es: ". llamada(2)."\n";
  echo "  el coste de la llamada es: ".llamada(3)."\n";
  echo "  el coste de la llamada es: ".llamada(5)."\n";




?>
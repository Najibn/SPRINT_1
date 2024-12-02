<?php

function Xocolata($quantitat){
$choco = 1;
return  $choco * $quantitat;
}

function Xiclets($quantitat){
$Xiclet = 0.5;
return  $Xiclet  * $quantitat;
}

function Caramels($quantitat){
$caramel= 1.5;
return $caramel  * $quantitat;
}

$total = Xocolata(2) + Xiclets(0.5) + Caramels(1.5);
echo "el resultado de : " . Xocolata(2) ." + ". Xiclets(1). " + " .  Caramels(1) . "\n";

echo "= ". (int) $total;





?>
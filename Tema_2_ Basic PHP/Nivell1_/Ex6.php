<?php

 function isBitten() {

    $random_num = (rand(0,100));

    if($random_num >= 0 && $random_num <= 50) {
       return "¡Charlie me mordió!";
    }else {
        return "¡charlie no lo hizo!";
    }

 }

echo isBitten();


?>
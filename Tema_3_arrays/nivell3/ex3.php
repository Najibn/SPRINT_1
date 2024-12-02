<?php
//Given an array of integers, returns the sum of the  integers  that are primes using the function use array_reduce().

$my_array  = [2, 7, 3, 1, 8, 9, 6,11,4,5,10];

function encontrar_primes($value) {
    if ($value <= 1) {
        return false;
    }

    for ($i = 2; $i < $value; $i++) {
        if ($value % $i == 0 || $value % $value == 1 ) {
            return false;
        }
    }

    return true;
}


function verificar_num($carry, $item) {
    if (encontrar_primes($item)) {
       return $item + $carry;
       } else {
     return $carry;

    }
}

$suma_total_primos = array_reduce($my_array, "verificar_num");
print_r($suma_total_primos) ;





// $sum_of_primes = array_reduce($my_array, function($carry, $item){ return encontrar_primes($item) ? $carry + $item : $carry;},0);
//  echo " La suma \"Total(primes)\" es : " .$sum_of_primes ;


// function encontrar_primes($my_array1)
// {
//     $primes = [];


//     foreach ($my_array1 as $value) {
//         if ($value <= 1) {
//            continue;
//         }
//         if ($value == 2 || $value == 3 ){
//             array_push($primes,$value);  // $primes[0]= $value;
//         }
//             if ($value % 2 == 1 &&  $value % 3 !=0) {
//               array_push($primes,$value);
//             }      
//     }
//     return ($primes);
// }

?>

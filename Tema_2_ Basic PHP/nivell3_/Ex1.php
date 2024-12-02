<?php
function eratos($max)
{

    $nums = range(2, $max);
    $primeNumbernums = $nums;               // step1 Start with all numbers as potential primes  

    foreach ($nums as $x) {

        if ($x * $x > $max) {
            break;
        }

        for ($i = 0; $i < count($primeNumbernums); $i++) {

            if ($primeNumbernums[$i] === false) {
                continue;
            }

            if ($primeNumbernums[$i] % $x === 0 && $primeNumbernums[$i] != $x) {
                $primeNumbernums[$i] = false;
            }
        }
    }


    $primes = array_filter($primeNumbernums);

    return $primes;                                 
}

$max = 20;
$primeNumbers = eratos($max);

print_r($primeNumbers) ;
?>
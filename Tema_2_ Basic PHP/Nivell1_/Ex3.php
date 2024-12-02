<?php   
$X = 10 ;
$Y = 2;

$M = 3.142;
$N = 1.99;

$sumo = $X + $Y;
$sumo2 = $N + $M;
echo "el sumo de $X y $Y es {$sumo}\n";
echo "el SUMO de $N y $M es $sumo2 \n";

$resto = $X - $Y;
$resto2 = $N - $M;
echo "el resto de $X y $Y es $resto \n";
echo "el resto de $N y $M es $resto2 \n";

$modulo = (int) $X %  (int) $Y;
$modulo2 = (int) $N %  (int)$M;

echo "el modulo de $X y $Y es $modulo  \n";
echo "el modulo de $N y $M es $modulo2  \n";

echo "el producto de $X y $Y es : " . ($X * $Y). "\n";
echo "el producto de $N y $M es : " . ($N * $M) ."\n";

//El doble de cada variable.
echo "el doble de $X es : ". $doubleVal_X = $X * 2 ."\n";
echo "el doble de $Y es : " . $doubleVal_Y = $Y * 2 ."\n";
echo "el doble de $N es : " . $doubleVal_N = $N * 2 ."\n";
echo "el doble de $M es : " . $doubleVal_M = $M * 2 ."\n";

echo "la suma total es: " . $suma_total = $X + $Y + $M + $N ."\n";
echo "el producto total es: ".$producto_total = $X * $Y * $M * $N ."\n"; 

function calculator($num1, $num2, $symbolo) : int|float{
switch($symbolo) {
case '+':
    $result= $num1 + $num2;
    break;
    case '-':
        $result=  $num1 - $num2;
        break;
    case '*':
        $result=  $num1 * $num2;
        break;
    case '/':
          $result=  $num1 / $num2;
          break;
        default:
        echo "input invalido!";
 }
return $result;
   
}


echo " my function calc es ". calculator(7, 9,'+') . "\n";
echo " my function calc es ". calculator(109, 9,'-') . "\n";
echo " my function calc es ". calculator(9, 9,'*') .    "\n";
echo " my function calc es ". calculator(81,9,'/') .     "\n";


?>
<?php
$X = array (10, 20, 30, 40, 50,60);


echo "el tamaño de mi array es : " .count($X) ."\n";                            //Display the size of the previous array

echo "\n  eliminado el último elemento: \n";                                        // remove an element from the previous array.
array_pop($X);                                                               //last element pops //unset()
print_r($X);

echo "\n arrays sorted \n";                                                  //sorting keys in ascending normalizing keys
   

print_r(array_values($X));                                          
echo "el tamaño de mi nuevo array es : " .count($X) ."\n";         //Display the size of the array one last time.//ksort();


?>
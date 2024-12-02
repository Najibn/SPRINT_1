<?php
function count_nums($start = 10, $count_limit = 20)
{

    $i = 0;
    while ($i <= $count_limit) {
        $resultados[] =  $i;
        $i += $start;
    }


    return $resultados;
}





var_export(count_nums(1, 10));
var_export(count_nums());

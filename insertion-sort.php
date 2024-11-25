<?php

//fincion implementamos el insertion sort en orden ascendente
function insertionSort(&$array) {

    $n = count($array);
    for ($i = 1; $i < $n; $i++) {
        $current = $array[$i];
        $j = $i - 1;

        //comparamos y movemos los elementos hacia la derecha
        while ($j >= 0 && $array[$j] > $current) {
            $array[$j + 1] = $array[$j];
            $j--;
        }
        //insertamos el elemento en la posición correcta
        $array[$j + 1] = $current;
    }
    
    
}
//lista de nombres
$names = ["Ana", "Pedro", "Maria", "Luis", "Sofia", "Carlos", "Laura"];

echo "Lista antes de ordenar:\n";
print_r($names);

//aplicamos el insertion sort
insertionSort($names);

echo "\nLista despues de ordenar alfabeticamente:\n";
print_r($names);


?>
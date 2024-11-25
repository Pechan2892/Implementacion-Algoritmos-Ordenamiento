<?php

//funcion implementar el bubble sort en orden descendente
function mergeSort($array) {
    if (count($array) <= 1) {
        return $array;
}

//dividimos el array en dos mitades
$mid = count($array) / 2;
$left = array_slice($array, 0, $mid);
$right = array_slice($array, $mid);

//ordenamos cada mitad
$left = mergeSort($left);
$right = mergeSort($right);

//unimos las dos mitades ordenadas
return merge($left, $right);

}

function merge($left, $right) {

    $result = [];
    $si = $j = 0;

    while ($si < count($left) && $j < count($right)) {
        if(strcasecmp($left[$si], $right[$j]) < 0) {
            $result[] = $left[$si];
            $si++;
        } else {
            $result[] = $right[$j];
            $j++;
        }
    }


    //agregamos los elementos restantes
    while ($si < count($left)) {
        $result[] = $left[$si];
        $si++;
    }

    while ($j < count($right)) {
        $result[] = $right[$j];
        $j++;
    }

    return $result;
}
// Lista de palabras
$words = ["manzana", "naranja", "plátano", "uva", "limón", "kiwi", "naranja"];

echo "Lista antes de ordenar:\n";
print_r($words);

// Aplicar Merge Sort
$sortedWords = mergeSort($words);

echo "\nLista después de ordenar alfabéticamente:\n";
print_r($sortedWords);
?>
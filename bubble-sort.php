<?php
//funcion implementar el bubble sort en orden descendente
function bubbleSort($array) {
    //iterar cada elemento del array
    $n = count($array);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
           
           // el elemento actual es menor que el siguiente, intercambiarlos
            if ($array[$j] < $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }

    //lista de numeros ordenados con valores de negativos y duplicados
    return $array;
}
echo"Lista Ha Ordenar: \n";
print_r($numeros);

//aplicsmos Bubble Sort
bubbleSortDescending($numeros);

echo"Lista Ordenada: \n";
print_r($numeros);


?>
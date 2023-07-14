<!-- Scrivi una funzione che accetti tre argomenti:
un array e due numeri ("a" più piccolo di "b" e "b" grande al massimo quanto il numero di elementi dell'array).

La funzione ritornerà un nuovo array con i valori che hanno la posizione compresa 
tra "a" e "b" -->
<?php
    $array = [
        'a', 'b', 'c', 'd', 'e'
    ];

    $number1 = 3;
    $number2 = 5;

    function test($array, $number1, $number2,){
        $array2 = [''];

        for ($i=0; $i < count($array); $i++) { 
        array_push($array2, $array[$number1], $array[$number2]);
    }
    var_dump ($array2);
    }
?>
<?php
   
    function customArray($array, $minIndex, $maxIndex,){
        if((count($array) < $maxIndex) ($number1 > $maxIndex))
        for ($i=0; $i < count($array); $i++) { 
        array_push($array2, $array[$number1], $array[$number2]);
    }
    
?>
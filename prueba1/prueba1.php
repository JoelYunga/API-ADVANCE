<?php
echo "Hola mundo";
$cadena = ["a","b","c","d","e","f","g"];
print_r($cadena);
$numeros = [1,2,3,4,5,6,7,8,9,10];
$total = 0;
foreach($numeros as $value) {
    $total+=$value;
}
print_r($total);
$totalPar = 0;
foreach($numeros as $value) {
    if($value%2==0) {
        $$totalPar+=$value;
    }
    
}
print_r($total);
?>
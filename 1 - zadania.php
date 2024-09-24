<?php

//zadanie 1 
$wiek =17;

if($wiek>=18) {
    echo "Użytkownik jest pełnoletni";
} else {
    echo "Użytkownik nie jest pełnoletni";
}

echo "<br>";

//zadanie 2
$liczba = 28379;

if ($liczba%2==0) {
    echo "Podana liczba jest parzysta";
} else {
    echo "Podana liczba nie jest parzysta";
}

echo "<br>";

//zadanie3
$ocena = 5;

switch($ocena) {
    case 5:
        echo "5!";
        break;
    case 4:
        echo "4!";
        break;
    case 3:
        echo "3!";
        break;
    case 2:
        echo "2!";
        break;
    case 1:
        echo "1!";
        break;
}

echo "<br>";

//zadanie 4
$tablica = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);

for ($i=0; $i < 20 ; $i++) { 
    if ($tablica[$i]> 15) {
        echo $tablica[$i]." ";
    } else {continue;}
}

echo "<br>";

//zadanie 5
$podanaData = '2024-09-23';

$aktualnaData = date('Y-m-d');

if ($podanaData < $aktualnaData) {
    echo "Podana data jest w przeszłości.";
} elseif ($podanaData == $aktualnaData) {
    echo "Podana data jest dzisiaj.";
} else {
    echo "Podana data jest w przyszłości.";
}

echo "<br>";

//zadanie 6
 
echo "<br>";
//zadanie 7
$liczba = 23;

if ($liczba>0 && $liczba<=100) {
    echo "1-100";
} elseif ($liczba>100 && $liczba<=500) {
    echo "100 - 500"; 
} elseif ($liczba>500) {
    echo "500-100000";
}
 
echo "<br>";

//zadanie 8

for ($i=0; $i < 100; $i++) { 
    if ($i <50) {
        echo $i." ";
    } else {break;}
}

echo "<br>";

//zadanie 9

for ($i=0; $i < 100; $i++) { 
    if ($i %2 === 0) {
        continue;
    } else {echo $i." ";}
}
echo "<br>";

 ?>
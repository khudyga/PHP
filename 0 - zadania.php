<?php
//ZADANIE 1 
$imiona = array ("imie1","imie2","imie3");

echo "<ul>";
for ($i=0; $i < 3 ; $i++) { 
    echo "<li>".$imiona[$i]."</li>";
}
echo"</ul>";

//ZADANIE 2

$osoby = [
    "osoba1" => [
        "imie" => "imie1",
        "nazwisko" => "nazwisko1"
    ],
    "osoba2" => [
        "imie" => "imie2",
        "nazwisko" => "nazwisko2"
    ]
    ];

echo "<table>  
        <tr>
            <th>imie</th>
            <th>nazwisko</th>
        </tr>";

for ($i=1; $i < 3 ; $i++) {
    echo "<tr><td>".$osoby["osoba".$i]["imie"]."</td><td>".$osoby["osoba".$i]["nazwisko"]."</td></tr>";
}
echo "</table>";

//zadanie 4

$imie = "karolinka";
$nazwisko = "hudyga";
echo $imie." ".$nazwisko;


//zadanie 5

$cena = 5;
$nazwa = "batonik";
echo "zamawiam ".$nazwa." który kosztuje ".$cena;



//zadanie 6
$nazwa = "KOCJAN";
$link = "https://enauka.zskocjan.pl/";
echo ' <p> odwiedź super strone <a href="'.$link.'">'.$nazwa.'</a></p>';

//zadanie 7

$waga = 200;
$wzrost = 1.6;
$bmi = ($waga / ($wzrost * $wzrost));
if ($bmi>=25)
{
    echo '<h2 style="color:red;">CZERWONY</h2>';
} elseif ($bmi<25) {
    echo '<p style="color:green;">ZIELONY</p>';
}
?>

<style>

</style>

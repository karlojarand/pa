<?php

/*
 * Koosta programm, mis hoiab muutujatena järgmised andmed
 * Eesnimi
 * Perenimi
 * Vanus
 * Pikkus meetrites
 * Kaal kilogrammides
 * Väljasta kõik vajalik info ka!
 * */
$eesNimi ="Karl";
$pereNimi =" Ojarand";
$vanus ="20";
$pikkus ="1.87";
$kaal ="70";

echo '<h1>Andmed minu kohta</h1>';
echo 'Eesnimi:'.$eesNimi.'<br>';
echo 'Perenimi:' .$pereNimi.'<br>';
echo 'Vanus:' .$vanus.'<br>';
echo 'Pikkus:'.$pikkus. "<br>";
echo 'Kaal:' .$kaal."<br>";

    $kmi = $kaal / ($pikkus * $pikkus);
    echo 'Minu kehamassiindeks: ' .$kmi.'<br>';
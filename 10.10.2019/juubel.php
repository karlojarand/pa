<?php
// Hetkel olev aasta
$hetkeAasta = 2019;
//Kasutaja poolt sisestatud aasta
$sunniAasta = 1999;
// aastate vahe - kasutaja vanus
$vanus = $hetkeAasta - $sunniAasta;
echo 'Oled '.$vanus.' aastat vana<br>';
// Kontrollime kas vanus jagub viiega
// Leiame jagamise jäägi
$jaak = $vanus % 5;
// kui jääk on null, siis vanus eiu jagu 5'ga
if($jaak == 0){
echo 'Sel aastal on Juubel, PALJU ÕNNE!<br>';
} else {
    echo 'Sellel aastal Juubelit ei ole<br>';
}
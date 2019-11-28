<?php
$number = 25;
$numberFromUser = $_GET['number'];

if(strlen($numberFromUser) > 0) {
// number is ok
if ($numberFromUser == $number) {
    echo 'Arvasid ära, number on' .$number.'!';
} else {
    $diff = abs (number.$numberFromUser - $number); if ($diff <= 5){
        'Tubli, peaaegu õige vastus, aga';
    }
}

if($numberFromUser > $number) {
    echo 'Pakutud number on liiga suur';
} else {
    echo 'Pakutud number on liiga väike';
}
} else {
    echo 'Tuleb pakkuda number!';
}
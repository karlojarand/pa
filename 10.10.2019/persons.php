<?php
//defineeri muutujad
$age = 5;
echo 'Vanus = '.$age.'<br>';
// 0 - 17 laps
if ($age > 0 and $age < 18) {
    echo 'Oled laps<br>';
}
//18 - 65 täiskasvanu
else if ($age > 17 and $age < 66) {
    echo 'Oled täiskasvanu<br>';
}
// 66 > seenior
else if ($age > 66) {
    echo 'Oled seenior<br>';
} else {
    echo 'midagi on valesti<br>';
}
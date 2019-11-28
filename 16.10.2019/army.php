<?php
$nationality = $_GET['nation'];
$age = $_GET['age'];
$edu = $_GET['edu'];

if(strlen($nation) > 0 and strlen($age) > 0 and strlen ($edu) > 0) {
    if($nation != 'eestlane') {
        echo 'Kodakondsus ei sobi<br>';
    } else{
        if($age < 18){
            echo 'Oled liiga noor!<br>';
        } else {
            if($edu != 'põhi' or $edu != 'kesk' or $edu != 'kutse' or $edu != 'kõrg'){
                echo 'haridustase ei ole sobilik<br>';
            } else {
                echo 'Sobivus';
            }
        }
    }
}



else {
    echo 'Tuleb lisada kõik väärtused';
}
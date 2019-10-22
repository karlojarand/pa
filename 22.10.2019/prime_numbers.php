<?php
function isPrime($number){
    if($muber <2) {
        echo 'This number is not valid';
    } else{
        $divider = 2;
        while($number % $divider !=0) {
            $divider++;
        }
        if ($number == $divider){
            echo $number. 'Is prime number'<br>
            } else{
            echo $number. 'Is not prime number'<br>
        }
    }
}
?>
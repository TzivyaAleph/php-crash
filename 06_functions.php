<?php 
    function registerUser($email){
        echo $email." registered";
    }

    registerUser('Brad');

    $sub = function($n1,$n2){return $n1 -$n2;};
    $mult = fn($n1,$n2)=> $n1 *$n2;
    echo '<br>'. $sub(3,2);
    echo '<br>'. $mult(3,2);
<?php
    $n1 = 100;
    $n2 = 20;
    $result = addNumber($n1,$n2);

    $str = "Computer Science and Enginerring";
    $strlen =  Str_computelen($str);
    echo "Addition of two numbers is ".$result."<br/>";
    echo "The lenght of the String is : ".$strlen."<br/>";

    // function addNumber($n1,$n2) {
    //     echo "Addition of two numbers is : ".$n1+$n2;
    // }

     function addNumber($n1,$n2) {
        return $n1 + $n2;
    }

    function Str_computelen($s){
        return strlen($s);
    }
    ?>

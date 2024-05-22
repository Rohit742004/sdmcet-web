<?php
    echo "<h3>Print instructions in PHP</h3>"."<br/>";
    echo "Hello!! Welcome to the PHP world"."<br/>";
    printf("Message from print function");
    printf("Message from printf function");

    echo"<hr>";
    echo "<h3>Variables in PHP</h3>";
    $num = 200;
    $str = "SDM college";
    $fnum = 30.65;

    echo"First varialble value is: ".$num."<br/>";
    echo"Second varialble value is: ".$str."<br/>";
    echo"Third varialble value is: ".$fnum."<br/>";

    echo "System date";
    echo "<br/>";
    echo date("y-m-d");
    echo "<br/>";
    echo date('h-i-s');

    echo "<br/>";
    echo "Exponential operator:"."<br/>";
    $x = 2;
    $y = 3;
    //$x = $y = $z = 3
    echo "The Exponential operator value is:".$x**$y;


    $s1 = "120";
    $s2 = 120;
    //'===' check's whether value and their datatypes are equal
    //'==' check's only value are equal or not
    if($s1 == $s2)    
        echo "Value are equal";
    else
        echo "Values are not equal";


    echo "Addition operations in PHP using variables"."<br/>";
    $n1 = 120;
    $n2 = 130;
    $n3 = 110;

    $result = $n1 + $n2 + $n3;
    echo "Addition of three variables is : ".$result;
    echo "<br/>";
    echo "Subtraction result : ".$n2 -$n1;
     echo "<br/>";
    echo "Multiplication result : ".$n2 * $n1;
?>

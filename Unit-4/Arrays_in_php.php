<?php
echo "Numerical array ";
echo"<br/>";
    $arr_numbers = [111,222,333];
    echo "Array element are : ";
    for($i = 0; $i < count($arr_numbers); $i++){
        echo $arr_numbers[$i]."<br/>";
    }  

    echo "Using foreach looping statement";
    foreach ($arr_numbers as $arrElement){
        echo $arrElement."<br/>";
    }

    print_r($arr_numbers);

    echo "<hr><br/>";
    echo "Assciative arrays in php : <br/>";
    $assoc_arr = ["CollegeName"=>"SDMCET","CollgeCode"=>"2SD","Address"=>"Dharwad"];
    print_r($assoc_arr);
    echo "<br/>";
    foreach ($assoc_arr as $x => $y) {
        echo "Key-".$x."value-".$y;
    }               
    echo "<br/>";
     echo "Multidimensional array in php <br/>";
     $Multi_dimarray = array(array(11,22,33),array('s','d','m'),array('A','B','C'));
   
    print_r( $Multi_dimarray);
    echo "<br/>";
    for ($row=0; $row <count( $Multi_dimarray) ; $row++) 
        for ($col=0; $col <count( $Multi_dimarray) ; $col++) 
        echo  $Multi_dimarray[$row][$col]."<br/>";
    echo "Built-in function in Arrays <br/>";
    print_r(array_keys($Multi_dimarray));

    echo "<br/> Reversing the arrt element:<br/>";
    print_r($arr_numbers);
  
?>

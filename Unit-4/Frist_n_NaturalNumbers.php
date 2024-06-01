<?php
    //collect the form data
    $N = $_POST['txtnumber'];
    $result = null;
    for($i = 0 ; $i <= $N ; $i++) 
        $result += $i;

    echo "Sum of first $N value is $result";
?>

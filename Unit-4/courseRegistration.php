<?php
    //collection of web page data
    $stName = $_POST["txtname"];
     $stusn = $_POST["ddl_usn"];
      $stDiv = $_POST["rddivision"];
       $stCourse = $_POST["chkcourse"];
        $regDate =  $_POST["dtregistration"];

    if(isset($_POST["btnsubmit"])){
        echo "<table><tr><th>Name</th><th>usn</th><th>Divisin</th><th>Course</th>
        <tr><td>$stName</td><td>$stusn</td><td>$stDiv</td><td>$stCourse</td><td>$regDate</td>"
    }
    else{
        echo "Please enter missing values!!";
    }
?>

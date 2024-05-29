<?php
    //Collection of web page data
    $stCourse = null;
    $stName = $_POST["txtname"];
    $stUSN = $_POST["ddl_usn"];
    $stDiv = $_POST["rddivision"];
    if(isset($_POST["chkcourses"]))
        $stCourse = $_POST["chkcourses"];
    
    $regDate = $_POST["dtregistration"];

    foreach ($stCourse as $course) {
        $courseVal .= $course ."</br>";
    }

    if(isset($_POST["btnsubmit"])) {
        echo "<table border=\"1\"><tr><th>Name</th><th>USN</th><th>Division</th><th>Courses</th><th>Date</th></tr>
        <tr><td>$stName</td><td>$stUSN</td><td>$stDiv</td><td>$courseVal</td><td>$regDate</td></tr></table>";
    }
    else {
        echo "Please enter missing values!!!!";
    }
?>

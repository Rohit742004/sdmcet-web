//checking whether given roll nmber is available in array or not ,array act as database.
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web page to check data</title>
</head>
<body>
    <form method="post" action="verifyRollNo.php">
        <center>
            <h3>Verify Student Roll Number</h3>
            <label>Enter the Student roll number</label>
            <input type="text" name="txtrollnum">
            <input type="submit" value="verify" name="btnsubmit">
        </center>
    </form>
</body>
</html>

<?php
if(isset($_POST['btnsubmit'])){
    //collect the form data
    $rollno = $_POST['txtrollnum'];
    $studentRollno = [111,222,333,444];  //acts like database
    $flag=0;
    for($i=0;$i<count($studentRollno);$i++){  //searching for value taken as input
        if($studentRollno[$i] == $rollno){
            $flag=1;
        }
    }
    if($flag){
        echo "Roll Number exits";
    }else{
        echo "Roll Number does not exist";
    }

}
?>

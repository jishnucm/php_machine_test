<?php

$msg="";
require('dbconnection.php');
$id=$_GET['id'];
echo $id;
$exe_querry=mysqli_query($connection,"DELETE FROM student WHERE student_id='$id'");
if($exe_querry){
    $msg="delete successfully";
    header('location:student_display.php');
}
else{
    $msg="error";
}

?>
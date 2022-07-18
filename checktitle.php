<?php 
require('dbconnection.php');
if(isset($_POST['exam_title'])){
    $title=$_POST['exam_title'];
    $check_title=mysqli_query($connection,"SELECT * from exam where exam_name='$title'");
    if(mysqli_num_rows($check_title)>0){
        echo "<span style='color:red'>title is not available</span>";
    }
    else{
        echo "<span style='color:green'>title is available</span>";
    }
}



?>
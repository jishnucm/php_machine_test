<?php

require('dbconnection.php');
$E_id=$_GET['exam_id'];
session_start();
$userid=$_SESSION['userid'];


$show_score=mysqli_query($connection,"SELECT * from score_board where exam_id='$E_id' and user_id='$userid'");
$exam_name_querry=mysqli_query($connection,"SELECT * FROM exam where exam_id='$E_id'");
$row1=mysqli_fetch_array($exam_name_querry);
$exam_name=$row1[1];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>


<style>
    .signin{
    
        margin-top: 4%;
        border: 3px solid black;
        background-color: #cce6ff;
    }
    .div1{
        background-color: #ffffb3;  
    }
</style>
</head>
<body>
<div class="container-info">
    <div class="row">
        <div class="col-md-2"></div>
    <div class="col-md-8 div1" >
       <h2 class="text-center">View result</h2><br><br>
       <h4 class="text-center">Test result</h4>
       <div class="row">
        
        <?php
        if(mysqli_num_rows($show_score)>0) {
            while($row=mysqli_fetch_array($show_score)){
        
        ?>
        <div class="col-md-1"></div>
        <div class="col-md-10 signin">
            <h2 class=" text-left"><?php echo $exam_name;?></h2>
            <div class="d-flex justify-content-between">
             <h5>total mark:<?php echo $row[2];?></h5>
             <h5>mark obtained:<?php echo $row[1];?></h5>
             <h5>mark in percentage:<?php echo $row[3];?></h5>
            </div>
        </div>

<?php
            }}

?>
<div class="col-md-1"></div>
<div class="col-md-8"></div>
<div class="col-md-4">
    <a href="customer_home.php" class="btn btn-warning">HOME</a>
</div>


       </div>
    

          
                  

                
                 
                  
             
              
                
    </div>
    </div>
    </body>
</html>


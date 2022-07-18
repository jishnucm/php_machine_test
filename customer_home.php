<?php 
require('dbconnection.php');

$exe_querry=mysqli_query($connection,"SELECT * FROM exam");

if(isset($_REQUEST['log_out'])){
    session_start();
    unset($_SESSION['userid']);
    header('location:student_login.php');

}



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
</style>
</head>
<body>
<div class="container-info">
    <div class="row">
        <div class="col-md-8"></div>
        <div class="div col-md-4">
            <form action="" method="post">
         <button type="submit" name="log_out">LOG OUT</button>
            </form>
        </div>
        <div class="col-md-2"></div>

    <div class="col-md-8 signin" >
        
        <h2 class="text-center">ATTENED EXAM</h2>
        <div class="row">
        <?php   
            if(mysqli_num_rows($exe_querry)>0) {
            while($row=mysqli_fetch_array($exe_querry)){
        
        ?>
        <!-- <div class="col-md-1"></div> -->
    
        <div class="col-md-4">
        <div class="card mt-4" style="width: 18rem;background-color: rgb(240, 255, 230);">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row[1];?></h5>
    <h6 class="card-subtitle mb-2 text-muted"></h6>
    <a href="attend_exam.php?exam_id=<?php echo $row[0];?>" class="card-link">attend exam</a>
   
  </div>
</div>



        </div>
        <?php
            }
        }
        ?>
 
        </div>
    
    </div>
    

          
                  

                
                 
                  
             
              
                
    </div>
    </div>
    </body>
</html>

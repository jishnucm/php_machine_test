<?php 
require('dbconnection.php');
$msg='';
if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $exe_querry=mysqli_query($connection,"SELECT * FROM student WHERE st_username='$username' and st_password='$password'");
    if(mysqli_num_rows($exe_querry)>0){
        $userdata=mysqli_fetch_array($exe_querry);
        header('location:customer_home.php');
        session_start();
        $_SESSION['userid']=$userdata[0];
        

    }
    else{
   $msg ="error";
    }
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
<!-- <script src="login.js"></script> -->

<style>
    .login{
    
        margin-top: 4%;
        border: 3px solid black;
        background-color: #ffffb3;
    }
</style>
</head>
<body>
<div class="container-info">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6  login">
            <h2 class="text-center text-capitalize">Log in</h2>
            <form action="" method="post">
           
                <div class="form-row mt-4 ">
                  
              <h2></h2>
                <div class="form-group col-md-12 ">
                    <div class="row">
                    <div class="col-md-2">
                  <label for="inputEmail4">username*:</label>
                    </div>
                    <div class="col-md-8">
                        <span id="user_span1"></span>
                  <input type="text" class="form-control" id="username" name="username">
                    </div>
                    </div>
                </div>
                
                <div class="form-group col-md-12 ">
                    <div class="row">
                    <div class="col-md-2">
                  <label for="inputEmail4">password*:</label>
                    </div>
                    <div class="col-md-8">
                        <span id="login_pass"></span>
                  <input type="password" class="form-control" id="user_password" name="password">
                    </div>
                    </div>
                </div>
              

                
                 
                  
             
              
                
               <div class="col-md-5"></div>
             <div class="col-md-4 mt-2 p-4">
            <button type="submit" name="login" class="btn btn-primary btn-lg" >Submit</button>
               
             </div>
              </form>
              <?php  echo $msg; ?>
        </div>
    </div>
    </div>
    </body>
</html>
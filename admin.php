<?php
require('dbconnection.php');
if(isset($_POST['btn_submit'])){
    $student_name=$_POST['name'];
    $student_username=$_POST['username'];
    $student_password=$_POST['password'];
   
    $query="INSERT INTO Student(st_name,st_username,st_password) values('$student_name', '$student_username','$student_password')";
    $exec_query=mysqli_query($connection,$query);
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
<script src="signin.js"></script>

<style>
    .signin{
    
     
        
        background-color:  #cce6ff;
    }
    .div1{
        background-color: #ffffb3;
        margin-top: 4px;
    }
</style>
</head>
<body>
<div class="container-info">
    <div class="row m-5">
        <div class="col-md-1"></div>
        <div class="col-md-2  div1">
            <br><br><br><br>
          <a href="admin.php">add student</a><br><br>
          <a href="createexam.php">Create exam</a>

        </div>
        <div class="col-md-6  signin">
            <h2 class="text-center text-capitalize">ADD STUDENT(ADMIN) </h2>
            <form action="" method="post">
          
           

                <div class="form-row mt-4 ">
                  <div class="form-group col-md-12 ">
                      <div class="row">
                      <div class="col-md-3">
                    <label for="">name*:</label>
                      </div>

                      <div class="col-md-8">
                        <span id="fname_span"></span>
                    <input type="text" class="form-control d-flex content-justify-center" id="fname" name="name">
                      </div>
                      </div>
                  </div>
                   <div class="form-group col-md-12 ">
                    <div class="row">
                    <div class="col-md-3">
                  <label for="">username</label>
                    </div>
                    <div class="col-md-8">
                        <span id="lname_span"></span>
                  <input type="text" class="form-control" id="lname"name='username'>
                    </div>
                    </div>
                </div> 
              
             
                <div class="form-group col-md-12 ">
                    <div class="row">
                    <div class="col-md-3">
                  <label for="">password*:</label>
                    </div>
                    <div class="col-md-8">
                        <span id="passwordsp1"></span>
                  <input type="password" class="form-control" id="password1" name="password">
                    </div>
                    </div>
                </div>
                <div class="form-group col-md-12 ">
                    <div class="row">
                    <div class="col-md-3">
                  <label for="">conform password*:</label>
                    </div>
                    <div class="col-md-8">
                        <span id="passwordsp2"></span>
                  <input type="password" class="form-control" id="password2" name="confirm_password">
                    </div>
                    </div>
                </div>

                
                 
                  
             
              
                
               <div class="col-md-5"></div>
             <div class="col-md-4 mt-2 p-4">
            <button type="submit" class="btn btn-primary btn-lg" name="btn_submit" onclick="return validate()">Submit</button>
             </div>
              </form>
        </div>
    </div>
    </div>
    </body>
</html>
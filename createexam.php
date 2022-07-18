<?php
require('dbconnection.php');
if(isset($_POST['mybtn'])){
    $title=$_POST['title'];
    $exe_querry=mysqli_query($connection,"INSERT INTO exam(exam_name)values('$title')");
    if($exe_querry){
        header('location:addquestions.php');
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<style>
    .login{
    
  

        background-color:  #cce6ff;
    }
    .div1{
        background-color: #ffffb3;
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
        <div class="col-md-6  login">
            <h2 class="text-center text-capitalize">create exam</h2>
            <form action="" method="post">
           
     
                <div class="form-row mt-4 ">
                  
              <h2></h2>
                <div class="form-group col-md-12 ">
                    <div class="row">
                    <div class="col-md-2">
                  <label for="inputEmail4">title:</label>
                    </div>
                    <div class="col-md-8">
                        <span id="title_span"></span>
                  <input type="text" class="form-control"  id="title" name="title" required>
                    </div>
                    </div>
                </div>
                
            
              

                
                 
                  
             
              
                
               <div class="col-md-5"></div>
             <div class="col-md-4 mt-2 p-4">
            <button type="submit" name="mybtn" class="btn btn-primary btn-lg" id="mybtn"> submit </button>
               
             </div>
              </form>
        </div>
    </div>
    </div>
    <script>
        $(document).ready(function(){
            console.log("hai");
            $('#title').keyup(function(){
                console.log("hai");
                var title=$('#title').val();
                console.log(title);
                $.ajax({
                    type:"POST",
                    url:"checktitle.php",
                    data:{
                        exam_title:title
                    },
                    success: function(response){
                        console.log(response);
                        $('#title_span').html(response);
                        document.getElementById('mybtn').disabled=true;
                    }
                })
            })
        })
    </script>
    </body>
</html>
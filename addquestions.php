<?php  
require('dbconnection.php');
$exe_querry1=mysqli_query($connection,"SELECT * FROM exam");
if(isset($_POST['add_answer'])){
  $question=$_POST['question'];
  $option1=$_POST['option1'];
  $option2=$_POST['option2'];
  $option3=$_POST['option3'];
  $option4=$_POST['option4'];
  $correct_option=$_POST['ct_option'];
  $exam_id=$_POST['choose_exam'];
  // echo $exam_id;
  $exe_querry=mysqli_query($connection,"INSERT INTO questions(question,option1,option2,option3,option4,correct_option,exam_id)values('$question','$option1','$option2','$option3','$option4','$correct_option','$exam_id')");
  // if($exe_querry){

  // }

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
        background-color:  #cce6ff;
    }
</style>
</head>
<body>
<div class="container-info">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6  signin">
            <h2 class="text-center text-capitalize">ADD QUESTIONS </h2>
            <form action="" method="post">
      

                <div class="form-row mt-4 ">
                  <div class="form-group col-md-12 ">
                      <div class="row">
                      <div class="col-md-3">
                    <label for="">choose your exam:</label>
                      </div>

                      <div class="col-md-8">
        
                        <select name="choose_exam" id="">
     
                          <option value="">select your exam</option>
                          <?php   
            if(mysqli_num_rows($exe_querry1)>0) {
            while($row=mysqli_fetch_array($exe_querry1)){
        
        ?>
                          <option value="<?php echo $row[0]?>"><?php echo $row[1]?></option>
                          <?php
            }}
                  ?>
                        </select>
                      </div>
                      </div>
                  </div>

            
                   <div class="form-group col-md-12 ">
                    <div class="row">
                    <div class="col-md-3">
                  <label for="">QUESTION:</label>
                    </div>
                    <div class="col-md-8">
                     
                        <textarea name="question" id="" cols="55" rows="5" required></textarea>
                    </div>
                    </div>
                </div> 
                <div class="form-group col-md-12 ">
                    <div class="row">
                    <div class="col-md-3">
                  <label for="">option1*:</label>
                    </div>
                    <div class="col-md-8">
                   
                  <input type="text" class="form-control" id="email" name="option1" required>
                    </div>
                    </div>
                </div>
                <div class="form-group col-md-12 ">
                    <div class="row">
                    <div class="col-md-3">
                  <label for="">option2:</label>
                    </div>
                    <div class="col-md-8">
                        <span id="ph_span"></span>
                  <input type="text" class="form-control" id="phone" name="option2" required>
                    </div>
                    </div>
                </div>
                <div class="form-group col-md-12 ">
                    <div class="row">
                    <div class="col-md-3">
                  <label for="">option3:</label>
                    </div>
                    <div class="col-md-8">
                        <span id="passwordsp1"></span>
                  <input type="text" class="form-control" id="password1" name="option3" required>
                    </div>
                    </div>
                </div>
                <div class="form-group col-md-12 ">
                    <div class="row">
                    <div class="col-md-3">
                  <label for="">option 4:</label>
                    </div>
                    <div class="col-md-8">
                        <span id="passwordsp2"></span>
                  <input type="text" class="form-control" id="password2" name="option4" required>
                    </div>
                    </div>
                </div>
                <div class="form-group col-md-12 ">
                    <div class="row">
                    <div class="col-md-3">
                  <label for="">correct option:</label>
                    </div>
                    <div class="col-md-8">
                        <span id="passwordsp2"></span>
                  <input type="text" class="form-control" id="password2" name="ct_option" required>
                    </div>
                    </div>
                </div>

                
                 
                  
             
              
                
               <div class="col-md-5"></div>
             <div class="col-md-4 mt-2 p-4">
            <button type="submit" class="btn btn-primary btn-lg" name="add_answer">Submit</button>
             </div>
              </form>
        </div>
    </div>
    </div>
    </body>
</html>

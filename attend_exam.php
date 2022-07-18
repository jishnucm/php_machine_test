<?php
require('dbconnection.php');
$mark='';
$total_mark='';
$score_per='';
$E_id=$_GET['exam_id'];
session_start();
$userid=$_SESSION['userid'];
echo $userid;
$exe_querry=mysqli_query($connection,"SELECT * FROM questions WHERE exam_id='$E_id'");
if(!empty($_POST['check'])){
    foreach($_POST['check'] as $check ){
        
        $option=$check;
      
      
        $question=$_POST['question'];
     
        $exe_querry1=mysqli_query($connection,"SELECT * FROM questions WHERE correct_option='$option' and question_id='$question' and exam_id='$E_id'");
       
    if(mysqli_num_rows($exe_querry1)>0){
        $add_mark=mysqli_query($connection,"INSERT INTO mark(mark,exam_id,user_id)values(1,'$E_id','$userid')");
        echo "true";
    }
    else{
        $add_mark=mysqli_query($connection,"INSERT INTO mark(mark,exam_id,user_id)values(0,'$E_id','$userid')");
        echo "false";
    }
    }

}

if(isset($_POST['submit_mark'])){
    $mark_count=mysqli_query($connection,"SELECT count(mark) from mark where mark=1 and exam_id='$E_id' and user_id='$userid'");
    $row=mysqli_fetch_array($mark_count);
   $mark= $row[0];

   $total_count=mysqli_query($connection," SELECT count(mark) from mark where user_id='$userid' and exam_id='$E_id'");
   print_r($total_count);
   $row1=mysqli_fetch_array($total_count);
   $total_mark= $row1[0];
   echo $total_mark;
   $score_per=($mark/$total_mark)*100;
   echo $score_per;

   $exe_querry3=mysqli_query($connection,"INSERT INTO score_board(mark,total_mark,mark_in_per,exam_id,user_id)values('$mark','$total_mark','$score_per','$E_id','$userid')");


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
<script src="https://kit.fontawesome.com/0c7adfd7bb.js" crossorigin="anonymous"></script>


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
        <div class="col-md-2"></div>
    <div class="col-md-8 signin" >
        
        <h2 class="text-center">ATTENED EXAM</h2>
        <h4 class="text-center"></h4>
        <div class="row">
    
        
   
        <div class="col-md-1"></div>
        <div class="col-md-8">
        <div class="card mt-4" style="width: 49rem;background-color: rgb(240, 255, 230);">
  <div class="card-body">
    
    <h6 class="card-subtitle mb-2 text-muted"></h6>
    <?php   
            if(mysqli_num_rows($exe_querry)>0) {
            while($row=mysqli_fetch_array($exe_querry)){
        
        ?>
    <form method="POST">

        <p class="card-text"><i class="fa-solid fa-question"></i><?php echo $row[0];echo $row[1];  ?></p>
    options<br><br>
                <input type="checkbox" value="<?php echo $row[2]; ?>" name="check[]"><label for=""><?php echo $row[2]; ?></label> 
                <input type="checkbox" value="><?php echo $row[3]; ?>" name="check[]"><label for=""><?php echo $row[3]; ?></label>
                <input type="checkbox" value="<?php echo $row[4]; ?>" name="check[]"><label for=""><?php echo $row[4]; ?></label>
                <input type="checkbox" value="<?php echo $row[5]; ?>" name="check[]"><label for=""><?php echo $row[5]; ?></label>
                <input type="hidden" value="<?php echo $row[0];?>" name="question">
                 <br><br>
                 <br><br>

    

              <button type="submit">submit</button>

                </form>
                <?php
            }
        }
        
        
        ?>
   
  </div>
</div>



        </div>
        <div class="col-md-3"></div>
        
            <div class="col-md-1"></div>
         <div class="col-md-4">
            <br><br> 
         <form action="" method="post">

<button type="submit" name="submit_mark" class="btn-danger">submit all mark </button>




 </form>
         </div>
         <div class="co-md-4"></div>
         <div class="col-md-3">
            <br><br>
        <a href="view_score.php?exam_id=<?php echo $E_id;?>" class="btn btn-warning justify-content-center">view score</a>
         </div>
        
        </div>
    
    </div>
    <div class="col-md-2"></div>

                  

                
                 
                  
             
              
                
    </div>
    </div>
    </body>
</html>



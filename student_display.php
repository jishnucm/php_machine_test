<?php
require('dbconnection.php');

$exe_querry1=mysqli_query($connection,"SELECT * FROM student");
// var_dump($exe_querry1->fetch_all())







?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1px solid black">
        <tr>
           
            <th>name</th>
            <th>username</th>
            <th>password</th>
            
     




        </tr>
        <?php
        if(mysqli_num_rows($exe_querry1)>0) {
            while($row=mysqli_fetch_assoc($exe_querry1)){
        
        ?>
         <tr>
           
                <td><?php echo $row['st_name']; ?></td>
                <td><?php echo $row['st_username']; ?></td>
               <td><?php echo $row['st_password']; ?></td>
               <td><a href="student_delete.php ? id=<?php echo $row['student_id'];?> " >delete</a></td>
                
   
            </tr>
        
        <?php 
            }
        }
        
        ?>
        

    </table>
  
    
</body>
</html>
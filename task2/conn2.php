<?php
 
      if($_SERVER['REQUEST_METHOD']=="POST"){
            
      include 'nav/dbconn.php';
  
      $username = $_POST['emp_name'];
       $num = $_POST['emp_num'];
       $email = $_POST['emp_email'];
       $pass = $_POST['emp_pass'];
      $cpass = $_POST['emp_cpass'];   

      $sql =" INSERT INTO test2( username, mobileno, email, password, conpassword)
                       VALUES ('$username','$num','$email','$pass','$cpass')";
      $result = mysqli_query($conn,$sql);
}
?>
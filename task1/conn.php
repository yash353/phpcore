
<?php
   //for signup
   
         if (isset($_POST['reg']))
      {
            $usernam = $_POST['usnm'];
             $phno = $_POST['pn'];
             $email = $_POST['email'];
             $pass = $_POST['pss'];
            $cpass = $_POST['cpss'];   

            $servername = "localhost";
            $username = "root";
            $password = "";
            $database ="yash";

            $conn =mysqli_connect($servername, $username, $password, $database );

            if(!$conn) {
                  die ("sorry we failed to connect :".mysqli_connect_error());
            }

         
               $existuser = "SELECT * FROM test1 where usernam ='$usernam'";
               $res = mysqli_query($conn,$existuser);
               
            $res = $res->num_rows;
                  if($res>0){

                     echo "username already exit<br>";
                     echo " please change your username";
                  }
               else{
                  if(($cpass == $pass)){
                     $hash = password_hash($password,PASSWORD_DEFAULT);
                     
                     
            $sql = "INSERT INTO  test1 ( usernam, mobileno, email, password) 
            values ( '$usernam', ' $phno ', '$email', '$hash')";
            $result = mysqli_query ($conn , $sql);  
           
              
         if($result){

            echo '<div class="alert alert-success d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <div>
               success submit
            </div>';
         }
            else{

               echo '<div class="alert alert-warning d-flex align-items-center" role="alert">
               <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
               <div>
                 not submitted
               </div>';
            }
        }
      else { echo '<div class="alert alert-success d-flex align-items-center">
         <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
         <use xlink:href="#check-circle-fill"/></svg>
          <div>
         password not match
         </div>';
      }
      }
      
   }
   ?>
<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database ="yash";

  $conn =mysqli_connect($servername, $username, $password, $database );

      if(isset($_POST['edit'])){
          // echo $usernam =$_GET['usernam'];

           $usernam = $_POST['usnm'];
            $mobileno = $_POST['pn'];
            $email = $_POST['email'];
           
        
            $sql= "UPDATE test1 SET 
                    usernam= '$usernam',
                    mobileno= '$mobileno',
                    email= '$email'
                      WHERE usernam = '$usernam'";

        //echo $sql;
        if($conn->query($sql)){

            echo "modified the data";
        }
        else{
            echo "something went wrong";
        }
    }
        else{
            echo "invalid";
        
   }
?>
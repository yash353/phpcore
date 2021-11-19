<?php
  include 'nav/dbconn.php';
  if($conn){
if($_SERVER['REQUEST_METHOD']=="POST"){
            
  

    $username = $_POST['name'];
     $pass = $_POST['pass'];

        $sql = "SELECT * from test2 where username= '$username' AND password ='$pass'";
        $result= mysqli_query($conn,$sql);
        echo $sql;
        // $row = mysqli_fetch__assoc();
        // $count = mysqli_num_rows($result);
    
        if($result){

            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            // echo $_SESSION['username'];
            header('location:welcome.php');
        }
        else{
            echo 'invalid credentials';
        }

    }
}
else{
    die();
}
?>

<!DOCTYPE html>

<html>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<title>login Form</title>
    <style type="text/css" >
      .errorMsg{border:1px solid red; }
      .message{color: red; font-weight:bold; }
    </style>
</head>

     <body >
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" 
     integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
 
   
     
         <?php require 'nav/nav.php' ?>
       

        <div class= "container my-4" >
            <h1 class="text-center"><u> LOGIN TO YOUR ACCOUNT </u> </h1> 
        <form name= "login" id= "login" method= "post" action= "login.php">
       
     <table width= "400"height="200" border="0" align="center" cellpadding= "" cellspacing= "0">
        <tr>

        <td> Name:</td>
        <td><input name= "name" type= "text" id="name"  ></td>
        </tr>

        <tr>
        <td>  password : </td>
        <td><input name= "pass" type= "password" id= "pass" ></td>
        </tr>

        <tr>
        <td></td>
        <td><input type= "submit" name= "Submit" ></td>
        </tr>

      </table>
   </form>
  </div>  
 </body>

</html>



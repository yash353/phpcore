
<?php
 
      if(isset($_POST['Submit'])){

      $emp_name=trim($_POST["emp_name"]);
      $emp_num=trim($_POST["emp_num"]);
      $emp_email=trim($_POST["emp_email"]);
      $emp_pass=trim($_POST["emp_pass"]);
      $emp_cpass=trim($_POST["emp_cpass"]);

    if($emp_name =="") {
        $errorMsg=  "error : You did not enter a name.";
        $code= "1" ;
       }
        elseif($emp_num == "") {
            $errorMsg=  "error : Please enter number.";
            $code= "2";
        }
        //check if the number field is numeric
        elseif(is_numeric(trim($emp_num)) == false){
            $errorMsg=  "error : Please enter numeric value.";
            $code= "2";
        }
        elseif(strlen($emp_num)<10){
            $errorMsg=  "error : Number should be ten digits.";
            $code= "2";
        }
        //check if email field is empty
        elseif($emp_email == ""){
            $errorMsg=  "error : You did not enter a email.";
            $code= "3";
        } //check for valid email 
        elseif(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $emp_email)){
        $errorMsg= 'error : You did not enter a valid email.';
        $code= "3";
        }

        if($emp_pass == ""){
            $errorMsg="error : Please enter password";
            $code= "4";
            }
        
            if($emp_cpass == ""){
            $errorMsg= "error: Please enter confirm password";
            $code= "5";
         }
        
            elseif($emp_pass!= $emp_cpass) {
            $errorMsg = "error : Password and confirm password does not match";
            $code= "5";
        }
    } 
?>

   <!DOCTYPE html>

    <html>

    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>signup Form</title>
        <style type="text/css" >
          .errorMsg{border:1px solid red; }
          .message{color: red; font-weight:bold; }
        </style>
    </head>

         <body >
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" 
         integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
     
       
         
             <?php require 'nav/nav.php' ?>
            <?php if (isset($errorMsg)) { echo "<p class='message'>" .$errorMsg. "</p>" ;} ?>

            <div class= "container my-4" >
                <h1 class="text-center"><u> SIGNUP TO CREATE ACCOUNT </u> </h1> 
            <form name= "signup" id= "reg" method= "post" action= "conn2.php">
           
         <table width= "400"height="350" border="0" align="center" cellpadding= "" cellspacing= "0">
            <tr>

            <td> Name:</td>
            <td><input name= "emp_name" type= "text" id="emp_name" value="<?php if(isset($name)){echo $name;} ?>"
            <?php if(isset($code) && $code == 1){echo "class=errorMsg" ;} ?> ></td>
            </tr>

            <tr>
            <td>Contact No.: </td>
            <td><input name= "emp_num" type= "int" id= "emp_num" value="<?php if(isset($num)){echo $num;} ?>"
            <?php if(isset($code) && $code == 2){echo "class=errorMsg" ;}?> ></td>
            </tr>

            <tr>
            <td>  Email: </td>
            <td><input name= "emp_email" type= "text" id= "emp_email" value="<?php if(isset($email)){echo $email; }?>"
            <?php if(isset($code) && $code == 3){echo "class=errorMsg" ;}?> ></td>
            </tr>

            <tr>
            <td>  password : </td>
            <td><input name= "emp_pass" type= "password" id= "emp_pass" value="<?php if(isset($pass)){echo $pass; }?>"
            <?php if(isset($code) && $code == 4){echo "class=errorMsg" ;}?> ></td>
            </tr>

            <tr>
            <td>  conform password : </td>
            <td><input name= "emp_cpass" type= "password" id= "emp_cpass" value="<?php if(isset($cpass)){echo $cpass; }?>"
            <?php if(isset($code) && $code == 5){echo "class=errorMsg" ;}?> ></td>
            </tr>

            <tr>
            <td></td>
            <td><input type= "submit" name= "Submit" value= "Submit"></td>
            </tr>

          </table>
      </form>
    </div>  
  </body>

 </html>
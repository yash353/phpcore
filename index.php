<?php
if(isset($_POST['submit'])){
    header('location:welcome.php');
}

?>

<!doctype html>
<html>
  <head>
      <title>login form</title>
      <style>
  body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: #3333ff;
    background-size: cover;
    background-repeat: no-repeat ;
}
.box{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 400px;
    padding: 40px;
    background: rgba(0,0,0,.8);
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(0,0,0,.5);
    border-radius: 10px;
}
.box h2{
    margin: 0 0 30px;
    padding: 0;
    color: #fff;
    text-align: center;
}
.box .inputBox{
    position: relative;
}
.box .inputBox input{
    width: 100%;
    padding: 10px 0;
    font-size: 16px;
    color: #fff;
    letter-spacing: 1px;
    margin-bottom: 30px;
    border: none;
    border-bottom: 1px solid #fff;
    outline: none;
    background: transparent;
    cursor: pointer;
}
.box .inputBox label{
    position: absolute;
    top: 0;
    left: 0;
    letter-spacing: 1px;
    padding: 10px 0;
    font-size: 16px;
    color: #fff;
    pointer-events: none;
    transition: .5s;
}
.box .inputBox input:focus ~ label,
.box .inputBox input:valid ~ label{
    top: -18px;
    left: 0;
    color: #03a9f4;
    font-size: 12px;
}
.box input[type="submit"]{
    position: relative;
    display: inline-block;
    border: none;
    text-align: center;
    margin: 15px 107px;
    padding: 12px 20px;
    cursor: pointer;
    color: #03a9f4;
    text-transform: uppercase;
    letter-spacing: 1px;
    text-decoration: none;
    font-size: 18px;
    overflow: hidden;
    -webkit-transition: 0.2s;
    transition: 0.2s;
    border-radius: 10px;
}
.box input[type="submit"]:hover{
    color: #255784;
  background: #fff;
  -webkit-box-shadow: 0 0 10px #2196f3, 0 0 40px #2196f3, 0 0 80px #2196f3;
          box-shadow: 0 0 10px #2196f3, 0 0 40px #2196f3, 0 0 80px #2196f3;
}
    </style>
    </head>
        
        <div class="box">
        
        <h2>login form</h2>
        <form  method="post">
        <div class="inputBox">
          <!-- You can delete the 'text' section here and get only 'e-mail'. -->
            <input type="email" name="email" required>
            <label for="">E-mail</label>
        </div>
        <div class="inputBox">
            <input type="password" name="password" required>
            <label for="">Password</label>
        </div>
        <input id="submit" type="submit" name="submit" value="Sign in">
    </form>
    </div>

    </body>
   </html>

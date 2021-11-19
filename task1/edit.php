<?php

$servername = "localhost";
$username = "root";
$password = "";
$database ="yash";


$conn =mysqli_connect($servername, $username, $password, $database );

if(!isset($_GET['usernam']))
{
    die( 'data not found');
}
$usernam =$_GET['usernam'];
$sql = "SELECT * FROM test1 where usernam = '$usernam'";
$res = $conn->query($sql);
echo $sql;
  $data =mysqli_fetch_assoc($res);
//  print_r($data);
?>  

<!DOCTYPE html>
<html>
<head>
    <title>
    </title>
</head>
<body>
    
  
<form method="post"action ="modify.php">
            <input type="text"name="usnm"value = "<?= $data['usernam'] ?>">
            <br><br>
            <input type="tel"maxlength="10"name="pn"value = "<?= $data['mobileno'] ?>">
            <br><br>
            <input type="email"name="email"value = "<?= $data['email'] ?>">
            <br><br>
           
            <button type="submit" name="edit">update</button>
         </form>
        </div>

        </body>
</html>
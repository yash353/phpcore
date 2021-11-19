<?php

$servername = "localhost";
$username = "root";
$password = "";
$database ="yash";


$conn =mysqli_connect($servername, $username, $password, $database );

   
if(isset($_GET['usernam'])){
    $usernam = $_GET['usernam'];

    $sql = "DELETE FROM test1 WHERE usernam ='$usernam'";

    if($conn->query($sql) === TRUE){

        echo "delete the data";
    }
    else{
        echo "something went wrong";
    }
}
else{
    echo "id not provide";
}
?>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database ="yash";


$conn = mysqli_connect($servername, $username, $password, $database );

   
$usernam = $_POST['usnm'];
$pass = $_POST['pss'];

$query="SELECT * from test1 where usernam = '$usernam'";

$res = mysqli_query($conn,$query);
$row = $res->num_rows();

	if($row > 0){
	  $num = mysqli_fetch_assoc($res);
	  
	
		if(!password_verify($pass , $num['password'])){
		
	     echo '<h1> User not Exist</h1>';	
		 exit;
		}

	else{	
	echo '<h1> login success  </h1>';
	    }
     
  }
?>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database ="yash";

$conn =mysqli_connect($servername, $username, $password, $database );

   
$sql = "SELECT * FROM test1";
$result = mysqli_query($conn, $sql);

$num = $result->num_rows;
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"rel="stylesheet" 
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

<table class="table table-dark table-striped">
	<tr>
        <th>S no </th>
		<th>Name</th>
		<th>Phone</th>
        <th>Email</th>
        <th colspan = "2">operation</th>
	</tr>
    </body>
</html>
<?php
if($num>0)
    {

  
    while($row = mysqli_fetch_assoc($result))
    { ?>  
        <tr>
		<td><?php echo $row['sno']; ?></td>
		<td><?php echo $row['usernam']; ?></td>
		<td><?php echo $row['mobileno']; ?></td>
        <td><?php echo $row['email']; ?></td>
        
        <td><a class ='btn btn-secondary' href ='edit.php?usernam=<?php echo $row['usernam']; ?>'>edit</a>
            <a class ='btn btn-danger'  href ='delete.php?usernam=<?php echo $row['usernam']; ?>'>delete</a></td>
	</tr>
        <?php  } ?>
    </table>
    <?php  } ?>


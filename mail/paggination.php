<html>  
<head> 
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"rel="stylesheet" 
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>

<title> Pagination </title>  
</head>  
<body>  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>


<?php  
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database ="user";

  $conn =mysqli_connect($servername, $username, $password, $database );

    
    if (! $conn) {  
die("Connection failed" . mysqli_connect_error());  
    }  
   
  
    
    $res_per_pg = 10;  
  
    
    $query = "select *from test4";  
    $res = mysqli_query($conn, $query);  
    $number_of_res = mysqli_num_rows($res);  
  
   
    $number_of_page = ceil ($number_of_res / $res_per_pg);  
  
    
    if (!isset ($_GET['page'])) {  
        $page = 1;  
    } else {  
        $page = $_GET['page'];  
    }  
  
    
    $page_first_res = ($page-1) * $res_per_pg;  
  
      
    $query = "SELECT *FROM test4 LIMIT " . $page_first_res . ',' . $res_per_pg;  
    $res = mysqli_query($conn, $query);  
    ?>
      
    <table class="table table-dark table-striped">
	<tr>
        <th>S no </th>
		<th>Name</th>
		<th>Phone</th>
        <th>age</th>  
	</tr>

    <?php
    while ($row=mysqli_fetch_assoc($res)) {  
    ?>
        <tr>
		<td><?php echo $row['sno']; ?></td>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['mobile']; ?></td>
        <td><?php echo $row['age']; ?></td>
        
   <?php } ?> 
  
  
   <?php
    for($page = 1; $page<= $number_of_page; $page++) {  
        echo '<a href = "paggination.php?page=' . $page . '">' . $page . ' </a>';  
    }  
  
?>  
</body>  
</html>  
<!DOCTYPE html>
<html>
<head>
   
    <title>im_up</title>

    <style>
            body{
                display :flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                min-height:100vh;
            }

        </style>
</head>
<body>
         <form method = "post" action = "imcon.php" enctype ="multipart/form-data">
        <input type = "file" name ="file" >
        <input type = "submit" name ="submit" value ="upload">


        </form>
</body>
</html>
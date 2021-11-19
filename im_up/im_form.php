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

           

        <form method = "post" action = "upload.php" enctype ="multipart/form-data">
            <br><br><br>
        <input type = "file" name ="img[]" multiple>
        <input type = "submit" name ="submit" value ="upload">


        </form>
</body>
</html>
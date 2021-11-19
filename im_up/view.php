<?php include "db_con.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>view</title>

    <style>
            body{
                display :flex;
                justify-content: center;
                align-items: center;
                flex-wrap : wrap;
                min-height:100vh;
            }

                .alb{
                    width : 200px;
                    height : 200px;
                    padding: 5px;
                }

                .alb img {
                    width : 200px;
                    height : 300px;
                }
                a{ text-decoration : none;
                    color : black;}
        </style>
</head>
    <body>
            <a href = "im_form.php"> &#8592;</a>
            
            <?php

            $sql ="SELECT * FROM test3 ORDER BY sno DESC";
            $res = mysqli_query($conn , $sql);
                    // echo $sql;
           if($res){

                while($row =  mysqli_fetch_assoc($res)){ ?>

                    <div class ="alb">

                    <img alt="image" src ="uploads_img/<?php echo $row['img_url'];?>">
                  
                </div>
         <?php   
             }  
        }  ?>

    </body>
</html>
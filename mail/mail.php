<!DOCTYPE html>
  <html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    
        <title>check mail</title>

        <style>
                div{
                            margin: auto;
                            width: 40%;
                            border: 3px solid green;
                            padding: 100px;
                }

        </style>
   </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        
        <div>
    <form method = "post" action ="<?php echo $_SERVER['PHP_SELF']; ?>">
            
        EMAIL :<br> <input name ="email" type ="text" /><br><br>

        TO : <br><input name ="to" type ="text" /><br><br>

        SUBJECT : <br><input name ="sub" type ="text" /><br><br>

        MESSAGE : <br>
                <textarea name ="mes" rows="15" cols="40"> </textarea> <br><br>

                <input name ="submit" type ="submit" />

         </form>
        </div>
    </body>
  </html>


 <?php

         if(isset($_POST['submit'])){

            $to = $_POST['to'] ;

            $sub = $_POST['sub'];

            $mes = $_POST['mes'];

            $from = $_POST['email'];

            $header = "From: $from";

    if (mail($to , $sub , $mes ,$header)){

        echo '<div class="alert alert-success" role="alert">
             mail sent successfully :
            </div>';

    }else{
            echo '<div class="alert alert-danger" role="alert">
            an error occur :
            </div>';
    }   }

  ?>
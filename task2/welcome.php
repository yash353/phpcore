<?php

    include 'nav/dbconn.php';

    session_start();

    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
    {
        header("location:login.php");
       // exit;
    }
    ?>
    <!DOCTYPE html>

    <html>

        <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>welcome </title>
            <style type="text/css" >
            .errorMsg{border:1px solid red; }
            .message{color: red; font-weight:bold; }
            </style>
        </head>

            <body >
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        
            <?php require 'nav/nav.php' ?>
            <h1 class="text-center">WELCOME - <?php echo $_SESSION['username'];?> </h1>

            </body>

    </html>
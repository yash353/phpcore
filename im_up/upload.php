<?php

    if(isset($_POST['submit'])){
      
        include "db_con.php";

      
      foreach ($_FILES['img']['name'] as $key=>$val){
      
        $img_nam = $_FILES['img']['name'][$key];
        $img_size = $_FILES['img']['size'][$key];
        $tmp_nam = $_FILES['img']['tmp_name'][$key];
        $error = $_FILES['img']['error'][$key];
        
        if($error === 0){

            if($img_size > 1250000){

                $er = "sorry , your file is too long. ";
                header("location:im_form.php?error=$er");
            
            }else{
                    $img_ex = pathinfo($img_nam,PATHINFO_EXTENSION);

                    $img_ex_lc = strtolower($img_ex);

                    $allow_ex = array("jpg" , "jpeg" , "png");

                    if(in_array($img_ex_lc , $allow_ex)){

                        $new_im_nam = uniqid("IMG-" , true). '.'.$img_ex_lc;

                     // echo $new_im_nam;
                      
                      $im_up_path = 'uploads_img/'.$new_im_nam;
                        move_uploaded_file($tmp_nam , $im_up_path);

                        //insert in database
                        $sql = "INSERT INTO test3(img_url) VALUES ('$new_im_nam')";
                        mysqli_query ($conn , $sql);
                        header("location:view.php");
                        echo $sql;

                    }else{
                        $er = "you can't upload files of this type";
                        header("location:im_form.php?error = $er");
                    }
                 }
                
              }else{
                $er = "unknown error occurred !";
                header("location:im_form.php?error = $er");
              }  }
            }else{
                header("location:im_form.php?error = $er");
            }


?>
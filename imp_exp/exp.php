        <?php
   
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database ="user";

            $conn =mysqli_connect($servername, $username, $password, $database );

            if(!$conn) {
                die ("sorry we failed to connect :".mysqli_connect_error());
            }

        if(isset($_POST['submit'])){

            $sql="SELECT * FROM test5 ORDER BY sno DESC";
            $res= mysqli_query($conn,$sql);

            if(mysqli_num_rows($res) > 0){

                $output.= '<table class="table" border="1">
                
                            <tr>
                                <th>sno</th>
                                <th>name</th>
                                <th>mobileno</th>
                                <th>email</th>
                                <th>age</th>
                                
                                  </tr>  ';

                    while($row = mysqli_fetch_assoc($res)){

                        $output.= '
                                    <tr>
                                    <td>'.$row['sno'].'</td>
                                    <td>'.$row['name'].'</td>
                                    <td>'.$row['mobileno'].'</td>
                                    <td>'.$row['email'].'</td>
                                    <td>'.$row['age'].'</td>
                                    
                                    </tr>  ';
                                     }

                                     $output.='</table>';
                                     header("content-type: application/xls");
                                     header("content-disposition:attachment, filename=download.xls");
                                     echo $output;
                                    }

        }
    ?>
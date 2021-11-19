    <?php
// somewhere early in your project's loading, require the Composer autoloader
// see: http://getcomposer.org/doc/00-intro.md
//require './vendor/autoload.php';

require_once 'C:\xampp\htdocs\phptask\vendor\autoload.php';
    
    use Dompdf\Dompdf;

// instantiate and use the dompdf class
            $dompdf = new Dompdf();
        
            if($_SERVER['REQUEST_METHOD']=="POST"){
                
            $first_name = $_POST['name'];
            $last_name = $_POST['lname'];
            $city = $_POST['city'];
            $mss = $_POST['msg'];     
            

            // $dompdf = new \Mpdf\Mpdf();


            $data = '';

            $data .= '<h1> YOUR DETIALS </h1>';

            $data .= '<strong>FIRST - NAME : </strong>'. $first_name .'<br>';
            $data .= '<strong>LAST - NAME : </strong>'. $last_name .'<br>';
            $data .= '<strong>CITY : </strong>'. $city .'<br>';
            $data .= '<strong>MESSAGE : </strong>'. $mss .'<br>';
            $dompdf->loadHtml($data);

            $dompdf->render();

            // Output the generated PDF to Browser
            $dompdf->stream();
             header('location:pdf.php');
             } ?>
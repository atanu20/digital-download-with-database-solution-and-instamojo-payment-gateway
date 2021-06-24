
<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'instamojo');
$_SESSION['user']="atanu";
$_SESSION['mail']="atanuj383@gmail.com";




require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use PhpOffice\PhpSpreadsheet\Writer\Csv;
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    <title>Hello, world!</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Playfair Display', serif;
            scroll-behavior: smooth;
        }
        .nav-link{
            font-weight: 600;
            color: #fff;
        }
        .bg-dark{
    background-color:#495462 !important;
}
        .logo{
            width: 150px;
            height: 80px;
        }
        .btn-danger{
    padding: 10px 25px;
           color:#000000;
           border-radius: 0;
           background-color: #fff;
           border: none !important;
}
.navbar-toggler {
    border: none !important;
    outline: none !important;
}

.navbar-toggler .fa-bars,
.navbar-toggler .fa-times {

    color: #e40b2f !important;
    font-size: 35px;
}

.fixed-top {
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1030;

}

.btn-info{
    padding: 10px 25px;
           color:#fff;
           font-weight: 700;
           border-radius: 0;
           background-color: rgb(184, 11, 11);
           border: none !important;
}



/* hero  */
/* .hero{
    width: 100%;
    min-height: 100vh;
    position: relative;
    overflow-x: hidden;
}
.slider{
    width: 100%;
    min-height: 100vh;
    position: absolute;
    top:-2px;
}
#slideImg{
    width: 100%;
    height: 100%;
}


.overlay{
    width: 100%;
    height: 100vh;
    background: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4));
    position: absolute;
    top:0
}

.content{
    width: 60%;
    margin: 160px auto 0;
    text-align: center;
    color:white;
}
.content h1{
    font-size: 50px;
}
.content h3{
   width: 80%;
   margin: 20px auto 70px; 
   font-weight: 100;
   line-height: 25px;
} */

.details{
    padding: 100px 0;
}
.details .card{
    padding: 20px;
    border: none !important;
    box-shadow: 0 3px 30px rgba(83, 207, 238, 0.5);
}

/* footer start  */
footer{
    width: 100%;
    min-height: 50vh;
    background-color: #000000;
    padding: 75px 0;
}
.ull {
    list-style-type: none;
}
.ull li{
    
    list-style-type: none;
}
.ull li a{
    color:white;
    text-decoration: none;
}
.ull li a:hover{
    color:white;
    text-decoration: none;
}
footer i{
    font-size: 22px !important;
    padding: 5px;
    color:white;
}
/* footer end  */
.ban{
    width: 100%;
            min-height: 50vh;
			background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url("img/jason-briscoe-amLfrL8LGls-unsplash.jpg");
			background-position: center;
			background-size:cover;
			background-repeat: no-repeat;
			background-attachment: fixed;
}


    </style>
  </head>
  <body>
    




<main>


<section class="details">
    <div class="container">
        <h1 class="font-weight-bold text-center">Pay for Course</h1>
        <br>
        <div class="row">
            <div class="col-lg-7 col-md-9 col-12 mx-auto">
                <div class="card">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="">Course Amount:</label>
                            <input type="text" class="form-control" placeholder="Enter amount"  name="amount"  required>
                          </div>
                        <div class="form-group">
                            <label for="">How Many Data You Need:</label>
                            <input type="tel" class="form-control" placeholder="Enter number" name="number" required>
                          </div>
                          <div class="form-group">
                            <label for="sel1">Select File extention:</label>
                            <select class="form-control" name="extention"  required>
                                <option value="">--Select File--</option>
                                <option value="csv">csv</option>
                                <option value="xlsx">xlsx</option>
                                <option value="xls">xls</option>
                            </select>
                            </div>
                                                    
                       <div class="text-center">
                           <input type="submit" class="btn btn-info" value="Payment" name="submit">
                       </div>
                        
                      </form>
                </div>
                  
            </div>
        </div>
    </div>
</section>




</main>











    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/particles.min.js"></script>
    <script src="js/app.js"></script>

    <script>
        $(document).ready(function () {
          $("#cross").css("display", "none");
          $("#bar").click(function () {
            $("#bar").css("display", "none");
            $("#cross").css("display", "block");
    
          });
          $("#cross").click(function () {
            $("#cross").css("display", "none");
            $("#bar").css("display", "block");
    
          });
    
        });
    
        $(window).on('scroll', () => {
          if ($(document).scrollTop() > 160) {
            $('nav').addClass('fixed-top animated fadeInDown ');
          }
          else {
            $('nav').removeClass('fixed-top animated fadeInDown ');
    
          }
    
    
        });
      </script>
  </body>
</html>

<?php
if(isset($_POST['submit']))
{
                $amount=$_POST['amount'];
                $number=$_POST['number'];
                $extention=$_POST['extention'];
            $name= $_SESSION['user'];
            $email=$_SESSION['mail'];
            $_SESSION['amount']=$amount;
            $_SESSION['number']=$number;


            $filename=$name.rand(11111,99999);

            $sequery="SELECT * FROM `user_info` ORDER BY RAND() LIMIT $number ";
            $query=mysqli_query($con,$sequery);


            $nums=mysqli_num_rows($query);
            if($nums)
            {
                $spreadsheet = new Spreadsheet();
                    $sheet = $spreadsheet->getActiveSheet();


                    $sheet->setCellValue('A1', 'ID');
                    $sheet->setCellValue('B1', 'USERNAME');
                    $sheet->setCellValue('C1', 'FULLNAME');
                    $sheet->setCellValue('D1', 'DOB');
                    $sheet->setCellValue('E1', 'GENDER');
$rowcount=2;
$roww=1;
                    foreach($query as $val)
                    {
                        $sheet->setCellValue('A'.$rowcount, $roww);
                        $sheet->setCellValue('B'.$rowcount, $val['username']);
                        $sheet->setCellValue('C'.$rowcount, $val['name']);
                        $sheet->setCellValue('D'.$rowcount, $val['dob']);
                        $sheet->setCellValue('E'.$rowcount, $val['gender']);
                        $rowcount++;
                        $roww++;
                    }
                    

                   
                    if($extention=="csv")
                    {
                        $writer = new Csv($spreadsheet);
                        $fname=$filename.'.csv';
                    }
                    else if($extention=="xlsx")
                    {
                        $writer = new Xlsx($spreadsheet);
                        $fname=$filename.'.xlsx';
                    }
                    else if($extention=="xls")
                    {
                        $writer = new Xls($spreadsheet);
                        $fname=$filename.'.xls';
                    }

                    $writer->save('upload/'.$fname);
                    $_SESSION['file']=$fname;
            }
// else{

// }



















            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
            curl_setopt($ch, CURLOPT_HEADER, FALSE);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            curl_setopt($ch, CURLOPT_HTTPHEADER,
                        array("X-Api-Key:test_c06b46e28e2a2b035498f4721c5",
                            "X-Auth-Token:test_11139217a60baaae7ff95692cea"));
            $payload = Array(
                'purpose' => 'database',
                'amount' => $amount,
                'buyer_name' => $name,
                
                'redirect_url' => 'http://localhost/instamojo/done.php',
                'send_email' => true,
                
                'send_sms' => false,
                'email' => $email,
                'allow_repeated_payments' => false
            );
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
            $response = curl_exec($ch);
            curl_close($ch); 
            $response=json_decode($response);
            // echo "<pre>";

            // print_r($response);

            $_SESSION['pid']=$response->payment_request->id;
            $iddd= $_SESSION['pid'];
            $_SESSION['purl']=$response->payment_request->longurl;
            // header('location:'.$response->payment_request->longurl);

            $qy="insert into user (name,email,data,amount,order_id,status) values('$name','$email','$number','$amount','$iddd','0')";

            mysqli_query($con,$qy);

            ?>
            <script>
                    
                    window.open('payment.php','_self');
                    </script>
            <?php
          
}
?>


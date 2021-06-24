<?php
session_start();
// echo $_SESSION['pid'];
//  echo '<br>';
//  echo $_SESSION['purl'];
// echo "<pre>";
// print_r($_REQUEST);
$link=$_SESSION['purl'];
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
                                            <table class="table table-dark">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Data Details</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Operation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">1</th>
                                <td><?php echo $_SESSION['number']; ?></td>
                                <td><?php echo $_SESSION['amount']; ?></td>
                                <td>
                                
                                <a href="<?php echo $link; ?>" class="btn btn-info">Payment Now</a>
                                </td>
                                </tr>
                               
                            </tbody>
                            </table>
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



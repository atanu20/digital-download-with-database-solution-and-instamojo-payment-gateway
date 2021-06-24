<?php

session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'instamojo');
// echo $_SESSION['pid'];
//  echo '<br>';
//  echo $_SESSION['purl'];
// echo "<pre>";
// print_r($_REQUEST);
$uid=$_SESSION['pid'];

if($_REQUEST['payment_status']=='Credit' && ($_REQUEST['payment_request_id']==$_SESSION['pid']) )
{
    $qu="UPDATE user SET status='1' WHERE order_id='$uid' ";

  $run=mysqli_query($con,$qu);
  ?>
<script>
alert("Payment suc");
window.open('index.php','_self');
</script>
  <?php
}
else{
    ?>
    <script>
    alert("Payment issue");
    window.open('index.php','_self');
    </script>
      <?php
}

?>
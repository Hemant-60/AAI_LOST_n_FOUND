<?php
    $conn = mysqli_connect("localhost","root");
    mysqli_select_db($conn,"aai");
    $pnr=$_POST['pnr'];
    $query=mysqli_query($conn,"SELECT * FROM pnr_info WHERE pnr='$pnr'");
    $email="";

    if(isset($_POST['submit'])){
      $em=$_POST['email'];
      $code=rand(1000, 10000);
      $msg="Your Verification code fror posting Luggage Query is : ".$code;
      mail($em,"Verification code for AAI",$msg);
      $checkCode=mysqli_query($conn,"INSERT INTO `verify`( `email`, `code`) VALUES ('$em','$code')");
      if($checkCode) echo"<script>window.location.href='./check.php?email=$em'</script>";
      
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
<style type="text/css">
  .display{
    background-image: linear-gradient(to right, #4776E6,#8E54E9);
    border-radius:10px;
    box-shadow: 3px 3px 8px #888888;
    padding:20px;
    color:#ffff99;

  }
</style>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>AAI | Found Article</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
</head>

<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">Airport Authority of India</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          
          <li class="nav-item">
            <a class="nav-link" href="verify.php">Lost Your Luggage</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="list.php">View Lost and found list</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../about.html">Login(Admin)</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!--**************************************************CONTENT OF WEBPAGE********************************************************-->
    <br><br><br>
    <div class="row">
    
    <div class="col-lg-12">

    
                <?php
                    if(mysqli_num_rows($query)>0){
                      while($res=mysqli_fetch_array($query)){
                ?>
              <center><div  class="col-lg-4 display">
                <span>
               
                <b>Name </b>: <?php echo$res['name'];?><br>
                <b>Email </b>: <?php echo$res['email']; $email=$res['email'];?><br>
                <b>Flight Number</b>: <?php echo$res['flight_no'];?><br>
                <b>Departure </b>: <?php echo$res['departure'];?><br>
                <b>Destination </b>: <?php echo$res['destination'];?><br>
              </span></div><br><center>
               <?php
                      }?>
                <div  class="col-lg-4 display">
                    <form method="POST" action="disp.php">
                      Verification Code will be sent to the email <b><?php echo$email;?></b><br><br>
                      <input type="hidden" name="email" value="<?php echo$email;?>">
                      <button type="submit" name="submit" class="btn btn-info" >Proceed>></button>
                    </form>
                </div>        
              <?php
                    }else{
               ?>
                  <div class="col-lg-4 display">
                      No Records Found.
                  </div>
               <?php
                    }
               ?>
    
                

     </div>   
    </div>
   
</body>
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--<script src="../assets/js/plugins/bootstrap-notify.js"></script>-->
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<script src="../assets/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.showNotification();

    });
</script>

</html>
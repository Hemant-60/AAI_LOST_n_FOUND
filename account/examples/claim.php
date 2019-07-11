<?php
    $conn = mysqli_connect("localhost","root");
    mysqli_select_db($conn,"aai");
    $query=mysqli_query($conn,"SELECT * FROM found ORDER BY id DESC");
    if((!isset($_GET['id']))||($_GET['id']==""))echo"<script>window.location.href='list.php'</script>";
    else $id=$_GET['id'];
    if(isset($_POST['submit'])){
        $itemId=$_POST['articleId'];
        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $description=$_POST['description'];
        $query=mysqli_query($conn,"INSERT INTO `claim`(`item_id`, `name`, `phone`, `description`) VALUES ( '$itemId' , '$name' , '$phone' , '$description')");
        if($query)echo"<script>alert('Article Claimed!');</script>";
        else echo"<script>alert('Entered Info is not correct');</script>";
        
        echo"<script>window.location.href='list.php'</script>";
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
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
            <a class="nav-link" href="../../postLuggage/colorlib-regform-1/index.html">Lost Your Luggage</a>
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
    <br><br><br><div class="wrapper">
        


        <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Enter Your Credentials here to claim the article</h4>
                                    
                                    <form method="post" action="claim.php">
                                            <div class="col-md-12 px-1">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input type="text" class="form-control" placeholder="Name" name="name">
                                                </div>
                                            </div>
                                            <div class="col-md-12 px-1">
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input type="text" class="form-control" placeholder="Phone" name="phone">
                                                </div>
                                            </div>
                                            <div class="col-md-12 px-1">
                                                <div class="form-group">
                                                    <label>Description of the article</label>
                                                    <input type="text" class="form-control" placeholder="Description" name="description">
                                                </div>
                                            </div>
                                            <div class="col-md-12 px-1">
                                                <div class="form-group">
                                                    <label>Article Id</label>
                                                    <input type="text" class="form-control" disabled="" name="articleId" value="<?php echo$id?>">
                                                </div>
                                            </div>
                                            
                                            <button type="submit" class="btn btn-primary btn-fill pull-right" name="submit">Claim Article</button>

                                    </form>

                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>


                </div>
            </nav>
            <!-- End Navbar -->
           
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="../../index.php">Airport Authority of India</a>
                        </p>
                    </nav>
                </div>
            </footer>
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
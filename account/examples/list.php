<?php
    $conn = mysqli_connect("localhost","root");
    mysqli_select_db($conn,"aai");
    $query=mysqli_query($conn,"SELECT * FROM found ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>AAI </title>
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
      <a class="navbar-brand" href="../../index.php">Airport Authority of India</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          
          <li class="nav-item">
            <a class="nav-link" href="../../postLuggage/colorlib-regform-1/index.html   ">Lost your Luggage?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="list.php">View Lost and found list</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../login/Login_v4/signin.php">Login(Admin)</a>
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
                                    <h4 class="card-title">List of Found Items</h4>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                            <th>Article</th>
                                            <th>Airport</th>
                                            <th>Description</th>
                                            <th>date</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Category</th>
                                            <th>Claim</th>

                                        </tr></thead>
                                        <tbody>
                                            <?php
                                                while($res=mysqli_fetch_array($query)){
                                            ?>
                                            <tr>
                                                <td><?php echo$res['id'];?></td>
                                                <td><?php echo$res['article'];?></td>
                                                <td><?php echo$res['airport'];?></td>
                                                <td><?php echo$res['description'];?></td>
                                                <td><?php echo$res['date'];?></td>
                                                <td><?php echo$res['email'];?></td>
                                                <td><?php echo$res['phone'];?></td>
                                                <td><?php echo$res['category'];?></td>
                                                <td><a href="claim.php?id=<?php echo$res['id'];?>">Claim</a></td>
                                            </tr>
                                            <?php
                                                }
                                            ?>
                                                
                                        </tbody>
                                    </table>
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
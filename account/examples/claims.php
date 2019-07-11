<?php
session_start();
    include'header.php';
    $query=mysqli_query($conn,"SELECT * FROM claim ORDER BY id DESC");
?>

<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Claimed Articles</h4>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            
                                            <tr>
                                            <th>Claim ID</th>
                                            <th>Article Id</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Description</th>

                                        </tr></thead>
                                        <tbody>
                                        <?php
                                                while($res=mysqli_fetch_array($query)){
                                            ?>
                                            <tr>
                                                <td><?php echo $res['id'];?></td>
                                                <td><?php echo $res['item_id'];?></td>
                                                <td><?php echo $res['name'];?></td>
                                                <td><?php echo $res['phone'];?></td>
                                                <td><?php echo $res['description'];?></td>
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
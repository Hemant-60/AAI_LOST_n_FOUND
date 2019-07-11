<?php
 session_start();
    include'header.php';
   

?>

           
<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Add a Found Article</h4>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="addLuggage.php">
                                        <div class="row">
                                            <div class="col-md-6 ">
                                                <div class="form-group">
                                                    <label>Article</label>
                                                    <input type="text" class="form-control"  placeholder="Article" name="article">
                                                </div>
                                            </div>
                                            <div class="col-md-6 ">
                                                <div class="form-group">
                                                    <label>Airport</label>
                                                    <input type="text" class="form-control" placeholder="Airport" name="airport">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Description</label>
                                                    <input type="text" class="form-control" placeholder="description" name="description">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Date Found On</label>
                                                    <input type="date" class="form-control" placeholder="Date Fonded on" name="date">
                                                </div>
                                            </div>
                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label>Contact phone</label>
                                                    <input type="text" class="form-control" placeholder="Contact Phone" name="ContactPhone">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label>Contact email</label>
                                                    <input type="email" class="form-control" placeholder="Contact email" name="ContactEmail">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="sel1">Category of Luggage</label>
                                                    <select class="form-control" name="category">
                                                        <option disabled="disabled" selected="selected">Category of Luggage</option>
                                                        <option value="bag">Bag/box</option>
                                                        <option value="card">Card/Documents</option>
                                                        <option value="cloth">Clothes</option>
                                                        <option value="costly">Costly Item</option>
                                                        <option value="currency">Currency</option>
                                                        <option value="Misc">Miscellaneous</option>
                                                        <option value="perish">Perishable Items</option>
                                                        <option value="personal">Personal Belongings</option>
                                                        <option value="religious">Religious items</option>
                                                        <option value="sports">Sports Item</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-info btn-fill pull-right" name="submit">Post Luggage</button>
                                        <div class="clearfix"></div>
                                    </form>
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
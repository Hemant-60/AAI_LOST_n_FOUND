<?php
session_start();
    $conn = mysqli_connect("localhost","root");
    mysqli_select_db($conn,"aai");
    
    $email=$_SESSION['email'];

   
      $code=$_POST['code'];
      $email=$_POST['email'];
      $checkCode=mysqli_query($conn,"SELECT * FROM verify where email='$email' AND code='$code' ORDER BY id DESC LIMIT 1");
      if(mysqli_num_rows($checkCode)>0) echo"<script>window.location.href='../../postLuggage/colorlib-regform-1/index.html';</script>";    
      else echo"<script>alert('Entered Code is Incorrect.');window.location.href='check.php?email=$email';</script>";  
 
      

?>
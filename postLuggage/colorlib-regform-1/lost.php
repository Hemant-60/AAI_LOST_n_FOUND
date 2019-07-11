<?php
$conn = mysqli_connect("localhost","root");

//if($conn) echo"Connected successfully";
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $date=$_POST['date'];
    $category=$_POST['category'];
    $airline=$_POST['airlines'];
    $from=$_POST['from'];
    $destination=$_POST['to'];
    $description=$_POST['description'];
    $phone=$_POST['phone'];
    $date_upload=date("Y-m-d");
    //echo $name.$date.$category.$airline.$from.$destination.$description.$phone.$date_upload;
    $insert=mysqli_query($conn,"INSERT INTO `lost`( `name`, `date`, `category`, `airlines`, `travelling _from`, `destination`, `description`, `phone`, `date_upload`)  VALUES ('$name','$date','$category','$airline','$from','$destination','$description','$phone','$date_upload')");
    if($insert) echo"<script>alert('Request Posted Succesfully !')</script>";
    else echo"<script>alert('Request Failed ! Please check all the details are filled correctly')</script>";
    echo"<script>window.location.href='index.html'</script>";
}

?>
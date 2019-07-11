<?php
$conn = mysqli_connect("localhost","root");
mysqli_select_db($conn,"aai");
if(isset($_POST['submit'])){
    $article=$_POST['article'];
    $airport=$_POST['airport'];
    $description=$_POST['description'];
    $date=$_POST['date'];
    $phone=$_POST['ContactPhone'];
    $email=$_POST['ContactEmail'];
    $category=$_POST['category'];
    $query=mysqli_query($conn,"INSERT INTO `found`(`article`, `airport`, `description`, `date`, `phone`, `email`, `category`)  VALUES ('$article','$airport','$description','$date','$phone','$email','$category')");   
    if($query) echo"<script>alert('Article addded successfully !')</script>";
    else echo"<script>alert('Request Failed ! Please check all the details are filled correctly')</script>";
    echo"<script>window.location.href='found.php'</script>";
}

?>
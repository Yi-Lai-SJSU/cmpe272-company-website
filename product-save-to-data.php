<?php 
    header("Content-Type: text/html; charset=utf8");

    if(!isset($_POST['submit'])){
        exit("Wrong execute.");
    }

    $name=$_POST['name'];
    $price=$_POST['price'];
    $productCode=$_POST['productCode'];
    $averageRating=$_POST['averageRating'];
    $ratingRange=$_POST['ratingRange'];
    $thumbnail=$_POST['thumbnail'];
    $clickTo=$_POST['clickTo'];
    $description=$_POST['description'];
    $viewCounts=$_POST['viewCounts'];
     
    include('connect.php');

    $q = "insert into products(id,name,price,productCode,averageRating,ratingRange,thumbnail,clickTo,description,viewCounts) values (null,'$name','$price', '$productCode','$averageRating','$ratingRange','$thumbnail','$clickTo','$description', '$viewCounts')";

    $reslut=mysqli_query($con,$q);


    if (!$reslut){
        die('Error: ' . mysqli_error());
    }else{
        echo "Success....  <br>";
        $link_address = 'product-register.html';
        echo "<a href='".$link_address."'>Click here go to the Login page.</a>";
    }
    mysqli_close($con);
?>
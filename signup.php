<?php 
    header("Content-Type: text/html; charset=utf8");

    if(!isset($_POST['submit'])){
        exit("Wrong execute.");
    }

    $name=$_POST['name'];
    $password=$_POST['password'];

    include('connect.php');
    $q = "insert into user(id,username,password) values (null,'$name','$password')";
    $reslut=mysqli_query($con,$q);
    
    if (!$reslut){
        die('Error: ' . mysqli_error());
    }else{
        echo "Success....  <br>";
        $link_address = 'index.html';
        echo "<a href='".$link_address."'>Click here go to the Login page.</a>";
    }
    mysqli_close($con);
?>
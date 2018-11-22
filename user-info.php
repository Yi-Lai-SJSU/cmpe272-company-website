<?php 
    header("Content-Type: text/html; charset=utf8");

    if(!isset($_POST['submit'])){
        exit("Wrong execute.");
    }

    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
    $home_address=$_POST['home_address'];
    $home_phone=$_POST['home_phone'];
    $cell_phone=$_POST['cell_phone'];

    include('connect.php');
    $q = "insert into user_info(user_id,first_name,last_name,email,home_address,home_phone,cell_phone) values (null,'$first_name','$last_name','$email','$home_address','$home_phone','$cell_phone')";
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
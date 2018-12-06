<?php

    session_start();

    header("Content-Type: text/html; charset=utf8");

    if(!isset($_POST['submit'])){
        exit("Wrong execute.");
    }

    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $emailAddress=$_POST['emailAddress'];
    $password=$_POST['password'];
    $groupID=$_POST['groupID'];

    $streetAddress=$_POST['streetAddress'];
    $apt=$_POST['apt'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $zipcode=$_POST['zipcode'];

    $homePhone=$_POST['homePhone'];
    $cellPhone=$_POST['cellPhone'];

    include('connect.php');
    $q = "insert into user_info(user_id,firstName,lastName,emailAddress,password,groupID,streetAddress,apt,city,state,zipcode,homePhone,cellPhone) 
                    values (null,'$firstName','$lastName','$emailAddress','$password','$groupID','$streetAddress','$apt','$city','$state','$zipcode','$homePhone','$cellPhone')";
    $reslut=mysqli_query($con,$q);
    
    if (!$reslut){
        die('Error: ' . mysqli_error());
    }else{
        echo "Success....  <br>";
        $link_address = 'index.html';
        $_SESSION['firstName'] = $firstName;
        echo $link_address;
        echo "<script type='text/javascript'>";
        echo "window.location.href='$link_address'";
        echo "</script>";
    }
    mysqli_close($con);
?>
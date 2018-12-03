<?php
    $server="127.0.0.1";
    $db_username="dog";
    $db_password="123456";
    $db_database="php";

    $con = mysqli_connect($server,$db_username,$db_password,$db_database);
    if(!$con){
        //die("can't connect".mysql_error());
    }
    mysqli_select_db($con,'test');
?>

<?php 
    header("Content-Type: text/html; charset=utf8");

    if(!isset($_POST['submit'])){
        exit("Wrong execute.");
    }

    $product_id = $_POST['product_id'];
    $comment = $_POST['comment'];
    $customer = $_POST['customer'];
    $name = $_POST['name'];

    include('connect.php');
    $q = "insert into comments(id,product_id,customer,comment) values (null,'$product_id','$customer','$comment')";
    $reslut=mysqli_query($con,$q);
    
    if (!$reslut){
        die('Error: ' . mysqli_error());
    }else{
        echo "Comments Submit Success. Thank you very much ";
        echo $customer;
        echo " <br>";
        $link_address = 'products-'.$name.'.html';
        echo $link_address;
        echo "<script type='text/javascript'>";
        echo "window.location.href='$link_address'";
        echo "</script>";
    }
    mysqli_close($con);
?>
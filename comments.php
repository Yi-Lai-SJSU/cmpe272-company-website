<?php 
    header("Content-Type: text/html; charset=utf8");

    if(!isset($_POST['submit'])){
        exit("Wrong execute.");
    }

    $product_id = $_POST['product_id'];
    $comment = $_POST['comment'];
    $customer = $_POST['customer'];
    echo $customer;
    $name = $_POST['name'];

    include('connect.php');
    $q = "insert into comments(id,product_id,customer,comment) values (null,'$product_id','$customer','$comment')";
    $reslut=mysqli_query($con,$q);
    
    if (!$reslut){
        die('Error: ' . mysqli_error());
    }else{
        echo "Success....  <br>";
        $link_address = 'products-'.$name.'.html';
        echo "<a href='".$link_address."'>Click here go to the product page</a>";
    }
    mysqli_close($con);
?>
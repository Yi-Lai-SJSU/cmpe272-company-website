<?php

    session_start();

    if(!isset($_POST["submit"])){
        exit("Wrong execute.");
    }
    include('connect.php');

    

    $error_msg = "";

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $password = $_POST['password'];

    if ($firstName && $lastName && $password){
             $sql = "select * from user_info where firstName = '$firstName' and lastName = '$lastName' and password = '$password'";
             $result = mysqli_query($con,$sql);
             if($result -> num_rows > 0){
                while($current = $result -> fetch_assoc()) {
                    $_SESSION['user_id'] = $current['user_id'];
                    $_SESSION['firstName'] = $current['firstName']; 

                    echo "Welcome," .$_SESSION['firstName'];
                    echo "Success....  <br>";
                    $link_address = 'index.html';
                    $_SESSION['firstName'] = $firstName;
                    echo $link_address;
                    echo "<script type='text/javascript'>";
                    echo "window.location.href='$link_address'";
                    echo "</script>";
                }
                exit;
             }else{
                echo "Username or Password Wrong.";
                echo "
                    <script>
                        setTimeout(function(){window.location.href='index.html';},5000);
                    </script>
                ";
            }
    } else {
                echo "Please complete the form first. Go back to the login page soon";
                echo "
                      <script>
                        setTimeout(function(){window.location.href='index.html';},4000);
                      </script>";
    }
    mysqli_close($con);
?>
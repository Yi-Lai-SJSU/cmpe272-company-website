<?PHP
    header("Content-Type: text/html; charset=utf8");
    if(!isset($_POST["submit"])){
        exit("Wrong execute.");
    }
    include('connect.php');
    $name = $_POST['name'];
    $passowrd = $_POST['password'];

    if ($name && $passowrd){
             $sql = "select * from user where username = '$name' and password='$passowrd'";
             $result = mysqli_query($con,$sql);
             $rows=mysqli_num_rows($result);
             if($rows){
                   header("refresh:0;url=main.html");
                   exit;
             }else{
                echo "Username or Password Wrong.";
                echo "
                    <script>
                        setTimeout(function(){window.location.href='index.html';},1000);
                    </script>
                ";
            }
    } else {
                echo "Please complete the form first. Go back to the login page soon";
                echo "
                      <script>
                        setTimeout(function(){window.location.href='index.html';},1000);
                      </script>";
    }
    mysqli_close($con);
?>
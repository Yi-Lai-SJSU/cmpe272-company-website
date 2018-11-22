<?PHP

    header("Content-Type: text/html; charset=utf8");
    if(!isset($_POST["submit"])){
        exit("Wrong execute.");
    }
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $names = explode(" ", $name);

    $sql1 = "select * from user_info
                      where first_name = '$names[0]' 
                        and last_name  = '$names[1]'
                        and     email  = '$email'
                        and home_phone = '$phone_number'"; 
    $sql2 = "select * from user_info
                      where first_name = '$names[0]' 
                        and last_name  = '$names[1]'
                        and      email = '$email'
                        and cell_phone = '$phone_number'"; 
    $sql3 = "select * from user_info
                      where first_name = '$names[0]' 
                        and last_name='$names[1]'
                        and email = '$email'";
    $sql4 = "select * from user_info 
                      where first_name = '$names[0]' 
                        and last_name='$names[1]'
                        and home_phone = '$phone_number'"; 
    $sql5 = "select * from user_info 
                      where first_name = '$names[0]' 
                        and  last_name ='$names[1]'
                        and cell_phone = '$phone_number'"; 

    if (!$name ) {
        response("Please input your name.");
    } else {
        
        if (count($names) == 2) {

            if ($email || $phone_number) {

                if($email && $phone_number) {
                    if(!searchFromDB($sql1)) {
                        if(!searchFromDB($sql2)) {
                            response("Can not find record with Name, email and phone_number.");
                        }
                    }
                } 

                if($email && !$phone_number) {
                    if (!searchFromDB($sql3)) {
                        response("Can not find record with Name and email!");
                    }
                }

                if($phone_number && !$email) {
                    if(!searchFromDB($sql4)) {
                        if(!searchFromDB($sql5)) {
                            response("Can not find record with Name and phone_number.");
                        }
                    }
                }
            } else {
                response("Please input at least your email or phone_number.");
            }

        } else {
            response("Please input your full name.");
        }
    }

function searchFromDB($sql)
{
    include('connect.php');
    $result = mysqli_query($con,$sql);
    $rows = mysqli_num_rows($result);
    if($rows){
        while($row = mysqli_fetch_array($result)){
            echo $row['first_name'] . " " . $row['last_name'] . "<br>";
            echo $row['email'] . "<br>" . $row['home_address'] . "<br>" . $row['home_phone'] . "<br> " . $row['cell_phone'];
            echo "<br>";
        }
        $link_address = 'index.html';
        echo "<a href='".$link_address."'>Click here go to the Login page.</a>";
        mysqli_close($con);
        return true;
    } else {
        mysqli_close($con);
        return false;
    }


}

function response($message) {
    echo $message;
    echo "
        <script>
            setTimeout(function(){window.location.href='index.html';},10000);
        </script>
        ";
}

?>
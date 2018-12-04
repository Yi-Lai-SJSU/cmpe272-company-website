<?PHP
    $server="127.0.0.1";
    $db_username="dog";
    $db_password="123456";
    $db_database="php";

    $conn = mysqli_connect($server,$db_username,$db_password,$db_database);

    if ($conn->connect_error) 
    {
        die("connection error>>>" . $conn->connect_error);
    } 

    $q = "select * FROM user_info";
    $result=$conn->query($q);
    $ret = array();
    if ($result -> num_rows > 0) {
        while ($current = $result -> fetch_assoc()) {
            array_push($ret, $current);
        }
        echo json_encode($ret);
    }

// set response code - 200 OK
http_response_code(200);

// make it json format
mysqli_close($conn);
?>
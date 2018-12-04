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


    function build_sorter($key)
    {
        return function ($a,$b) use ($key) {
            $stringCountA = $a[$key];
            $intCountA = (int)$stringCountA;
            $stringCountB = $b["$key"];
            $intCountB = (int)$stringCountB;

            if ($intCountA < $intCountB) {
                return +1;
            } else {
                return -1;
            }
        };
    }

    $q = "select * FROM products";
    $result=$conn->query($q);
    $ret = array();
    $mostFive = array();
    if ($result -> num_rows > 0) {
        while ($current = $result -> fetch_assoc()) {
            array_push($ret, $current);
        }
        usort($ret, build_sorter('viewCounts'));   
    }

    echo "[";
    for($i=0;$i<4;$i++) {
        echo json_encode($ret[$i]);
        if ($i < 4) {
            echo ",";
        }
    }
    echo "]";
    
// set response code - 200 OK
http_response_code(200);

// make it json format
mysqli_close($conn);
?>
<?php
    $server="127.0.0.1";
    $db_username="dog";
    $db_password="123456";
    $db_database="php";

    $conn = mysqli_connect($server,$db_username,$db_password,$db_database);

    if ($conn->connect_error) 
    {
        die("connection error>>>" . $conn->connect_error);
    } 

    $q = "select id, username FROM user";

    $result=$conn->query($q);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "id: ".$row["id"]." -Name: " .$row["username"]."<br>";
        }
    }else{
        echo "O result...<br>";
    }

    $link_address = 'index.html';
    echo "<a href='".$link_address."'>Click here to go back.</a>";
    $conn->close();
?>
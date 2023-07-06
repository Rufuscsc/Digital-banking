<?php
    $name = $_POST['name'];
    $number = $_POST['number'];

    $conn = new mysqli('localhost','root','','bankform');
    if ($conn -> connect_error) {

        die('Connection Failed :' .$conn->connect_error);
    }
    else{
        $stmt = $conn ->prepare("INSERT INTO banktb (customid,accountno) VALUES(?,?)");
        $stmt->bind_param('si',$name, $number);
        $stmt->execute();
        $stmt->close();
        $conn->close();
    }
    header("Location: success.html");
?>
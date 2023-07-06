<?php 
$conn = new mysqli('localhost','root','','bankform');
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql="delete from banktb where id=$id";
    $result = mysqli_query($conn,$sql);
    if($result){
        header('location:viewinfo.php');
    }else{
        die(mysqli_error($conn));
    }
}

?>
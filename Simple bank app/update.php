<?php 
$conn = new mysqli('localhost','root','','bankform');
$id = $_GET['updateid'];
$sql = "select * from banktb where id=$id";
$result = mysqli_query($conn,$sql);
$rows= mysqli_fetch_assoc($result);
$name = $rows['customid']; 
$number = $rows['accountno']; 

if ($conn -> connect_error) {
    die('Connection Failed :' .$conn->connect_error);
}
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $number = $_POST['number'];

    $sql = "UPDATE banktb SET id=$id, customid=$name, accountno='$number' WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if($result){
        header('location:viewinfo.php');
    }else{
        die(mysqli_error($conn));
    }
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="./Style.css">
</head>
<body>
    <form method="post" id="form">
      <h1>Digital Banking</h1>
      <div class="formcontainer"> 
      <hr/>
      <div class="container">
        <label for="name"><strong>Customer ID</strong></label>
        <input type="text" placeholder="Enter custom id" name="name" value=<?php echo $name ?> required>
        <label for="number"><strong>User Account No</strong></label>
        <input type="text" placeholder="Enter account no" name="number" value=<?php echo $number ?> required>
      </div>
      <button class="sumbit" onclick="return validateform()" name="submit">Update Account</button>
    </form>
    <script src="script.js" type="text/javascript"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="./Style.css">
</head>
<body>
    <form action="process.php" method="post" id="form">
      <h1>Digital Banking</h1>
      <div class="formcontainer">
      <hr/>
      <div class="container">
        <label for="name"><strong>Customer ID</strong></label>
        <input type="text" placeholder="Enter customer Id" name="name" required>
        <label for="number"><strong>User Account No</strong></label>
        <input type="text" placeholder="Enter account no" name="number" required>
      </div>
      <button type="submit" class="sumbit" onclick="return validateform()" name="submit">Create Account</button>
    </form>
    <form action="viewinfo.php" method="post">
        <button type="submit" class="sumbit"name="submit">View Accounts</button>
    </form>
    <script src="script.js" type="text/javascript"></script>
</body>
</html>
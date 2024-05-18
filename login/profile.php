<?php 
session_start();
if (isset($_SESSION['email']) ) {
?>
<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color: #f5f5f5; height: 100vh; display: flex; flex-direction: column; justify-content: center; align-items: center;">
    <div class="container text-center p-3 mb-2 bg-light text-dark border rounded d-flex flex-column">
        <h1><?php echo "Welcome " . $_SESSION['fname'] . " " . $_SESSION['lname'];?></h1>
        <p>Email: <?php echo $_SESSION['email']; ?></p>
        <p>Password: <?php echo $_SESSION['password']; ?></p>
        <a href="logout.php" class="btn btn-danger">Logout</a>
        <a href="../index.php" class="btn btn-dark text-light my-2">Back to home</a>
    </div>
</body>
</html>
<?php
}  else {
    header("Location: login.php");
    exit;
}
?>
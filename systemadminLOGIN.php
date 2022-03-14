<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>System Admin LOGIN</title>
    <link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/jquery-3.6.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>

    <style>

        .container {
            text-align: center;
            margin-top: 50px;
            padding: 16px 18px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
<div class="container">
    <form action="Users/SYSTEM%20ADMINISTRATION/systemaddministration.php" method="post">
        <div class="col-md-6 container">
            <h4>System Administration</h4>
            <p>Admin Log in</p>
            <label>
                <input type="email" name="email" class="form-control" required size="50" placeholder=" Email Address">
            </label><br>
            <label>
                <input type="password" name="password" class="form-control" required size="50" placeholder=" Password">
            </label>

            <hr style="background: white">
            <div class="buttons">
                <button type="submit" name="submit" class="btn btn-primary">Log In</button>
            </div>
        </div>
        <div class="col-md-6"></div>
    </form>
</div>
</body>
</html>

<?php
session_start();

if(isset($_POST['submit'])){
    include 'db_connect.php';

    $email = mysqli_real_escape_string($db,$_POST['email']);
    $password = mysqli_real_escape_string($db,$_POST['password']);
    $department = mysqli_real_escape_string($db,$_POST['department']);

    $qry=mysqli_query($db,"SELECT * FROM log_in WHERE email='$email' AND password='$password' AND department='$department'");
    $row = mysqli_fetch_array($qry,MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($qry);

    // If result matched $username,$password and $department, table row must be 1 row

    if($count == 1) {

        if (!empty($email) && !empty($password) ){
            header("LOCATION:index.php");
        }

    }else
    {
        header("LOCATION:login_error.php");
    }
}
?>
<?php
include "../scripts/connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/customColor.css">
</head>
<body class="d-flex justify-content-center align-items-center" style="height:100vh">
    <div class="d-flex main-container">
        <div class="d-flex flex-column" style="width: 50vw;">
            <div class="container d-flex flex-column justify-content-end" style="height: 10%;">
                <img src="../images/mainlogo.png" style="width: 10vw; ">
            </div>
            <div class="container-fluid d-flex justify-content-center align-items-center " style="height: 80%;">
                <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
                <div class="container-fluid d-flex justify-content-center"><span style="font-size: 2vw;">What's Up!</span></div>
                <div class="container"><input type="text" name="email" class="form-control my-3" style="width:20vw; height:6vh;" placeholder="Email"></div>
                <div class="container"><input type="text" name="password" class="form-control my-3" style="width:20vw; height:6vh;" placeholder="Password"></div>
                <div class="container d-flex justify-content-center mb-4 "><input type="submit" class="btn btn-secondary" style="width:10vw; height:7vh;" value="Login"></div>
                <div class="container" style="font-size:1.3vw;">Don't have an account? <a href="signup.php" style="color:#f87c09;">Sign Up</a></div>
                </form>
            </div>
        </div>
        <div class="d-flex justify-content-end" style="width: 50vw;"  >
            <img src="../images/login.png" style="width: 25vw; height: 80vh;">
        </div>
    </div>

<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>
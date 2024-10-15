<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>


<?php include 'helpers.php'?>


<?php include './partials/header.php' ?>





<div class="container">
    <form action="login.php" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Username</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="username">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>




<?php include './partials/footer.php' ?>


<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST["email"];
    $username = $_POST["username"];

    if (isset($_COOKIE['email']) && isset($_COOKIE['username'])) {
        if ($_COOKIE['email'] == $email && $_COOKIE['username'] == $username) {
            header("Location: admin.php");
        }
    } else {
        header("Location: register.php");
    }
}



//if(isset($_COOKIE['email'], $_COOKIE['username'])){
//    $_SESSION['email'] = $_COOKIE['email'];
//    $_SESSION['username'] = $_COOKIE['username'];
//    header('Location: admin.php');
//
//}

?>







</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Css/main.css">
</head>
<body>
<?php include './partials/header.php' ?>



<?php


if(!isset($_COOKIE['username'], $_COOKIE['email'])){
    header('location: login.php');
}

if(isset($_COOKIE['email'], $_COOKIE['username'])){
    $email = $_COOKIE['email'] ?? '';
    $username = $_COOKIE['username'] ?? '';
}


echo "Email: " . $email . "<br>";
echo "User: " . $username;


?>


<form action="logout.php" method="POST">
    <button>Logout</button>
</form>




<?php include './partials/footer.php' ?>





    


</body>
</html>
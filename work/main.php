<?php
session_start();
require_once('db.php');


// var_dump($_SESSION)

// mysqli_query($conect,$sql);

// $delete = "SELECT * FROM users WHERE id='$id'";
// $delete = "DELETE FROM users WHERE id='$id'";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="maincss.css">
</head>
<body>
    <div class="container">
        <img id="img" src="upload/<?=$_SESSION['user']['avatar']?>" alt="Аватар" class="profile-picture">

        <div class="profile-info">
            <label>ФИО:</label>
            <span><?=$_SESSION['user']['name']?></span> 
        </div>

        <div class="profile-info">
            <label>Login:</label>
            <span><?=$_SESSION['user']['login']?></span>
        </div>

        <div class="profile-info">
            <label>Email:</label>
            <span><?=$_SESSION['user']['email']?></span>
        </div>

        <a class="btn" href="logout.php" >Выйти</a>

    </div>


</body>
</html>
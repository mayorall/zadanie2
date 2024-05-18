<?php

/**
 * @var mysqli $conect;
 */

require_once('db.php');
session_start();

$name = $_POST['name'];
$login = $_POST['login'];
$email = $_POST['email'];
$pass = $_POST['password'];
$passret = $_POST['confirm-password'];

$pass_hash = md5($pass);
    if($pass == $passret){
        if(isset($_FILES['avatar']['name']) && $_FILES['avatar']['error'] == 0)
        {
            $ava_name = rand(1, 100000) . $_FILES['avatar']['name'];
            $avatar = move_uploaded_file($_FILES['avatar']['tmp_name'], 'upload/'.$ava_name);
        }
    $sql = "INSERT INTO `users` (name,login,password,email,avatar)VALUES ('$name','$login', '$pass_hash','$email','$ava_name')";

    if(mysqli_query($conect,$sql)){
        $sql = "SELECT * FROM users WHERE name = '$name'and login = '$login'and email = '$email'";

        $user = mysqli_fetch_assoc(mysqli_query($conect, $sql));
        $_SESSION['user'] = $user;

        header("Location: main.php");
    }
    else{
        echo"Ошибка";
    }
    }else{
            echo"Пароли не совпадают";
        }
    ?>
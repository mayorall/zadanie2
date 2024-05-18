<?php
session_start();
require_once('db.php');

$login = $_POST['login'];
$pass = md5($_POST['pass']);


    $sql  = "SELECT * FROM `users` WHERE login ='$login' AND password= '$pass'";
    $result = mysqli_query($conect,$sql);
    if ($result->num_rows > 0) { 
        $res = mysqli_fetch_assoc($result);
        $_SESSION['user'] = $res;        
//        var_dump($res);
        header("Location: main.php");
    } else {
        echo "Нет пользователя";
    }

?>

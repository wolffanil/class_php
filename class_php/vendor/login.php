<?php
    session_start();

    require_once '../classes/user.php';

    $name = $_POST['name'];
    $password = $_POST['password'];

    



    $auth = $user->auth($name, $password);

    if($auth) {
        $_SESSION['g'] = 0;

        header('Location: ../pages/profile.php');
    } else {
        $_SESSION['error_auth'] = 'неверный логин или пороль';
        header('Location: ../index.php');

    }

?>
<?php 
    session_start();

    require_once '../classes/user.php';

    
    $id = $_POST['id'];
    
    $check = $user->checkId($id);

    if($check) {
        $_SESSION['success'] = 'yes';
        header('Location: ../pages/profile.php');
    } else {
        $_SESSION['error'] = 'неверный ID';
        header('Location: ../pages/profile.php');
    }



?>
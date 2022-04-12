<?php
    if(isset($_POST['login'])){
        session_start();

        $_SESSION['admin'] = true;

        header('location: ../menukaart.php');
        exit();

    } else{
    header('location: ../index.php');
    exit();
}
?>
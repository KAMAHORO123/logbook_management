<?php
session_start();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email === 'kamahorolinda@gmail.com' && $password === 'kamahoro') {
        $_SESSION['user_id'] = 1;
        $_SESSION['user_name'] = 'KAMAHORO Linda'; 
        header("Location: read.php");
        exit();
    } else {
        header("location: login_user.html");
        exit();
    }
} else {

    header("Location: login.html");
    exit();
}
?>

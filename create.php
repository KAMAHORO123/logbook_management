<?php
include 'connection.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $created_at = $_POST['created_at'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO user_student (username, email, password, created_at) VALUES ('$username', '$email', '$hashed_password', '$created_at')";

    $result = $conn->query($sql);
    if ($result === TRUE) {
        header("Location: login.html");
        exit();
    } else {
        echo 'Error: ' . $sql . '<br>' . $conn->error;
    }
    $conn->close();
}
?>

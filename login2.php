<?php
session_start();

include 'connection.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user_student WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['fname'] . ' ' . $row['lname'];
            header("Location: orders.php");
            exit();
        } else {
            header("signup.html");
        }
    } else {
        echo "Invalid email or password.";
    }
}
?>
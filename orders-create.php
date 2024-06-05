<?php
include 'connection.php';

if (isset($_POST['submit'])) {
    $entry_date = $_POST['entry_date'];
    $entry_time = $_POST['entry_time'];
    $days = $_POST['days'];
    $week = $_POST['week'];
    $activity_description = $_POST['activity_description'];
    $working_hour = $_POST['working_hour'];
    $created_at = $_POST['created_at'];

    $sql = "INSERT INTO logbook_entries(entry_date, entry_time, days, week, activity_description, working_hour, created_at) 
            VALUES ('$entry_date', '$entry_time', '$days', '$week', '$activity_description', '$working_hour', '$created_at')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.html");
        exit();
    } else {
        echo 'Error: ' . $sql . '<br>' . $conn->error;
    }
    $conn->close();
}
?>

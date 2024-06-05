<?php

include 'connection.php';

$id = $_GET['id'];

$sql = "DELETE FROM logbook_entries WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo " Logbook deleted successfully.";
    header("Location: Read.php"); 
} else {
    echo "Error deleting !: " . $conn->error;
}


$conn->close();
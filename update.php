<?php
include 'connection.php';

$id = $_GET['id'];

$sql = "SELECT * FROM logbook_entries WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "Error fetching logbook entry data: " . $conn->error;
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $entry_date = $_POST['entry_date'];
    $entry_time = $_POST['entry_time'];
    $days = $_POST['days'];
    $week = $_POST['week'];
    $activity_description = $_POST['activity_description'];
    $working_hour = $_POST['working_hour'];
    $created_at = $_POST['created_at'];

    $sql = "UPDATE logbook_entries SET entry_date='$entry_date', entry_time='$entry_time', days='$days', week='$week', activity_description='$activity_description', working_hour='$working_hour', created_at='$created_at' WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Logbook entry updated successfully.";
        header("Location: Read.php");
        exit;
    } else {
        echo "Error updating logbook entry: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Logbook Entry</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="icon" href="logo.png">
    <style>
        body, html {
            margin-left: 260px;
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 800px;
        }
        .container {
            background: #fff;
            padding: 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            width: 100%;
            animation: fadeIn 1.5s ease-in-out;
        }
        h2 {
            text-align: center;
            color: #c69d14;
        }
        fieldset {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
        }
        legend {
            font-weight: bold;
            color: #c69d14;
        }
        label {
            display: block;
            margin-top: 10px;
            color: #0e0d0d;
        }
        input[type="text"],
        input[type="email"] {
            width: calc(100% - 16px);
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .gender-input {
            margin-right: 10px;
        }
        .submit-btn {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #c69d14;
            color: white;
            border: none;
            border-radius: 5px;
            margin-left: 50px;
            cursor: pointer;
            width: 100%;
            font-size: 1em;
            transition: background-color 0.3s ease;
        }
        .submit-btn:hover {
            background-color: #deb327;
        }
        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        a {
            display: block;
            margin-top: 20px;
            text-align: center;
            color: #4e3d08;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }
        a:hover {
            color: #deb327;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Edit Logbook Entry</h2>
        <form method="post">
            <div class="form-group">
                <label for="entry_date">Entry Date:</label>
                <input type="date" class="form-control" id="entry_date" name="entry_date" value="<?php echo $row['entry_date']; ?>" required>
            </div>
            <div class="form-group">
                <label for="entry_time">Entry Time:</label>
                <input type="time" class="form-control" id="entry_time" name="entry_time" value="<?php echo $row['entry_time']; ?>" required>
            </div>
            <div class="form-group">
                <label for="days">Days:</label>
                <input type="number" class="form-control" id="days" name="days" value="<?php echo $row['days']; ?>" required>
            </div>
            <div class="form-group">
                <label for="week">Week:</label>
                <input type="number" class="form-control" id="week" name="week" value="<?php echo $row['week']; ?>" required>
            </div>
            <div class="form-group">
                <label for="activity_description">Activity Description:</label>
                <textarea class="form-control" id="activity_description" name="activity_description" required><?php echo $row['activity_description']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="working_hour">Working Hour:</label>
                <input type="time" class="form-control" id="working_hour" name="working_hour" value="<?php echo $row['working_hour']; ?>" required>
            </div>
            <div class="form-group">
                <label for="created_at">Created At:</label>
                <input type="datetime-local" class="form-control" id="created_at" name="created_at" value="<?php echo $row['created_at']; ?>" required>
            </div>
            <button type="submit" class="btn btn-warning">Update</button>
        </form>
        <a href="Read.php">Go Back</a>
    </div>
    
</body>
</html>

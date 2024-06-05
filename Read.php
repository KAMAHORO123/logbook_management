<?php
include 'connection.php';

$sql = 'SELECT * FROM logbook_entries';
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo.png">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" />
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            color: #0e0d0d;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px;
        }
        h2 {
            text-align: center;
            color: #c69d14;
            margin-bottom: 40px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            animation: fadeIn 1.5s ease-in-out;
        }
        th, td {
            padding: 20px;
            text-align: left;
        }
        th {
            background-color: #0c0a05;
            color: #fff;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f4f4f4;
        }
        .action-btn {
            display: inline-block;
            padding: 8px 16px;
            background-color: #c69d14;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .action-btn:hover {
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
    </style>
</head>
<body>
    <div class="container">
        <h2>Admin Panel</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Entry Date</th>
                    <th>Entry Time</th>
                    <th>Days</th>
                    <th>Week</th>
                    <th>Activity Description</th>
                    <th>Working Hour</th>
                    <th>Created At</th>
                    <th>Edit/Update</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['id']); ?></td>
                            <td><?php echo htmlspecialchars($row['entry_date']); ?></td>
                            <td><?php echo htmlspecialchars($row['entry_time']); ?></td>
                            <td><?php echo htmlspecialchars($row['days']); ?></td>
                            <td><?php echo htmlspecialchars($row['week']); ?></td>
                            <td><?php echo htmlspecialchars($row['activity_description']); ?></td>
                            <td><?php echo htmlspecialchars($row['working_hour']); ?></td>
                            <td><?php echo htmlspecialchars($row['created_at']); ?></td>
                            <td>
                                <a class="btn btn-warning" href="update.php?id=<?php echo htmlspecialchars($row['id']); ?>">Edit</a>&nbsp;
                                <a class="btn btn-warning" href="delete.php?id=<?php echo htmlspecialchars($row['id']); ?>">Delete</a>
                            </td>
                        </tr>
                <?php
                    }
                } else {
                    echo "<tr><td colspan='9'>No entries found</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <a href="index.html" class="btn btn-primary">Go back Home</a>
    </div>
</body>
</html>

<?php
$conn->close();
?>

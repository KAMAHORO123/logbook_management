<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo.png">
    <title>Add Logbook Entry</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" />
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
            background-color: white;
            box-sizing: border-box;
            padding: 100px;
            margin-top: 50px;
        }
        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            background: white;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            animation: fadeIn 1s ease-in-out;
            width: 80%;
            max-width: 600px;
            height: auto;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .illustration {
            width: 300px;
            height: auto;
            margin-bottom: 20px;
        }
        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background: white;
            border: 1px solid #ccc;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }
        #warning {
            margin-left: 100px;
        }
        .logout-btn {
            display: flex;
            margin-top: 20px;
            padding: 10px 20px;
            margin-left: 12px;
            background-color: #dc3545;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .logout-btn:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form id="logbookForm" method="POST" action="orders-create.php">
            <h2>Add Logbook Entry</h2>
            <div class="form-group">
                <label for="entry_date">Entry Date:</label>
                <input type="date" class="form-control" id="entry_date" name="entry_date" required>
            </div>
            <div class="form-group">
                <label for="entry_time">Entry Time:</label>
                <input type="time" class="form-control" id="entry_time" name="entry_time" required>
            </div>
            <div class="form-group">
                <label for="days">Days:</label>
                <input type="number" class="form-control" id="days" name="days" required>
            </div>
            <div class="form-group">
                <label for="week">Week:</label>
                <input type="number" class="form-control" id="week" name="week" required>
            </div>
            <div class="form-group">
                <label for="activity_description">Activity Description:</label>
                <textarea class="form-control" id="activity_description" name="activity_description" required></textarea>
            </div>
            <div class="form-group">
                <label for="working_hour">Working Hour:</label>
                <input type="time" class="form-control" id="working_hour" name="working_hour" required>
            </div>
            <div class="form-group">
                <label for="created_at">Created At:</label>
                <input type="datetime-local" class="form-control" id="created_at" name="created_at" required>
            </div>
            <button type="submit" name="submit" class="btn btn-warning" id="warning">Submit</button>
        </form>
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>
</body>
</html>
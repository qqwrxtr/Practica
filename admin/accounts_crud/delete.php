<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Delete Log</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #dc3545;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #c82333;
        }

        a {
            color: #dc3545;
            text-decoration: none;
            display: block;
            margin-top: 10px;
            position: absolute;
            top: 10px;
            left: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <a href="../element.php"><- Go Back</a>
    <form method="GET">
        <label for="id">Log ID to Delete:</label>
        <input type="text" name="id" required>

        <button type="submit">Delete Log</button>
    </form>
</body>

</html>

<?php
include '../conexiune.php';

if (isset($_GET['id'])) {
    $logId = mysqli_real_escape_string($conexiune, $_GET['id']);
    
    $deleteQuery = "DELETE FROM `logs` WHERE `id` = '$logId'";

    if (mysqli_query($conexiune, $deleteQuery)) {
        header ('Location: ../element.php');
    } else {
        echo "Error deleting record: " . mysqli_error($conexiune);
    }

    mysqli_close($conexiune);
} else {
    echo "Invalid request.";
}
?>

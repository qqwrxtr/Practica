<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Update Log</title>
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
            width: 300px; /* Adjust the width as needed */
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

        select {
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
            display: block; /* Display on a separate line */
            width: 100%; /* Full width */
        }

        button:hover {
            background-color: #c82333;
        }

        a {
            color: #dc3545;
            text-decoration: none;
            font-size: 16px;
            position: absolute;
            top: 10px;
            left: 10px;
        }
    </style>
</head>

<body>
    <a href="../element.php">Go Back</a>
    <?php
    include '../conexiune.php';

    if (isset($_GET['id'])) {
        $logId = mysqli_real_escape_string($conexiune, $_GET['id']);
        
        $selectQuery = "SELECT * FROM `logs` WHERE id = '$logId'";
        $result = mysqli_query($conexiune, $selectQuery);

        if (mysqli_num_rows($result) > 0) {
            $log = mysqli_fetch_assoc($result);
    ?>
            <form method="POST">
                <input type="hidden" name="id" value="<?php echo $log['id']; ?>">

                <label for="login">Login:</label>
                <input type="text" name="login" value="<?php echo $log['login']; ?>" required>

                <label for="name">Name:</label>
                <input type="text" name="name" value="<?php echo $log['name']; ?>" required>

                <label for="current_password">Current Password:</label>
                <input type="password" name="current_password" required>

                <label for="new_password">New Password:</label>
                <input type="password" name="new_password">

                <label for="root">Root:</label>
                <select name="root" required>
                    <option value="0" <?php echo ($log['root'] == 0) ? 'selected' : ''; ?>>User</option>
                    <option value="1" <?php echo ($log['root'] == 1) ? 'selected' : ''; ?>>Admin</option>
                </select>

                <button type="submit">Update Log</button>
            </form>
    <?php
        } else {
            echo "Log not found.";
        }
    } else {
        echo "Invalid request.";
    }
    ?>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $logId = mysqli_real_escape_string($conexiune, $_POST['id']);
        $login = mysqli_real_escape_string($conexiune, $_POST['login']);
        $name = mysqli_real_escape_string($conexiune, $_POST['name']);
        $currentPassword = mysqli_real_escape_string($conexiune, $_POST['current_password']);
        $newPassword = mysqli_real_escape_string($conexiune, $_POST['new_password']);
        $root = mysqli_real_escape_string($conexiune, $_POST['root']);
    
        $checkPasswordQuery = "SELECT password FROM `logs` WHERE id = '$logId'";
        $result = mysqli_query($conexiune, $checkPasswordQuery);
    
        if (mysqli_num_rows($result) > 0) {
            $dbPassword = mysqli_fetch_assoc($result)['password'];
    
            if (password_verify($currentPassword, $dbPassword)) {
                // Check if the input is not empty before including it in the update query
                $updateFields = array();

                if (!empty($login)) {
                    $updateFields[] = "login = '$login'";
                }

                if (!empty($name)) {
                    $updateFields[] = "name = '$name'";
                }

                if (!empty($newPassword)) {
                    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                    $updateFields[] = "password = '$hashedPassword'";
                }

                if (!empty($root)) {
                    $updateFields[] = "root = '$root'";
                }

                $updateFieldsStr = implode(', ', $updateFields);
                $updateQuery = "UPDATE `logs` SET $updateFieldsStr WHERE id = '$logId'";
    
                if (mysqli_query($conexiune, $updateQuery)) {
                    header('Location: ../element.php');
                    exit();
                } else {
                    echo "Error updating record: " . mysqli_error($conexiune);
                }
            } else {
                echo "Current password is incorrect.";
            }
        } else {
            echo "Error fetching password from the database.";
        }
    }
    

    mysqli_close($conexiune);
    ?>
</body>

</html>

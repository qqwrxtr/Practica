<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Create Log</title>
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

        input, select {
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
    <a href="../element.php">Go back</a>
    <form method="POST">
        <label for="login">Login:</label>
        <input type="email" name="login" required>

        <label for="name">Name:</label>
        <input type="text" name="name" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <label for="root">Root:</label>
        <select name="root" required>
            <option value="0">User</option>
            <option value="1">Admin</option>
        </select>

        <button type="submit">Create Log</button>
    </form>
</body>

</html>

<?php
include '../conexiune.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = mysqli_real_escape_string($conexiune, $_POST['login']);
    $name = mysqli_real_escape_string($conexiune, $_POST['name']);
    $password = password_hash(mysqli_real_escape_string($conexiune, $_POST['password']), PASSWORD_DEFAULT);
    $root = mysqli_real_escape_string($conexiune, $_POST['root']);

    $insertQuery = "INSERT INTO `logs` (login, name, password, root) VALUES ('$login', '$name', '$password', '$root')";
    
    if (mysqli_query($conexiune, $insertQuery)) {
        header ('Location: ../element.php');
    } else {
        echo "Error adding record: " . mysqli_error($conexiune);
    }

    mysqli_close($conexiune);
}
?>

<?php
include '../conexiune.php';

// Function to sanitize user input
function sanitizeInput($input) {
    global $conexiune;
    return mysqli_real_escape_string($conexiune, htmlspecialchars($input));
}

// Create
if (isset($_POST['submit'])) {
    $name = sanitizeInput($_POST['name']);
    
    // Concatenate the base URL with the user-inputted image URL
    $image = "/Eu/Practica/img/" . sanitizeInput($_POST['image']);

    $insertQuery = "INSERT INTO `category` (`name_ro`, `img`) VALUES ('$name', '$image')";
    mysqli_query($conexiune, $insertQuery);
}

mysqli_close($conexiune);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Category</title>
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
    <a href="../button.php">&lt;- Back to Category</a>

    <form method="post" action="create.php">
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <label for="image">Image URL:</label>
        <input type="text" name="image" required>
        <button type="submit" name="submit">Create Category</button>
    </form>
</body>
</html>


<?php
include '../conexiune.php';

// Function to sanitize user input
function sanitizeInput($input) {
    global $conexiune;
    return mysqli_real_escape_string($conexiune, htmlspecialchars($input));
}

// Check if category ID is set in the URL
if (isset($_GET['id'])) {
    $categoryId = mysqli_real_escape_string($conexiune, $_GET['id']);

    // Fetch category data from the database based on the category ID
    $query = "SELECT * FROM `category` WHERE `id`='$categoryId'";
    $result = mysqli_query($conexiune, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch the category data as an associative array
        $categoryData = mysqli_fetch_assoc($result);

        // Assign variables for pre-filling input fields
        $categoryId = $categoryData['id'];
        $name = $categoryData['name_ro'];
        $imgurl = $categoryData['img'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Category</title>
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
            max-width: 400px;
            width: 100%;
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

    <form method="post" action="update.php">
        <!-- Add hidden input for categoryId -->
        <input type="hidden" name="categoryId" value="<?= $categoryId ?>">
        <label for="updateName">Current Name:</label>
        <input type="text" name="updateName" placeholder="New Name" required value="<?= $name ?>">
        <label for="updateImage">Current Image URL:</label>
        <input type="text" name="updateImage" placeholder="New Image URL" required value="<?= $imgurl ?>">
        <button type="submit" name="update">Update</button>
    </form>
</body>

</html>

<?php
mysqli_close($conexiune);
?>

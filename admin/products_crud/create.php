<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
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
    <a href="../typography.php">&lt;- Back to Products</a>

    <form method="post" action="create.php">
        <label for="id">ID:</label>
        <input type="text" name="id" required>

        <label for="name">Name:</label>
        <input type="text" name="name" required>

        <label for="image">Image URL:</label>
        <input type="text" name="image" required>

        <label for="rating">Rating:</label>
        <input type="text" name="rating" required>

        <label for="price">Price:</label>
        <input type="text" name="price" required>

        <label for="producator">Producator:</label>
        <select name="producator" required>
            <option value="aeg">AEG</option>
            <option value="bosh">Bosch</option>
            <option value="bort">Bort</option>
            <option value="dastool">Dastool</option>
            <option value="daewoo">Daewoo</option>
            <option value="crown">Crown</option>
            <option value="black_decker">Black & Decker</option>
        </select>

        <button type="submit" name="submit">Create Product</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        include '../conexiune.php';

        $producator_id = mysqli_real_escape_string($conexiune, $_POST['producator_id']);
        $name = mysqli_real_escape_string($conexiune, $_POST['name']);
        $image = "/Eu/Practica/img/" . mysqli_real_escape_string($conexiune, $_POST['image']);
        $rating = mysqli_real_escape_string($conexiune, $_POST['rating']);
        $price = mysqli_real_escape_string($conexiune, $_POST['price']);
        $producator = mysqli_real_escape_string($conexiune, $_POST['producator']);

        $query = "INSERT INTO `products` (`producator_id`, `name`, `img`, `rating`, `price`, `producator`) VALUES ('$producator_id', '$name', '$image', '$rating', '$price', '$producator')";
        $result = mysqli_query($conexiune, $query);

        if ($result) {
            header('Location: ../typography.php');
            exit();
        } else {
            echo "Error creating product.";
        }

        mysqli_close($conexiune);
    }
    ?>
</body>
</html>

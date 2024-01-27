<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Product</title>
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
    <a href="../typography.php">&lt;- Back to Products</a>

    <form method="get" action="delete.php">
        <p>Are you sure you want to delete this product?</p>
        <button type="submit" name="submit">Delete Product</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['producator_id'])) {
        include '../conexiune.php';

        $productId = mysqli_real_escape_string($conexiune, $_GET['producator_id']);

        $query = "DELETE FROM `products` WHERE `producator_id`='$productId'";
        $result = mysqli_query($conexiune, $query);

        if ($result) {
            header('Location: ../typography.php');
            exit();
        } else {
            echo "Error deleting product.";
        }

        mysqli_close($conexiune);
    }
    ?>
</body>
</html>




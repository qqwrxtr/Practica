<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
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

    input,
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

    /* Style for the select element */
    select {
        width: calc(100% - 16px);
        padding: 8px;
        margin-bottom: 16px;
        box-sizing: border-box;
        border: 1px solid #ced4da;
        border-radius: 4px;
    }
</style>

</head>
<body>
<?php
    // Include database connection file
    include '../conexiune.php';

    // Check if product ID is set in the URL
    if (isset($_GET['producator_id'])) {
        // Get the product ID from the URL
        $productId = mysqli_real_escape_string($conexiune, $_GET['producator_id']);

        // Fetch product data from the database based on the product ID
        $query = "SELECT * FROM `products` WHERE `producator_id`='$productId'";
        $result = mysqli_query($conexiune, $query);

        // Check if the query was successful
        if ($result) {
            // Fetch the product data as an associative array
            $productData = mysqli_fetch_assoc($result);
        }
    }
    ?>
    <a href="../typography.php">&lt;- Back to Products</a>

    <form method="post" action="update.php">
        <label for="id">Product ID:</label>
        <input type="text" name="producator_id" value="<?php echo htmlspecialchars($productData['producator_id']); ?>" readonly>

        <label for="id">Category:</label>
        <input type="text" name="producator_id" value="<?php echo htmlspecialchars($productData['id']); ?>" required>
        
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo htmlspecialchars($productData['name']); ?>" required>
        
        <label for="image">Image URL:</label>
        <input type="text" name="image" value="<?php echo htmlspecialchars($productData['img']); ?>" required>
        
        <label for="rating">Rating:</label>
        <input type="text" name="rating" value="<?php echo htmlspecialchars($productData['rating']); ?>" required>
        
        <label for="price">Price:</label>
        <input type="text" name="price" value="<?php echo htmlspecialchars($productData['price']); ?>" required>
        
        <label for="producator">Producator:</label>
        <select name="producator" required>
            <option value="aeg" <?php echo ($productData['producator'] === 'aeg') ? 'selected' : ''; ?>>AEG</option>
            <option value="bosh" <?php echo ($productData['producator'] === 'bosh') ? 'selected' : ''; ?>>Bosch</option>
            <option value="bort" <?php echo ($productData['producator'] === 'bort') ? 'selected' : ''; ?>>Bort</option>
            <option value="dastool" <?php echo ($productData['producator'] === 'dastool') ? 'selected' : ''; ?>>Dastool</option>
            <option value="daewoo" <?php echo ($productData['producator'] === 'daewoo') ? 'selected' : ''; ?>>Daewoo</option>
            <option value="crown" <?php echo ($productData['producator'] === 'crown') ? 'selected' : ''; ?>>Crown</option>
            <option value="black_decker" <?php echo ($productData['producator'] === 'black_decker') ? 'selected' : ''; ?>>Black & Decker</option>
        </select>

        <button type="submit" name="submit">Update Product</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        include '../conexiune.php';

        $productId = mysqli_real_escape_string($conexiune, $_POST['producator_id']);
        $name = mysqli_real_escape_string($conexiune, $_POST['name']);
        $image = "/Eu/Practica/img/" . mysqli_real_escape_string($conexiune, $_POST['image']);
        $rating = mysqli_real_escape_string($conexiune, $_POST['rating']);
        $price = mysqli_real_escape_string($conexiune, $_POST['price']);
        $producator = mysqli_real_escape_string($conexiune, $_POST['producator']);

        $query = "UPDATE `products` SET `name`='$name', `img`='$image', `rating`='$rating', `price`='$price', `producator`='$producator' WHERE `producator_id`='$productId'";
        $result = mysqli_query($conexiune, $query);

        if ($result) {
            header('Location: ../button.php');
            exit();
        } else {
            echo "Error updating product.";
        }

        mysqli_close($conexiune);
    }
    ?>
</body>
</html>




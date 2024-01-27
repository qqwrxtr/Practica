<?php
// Include your database connection file
include('../conexiune.php');

// Check if the 'id' parameter is set and not empty
if (isset($_GET['id']) && !empty($_GET['id'])) {
    // Sanitize the input to prevent SQL injection
    $categoryId = mysqli_real_escape_string($conexiune, $_GET['id']);

    // Perform the delete operation
    $query = "DELETE FROM `category` WHERE `id` = '$categoryId'";
    $result = mysqli_query($conexiune, $query);

    // Check if the deletion was successful
    if ($result) {
        // Use the header function to redirect to ../button.php
        header('Location: ../button.php');
        exit(); // Make sure to exit after sending the header
    } else {
        // Echo an error response to be used in the JavaScript alert
        echo "delete failed";
    }

    // Close the database connection
    mysqli_close($conexiune);
} else {
    // Echo an error response if 'id' parameter is not set or empty
    echo "Invalid request";
}
?>

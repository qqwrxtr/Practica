<?php
include 'conexiune.php';
session_start();

if (isset($_SESSION['username'], $_SESSION['status'])) {
    $status = $_SESSION['status'];

    $update_query = "UPDATE `logs` SET `status` = 0";
    $update_result = mysqli_query($conexiune, $update_query);

    if ($update_result) {
        session_destroy();
        header('Location: ../index.php');
        exit();
    } else {
        echo "Error updating status: " . mysqli_error($conexiune);
    }
} else {
    header('Location: ../index.php');
    exit();
}

mysqli_close($conexiune);
?>

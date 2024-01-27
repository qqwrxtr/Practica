<?php
// Include your database connection file
include 'conexiune.php';

// Start the session
session_start();

// Check if the user is logged in
if (isset($_SESSION['login'])) {
    // Get the root status from the database
    $login = $_SESSION['login'];
    $root_query = "SELECT root FROM `logs` WHERE `login` = '$login' AND `root` = 1";
    $root_result = mysqli_query($conexiune, $root_query);

    if ($root_result && mysqli_num_rows($root_result) > 0) {
        // User has admin rights (root = 1), display the link
        echo '<li><a href="/Eu/Practica/admin/index.php">Admin</a></li>';
    }
}
?>

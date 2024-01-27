<?php

include 'conexiune.php';


session_start();

if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['pswd'];
    $confirm_password = $_POST['confirm_pswd'];

    $email = trim($email);

    if ($password == $confirm_password) {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        $query = "INSERT INTO `logs` (name, login, password, status) VALUES ('$username', '$email', '$hashed_password', 1)";
        $result = mysqli_query($conexiune, $query);

        if ($result) {
            $_SESSION['username'] = $username;
            $_SESSION['status'] = 1;
            $_SESSION['login'] = $email;

            header('Location: index.php');
            exit();
        } else {
            echo "Error creating user. Please try again.";
        }
    } else {
        echo "Passwords do not match!";
    }
} elseif (isset($_POST['login'])) {
    $login_email = trim($_POST['login_email']);
    $login_password = $_POST['login_pswd'];

    $query = "SELECT * FROM logs WHERE LOWER(login) = LOWER('$login_email')";
    $result = mysqli_query($conexiune, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);

        if ($row && password_verify($login_password, $row['password'])) {
            $_SESSION['username'] = $row['name'];
            $_SESSION['status'] = 1;
            $_SESSION['login'] = $row['login'];

            $user_id = $row['id'];
            $update_query = "UPDATE logs SET status = 1 WHERE id = $user_id";
            mysqli_query($conexiune, $update_query);

            header('Location: ro/home.php');
            exit();
        } else {
            echo "Incorrect email or password. Please try again.";
        }
    } else {
        echo "Error: Unable to query database. Please try again.";
    }
}

mysqli_close($conexiune);
?>

<?php
include 'conexiune.php';

session_start();

if (isset($_SESSION['username'], $_SESSION['status'])) {
    $username = $_SESSION['username'];
    $status = $_SESSION['status'];

    if ($status == 1) {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Welcome to Your Account</title>
            <style>
                body {
                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                    background-color: #f4f4f4;
                    margin: 0;
                    padding: 0;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                }

                .container {
                    max-width: 400px;
                    width: 100%;
                    padding: 20px;
                    background-color: #fff;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    border-radius: 8px;
                    text-align: center;
                }

                h1 {
                    color: #333;
                }

                p {
                    color: #666;
                }

                button {
                    padding: 10px 20px;
                    font-size: 16px;
                    background-color: #3498db;
                    color: #fff;
                    border: none;
                    border-radius: 4px;
                    cursor: pointer;
                    transition: background-color 0.3s ease;
                }

                button:hover {
                    background-color: #267bb5;
                }
                a{
                    text-decoration:none;
                    color:white;
                }
            </style>
        </head>
        <body>
            <div class="container">
                <h1>Welcome, <?php echo $username; ?>!</h1>

                <form action="logout.php" method="post">
                    <button type="submit">Logout</button>
                    <button><a href="home.php">Intoarcete Inapoi</a></button>
                </form>
            </div>
        </body>
        </html>
        <?php
    } else {
        echo "Please log in to access your account.";
        echo "<a href='../index.php'>Go to Login</a>";
    }
} else {
    header('Location: ../index.php');
    exit();
}

mysqli_close($conexiune);
?>

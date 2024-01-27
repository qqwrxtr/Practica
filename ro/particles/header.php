<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Your Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Open Sans', sans-serif;
        }

        .antet {
            background-color: none;
            color: #121212;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }

        .logo img {
            width: 50px;
            height: auto;
        }

        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .navbar li {
            margin: 0 -160px;
            width: 170px;
        }

        .navbar a {
            text-decoration: none;
            color: #121212;
            font-weight: bold;
            font-size: 19px;
            transition: color 0.3s ease;
        }

        .navbar a:hover {
            color: #dc3545;
        }

        .options {
            display: flex;
            align-items: center;
            justify-content:space-around;
        }

        .options button {
            background: none;
            border: none;
            cursor: pointer;
        }

        .options .material-symbols-outlined {
            font-size: 24px;
        }

        .cos button {
            margin-right: 20px;
        }

        .log button {
            margin-right: 20px;
        }
    </style>
</head>

<body>

    <div class="antet">
        <div class="logo">
            <div class="img">
                <a href="/Eu/Practica/ro/home.php">
                    <img src="/Eu/Practica/img/drill.png" alt="">
                </a>
            </div>
        </div>
        <div class="navbar">
            <ul>
                <li><a href="/Eu/Practica/ro/home.php">Acasă</a></li>
                <li><a href="/Eu/Practica/ro/products.php">Produse</a></li>
                <li><a href="/Eu/Practica/ro/about_us.php">Despre Noi</a></li>
                <?php include 'navbar.php'; ?>
            </ul>
        </div>
        <div class="options">
            <div class="cos">
                <button>
                    <a href="/Eu/Practica/ro/cos.php">
                        <span class="material-symbols-outlined">
                            shopping_cart
                        </span>
                    </a>
                </button>
            </div>
            <div class="log">
                <button>
                    <a href="/Eu/Practica/ro/acc.php">
                        <span class="material-symbols-outlined">
                            person
                        </span>
                    </a>
                </button>
            </div>
        </div>
    </div>


</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Eu/Practica/css/cos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="/Eu/Practica/css/nullstyle — копия.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <title>Practica</title>
</head>
<body>
    <?php include_once("particles/header.php") ?>
    
    <div class="content">

        <div class="eroare">
            <p class="error"></p>
        </div>

        <div id="cartContainer">

        </div>

        <div class="final">
            <div class="final_price">
                <h2></h2>
            </div>
            <div class="finalizeaza" id="finalizeaza">
                <button>
                    <a href="/Practica/ro/ceckout.php">
                        <p>Finalizează Comanda</p>
                    </a>
                </button>
            </div>

        </div>

    </div>
    
    <?php include_once("particles/footer.php") ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="/Eu/Practica/js/cos.js"></script>
    <script src="/Eu/Practica/js/category.js"></script>
    <script src="/Eu/Practica/js/ceckout.js"></script>
</body>
</html>
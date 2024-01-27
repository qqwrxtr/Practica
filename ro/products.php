<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Eu/Practica/css/products.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="/Eu/Practica/css/nullstyle — копия.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <title>Practica</title>
</head>
<body>

    <?php include('particles/header.php') ?>

    <div class="content">
        <div class="swiper">

            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <img src="/Eu/Practica/img/slider1.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="/Eu/Practica/img/slider2.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="/Eu/Practica/img/slider3.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="/Eu/Practica/img/slider4.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="/Eu/Practica/img/slider5.png" alt="">
                </div>
            </div>

            <div class="swiper-pagination"></div>
        </div>
        <div class="products">
            <div class="title">
                <h2>Scule Electrice</h2>
            </div>
            <div class="category" id="category">
            <?php
                include("conexiune.php");

                $sql = mysqli_query($conexiune, "SELECT * FROM `category`"); // Assuming your table is named 'category'
                $html = "";

                while ($row = mysqli_fetch_assoc($sql)) {
                    $categoryId = $row['id'];
                    $categoryName = $row['name_ro'];
                    $categoryImage = $row['img'];

                    $html .= '
                        <div class="block">
                            <button onclick="redirectToCategory(' . $categoryId . ')">
                                <div class="img">
                                    <img src="' . $categoryImage . '" alt="">
                                </div>
                                <div class="text">
                                    <p>' . $categoryName . '</p>
                                </div>
                            </button>
                        </div>
                    ';
                }

                echo $html;
            ?>


            </div>
        </div>


    </div>

    <?php include_once("particles/footer.php") ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="/Eu/Practica/js/products.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Eu/Practica/css/category.css">
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
        <!-- <div class="aside">
            <div class="product">
                <div class="title">
                    <h3>Producător</h3>
                </div>
                <div class="checkbox">
                <select id="toolSelection" name="toolSelection">
                <option value="aeg" selected>AEG</option>
                <option value="agm" selected>AGM</option>
                <option value="black_decker" selected>Black&Decker</option>
                <option value="bort" selected>Bort</option>
                <option value="bosch" selected>Bosch</option>
                <option value="crown" selected>Crown</option>
                <option value="daewoo" selected>Daewoo</option>
                <option value="dastool" selected>Dastool</option>
            </select>

                </div>
            </div>
        </div> -->
        <div id="block_afis">
            <?php
                include("conexiune.php");

                if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
                    $idToShow = mysqli_real_escape_string($conexiune, $_GET["id"]);
                
                    $sql = mysqli_query($conexiune, "SELECT * FROM `products` WHERE `id` = $idToShow");
                
                    $productsHTML = '';
                
                    while ($row = mysqli_fetch_assoc($sql)) {
                        $productsHTML .= "
                            <div class='category_block' id='categoryContainer'>
                                <div class='img'>
                                    <img src='{$row['img']}' alt=''>
                                </div>
                                <div class='name'>
                                    <p>{$row['name']}</p>
                                </div>
                                <div class='info'>
                                    <div class='rating'>
                                    " . generateRatingStars($row['rating']) . "
                                    </div>
                                    <div class='last'>
                                        <div class='price'>
                                            <p>{$row['price']} MDL</p>
                                        </div>
                                        <div class='addtocart'>
                                            <button>
                                                <span class='material-symbols-outlined'>
                                                    shopping_cart
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
                    }
                
                    echo $productsHTML;
                }

                function generateRatingStars($rating) {
                    $filledStars = intval($rating);  // Get the integer part of the rating
                    $emptyStars = 5 - $filledStars;  // Calculate the number of empty stars
                
                    $starsHTML = '';
                
                    // Add filled stars
                    for ($i = 0; $i < $filledStars; $i++) {
                        $starsHTML .= '<span class="filled-star">&#9733;</span>';
                    }
                
                    // Add empty stars
                    for ($i = 0; $i < $emptyStars; $i++) {
                        $starsHTML .= '<span class="empty-star">&#9734;</span>';
                    }
                
                    return $starsHTML;
                }
                
                
            ?>
        </div>

    </div>

    <?php include_once("particles/footer.php") ?>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="/Eu/Practica/js/products.json"></script>
    <script src="/Eu/Practica/js/category.js"></script>
</body>
</html>
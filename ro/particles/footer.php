
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Open Sans', sans-serif;
        }

        .footer {
            background-color: #fff;
            color: #121212;
            padding: 30px 20px;
        }

        .four_blocks {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .names,
        .overview,
        .explore_us,
        .contact {
            width: 100%;
            max-width: 250px;
            margin-bottom: 20px;
        }

        .names h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .names p,
        .overview p,
        .explore_us p,
        .contact p {
            font-size: 14px;
            line-height: 1.6;
        }

        .tag {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .space a {
            color: #121212;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .space a:hover {
            color: #dc3545;
        }

        .cont p {
            margin: 5px 0;
        }

        .idk {
            text-align: center;
            margin-top: 20px;
        }
        footer{
            width: 1440px;
        }
    </style>
</head>

<body>

    <div class="footer" style='width:1440px; display:grid; place-items:center;'>
        <div class="four_blocks">
            <div class="names">
                <h3>DrillHouse</h3>
                <p>DrillHouse este un magazin online bazat pe vânzarea sculelor electrice de înaltă calitate</p>
            </div>
            <div class="overview" style='text-align:center;'>
                <p class="tag">Produse</p>
                <p class="space"><a href="/Eu/Practica/ro/products.php">Produsele Noastre</a></p>
            </div>
            <div class="explore_us" style='text-align:center;'>
                <p class="tag">Exploreazăne</p>
                <p class="space"><a href="/Eu/Practica/ro/about_us.php">Cariera Noastră</a></p>
            </div>
            <div class="contact" style='text-align:right;'>
                <p class="tag">Contacteazăne</p>
                <div class="cont">
                    <p>support@drillhouse.com</p>
                    <p>021 - 555 -456</p>
                    <p>Sudirman, South Jakarta</p>
                </div>
            </div>
        </div>
        <div class="idk">
            <p>Copyright 2023 • All Rights Reserved </p>
        </div>
    </div>


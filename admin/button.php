<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Admin Panel</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="ms-3">
                        <h6 class="mb-0">
                            <?php

                                include '../conexiune.php';

                                session_start();
                            ?>
                            <?php

                                if (isset($_SESSION['username']))
                                    $username = $_SESSION['username'];
                            ?>

                            <?php echo $username;?>

                        </h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Elements</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="button.php" class="dropdown-item">Category</a>
                            <a href="typography.php" class="dropdown-item">Products</a>
                            <a href="element.php" class="dropdown-item">Accounts</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="../index.php" class="dropdown-item">Log In</a>
                            <a href="../index.php" class="dropdown-item">Sign In</a>
                            <a href="404.php" class="dropdown-item">404 Error</a>
                            <a href="../ro/home.php" class="dropdown-item">Home</a>
                            <a href="../ro/about_us.php" class="dropdown-item">About Us</a>
                            <a href="../ro/acc.php" class="dropdown-item">Account</a>
                            <a href="../ro/category.php" class="dropdown-item">Category</a>
                            <a href="../ro/ceckout.php" class="dropdown-item">Ceckout</a>
                            <a href="../ro/cos.php" class="dropdown-item">Cos</a>
                            <a href="../ro/products.php" class="dropdown-item">Products</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <span class="d-none d-lg-inline-flex">Options</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="../ro/acc.php" class="dropdown-item">My Profile</a>
                            <a href="../ro/logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <!-- Button Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="create">
                    <a href="/Eu/Practica/admin/category_crud/create.php" style='display:flex;'>
                        <div class="icon">
                            <span class="material-symbols-outlined">
                                add_circle
                            </span>
                        </div>
                        <div class="text">
                            <p>Add Category</p>
                        </div>
                    </a>
                </div>
                <div class="row g-4">
                <?php
                    include '../conexiune.php';

                    $sql = mysqli_query($conexiune, "SELECT * FROM `category`");

                    // Check if there are rows in the result
                    if (mysqli_num_rows($sql) > 0) {
                        echo "<div class='table-responsive'>";
                        echo "<table class='table table-bordered table-hover'>";
                        echo "<thead class='thead-dark'>";
                        echo "<tr>";
                        echo "<th>ID</th>";
                        echo "<th>Name</th>";
                        echo "<th>Image</th>";
                        echo "<th>Action</th>";
                        echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";

                        while ($row = mysqli_fetch_assoc($sql)) {
                            $categoryId = $row['id'];
                            $categoryName = $row['name_ro'];
                            $categoryImage = $row['img'];

                            // Output a table row for each category
                            echo "<tr class='align-middle'>";
                            echo "<td>$categoryId</td>";
                            echo "<td>$categoryName</td>";
                            echo "<td><img src='$categoryImage' alt='Category Image' style='width: 100px; height: 100px; object-fit: contain;'></td>";
                            echo "<td>";
                            echo "    <a href='/Eu/Practica/admin/category_crud/delete.php?id=$categoryId'><span class='material-symbols-outlined' style='margin-left: 10px;'>delete</span></a>";
                            echo "    <a href='/Eu/Practica/admin/category_crud/update.php?id=$categoryId'><span class='material-symbols-outlined' style='margin-left: 10px;'>update</span></a>";
                            echo "</td>";
                            echo "</tr>";
                        }

                        echo "</tbody>";
                        echo "</table>";
                        echo "</div>";
                    } else {
                        // Output a message if no categories are found
                        echo "No categories found.";
                    }

                    mysqli_close($conexiune);
                ?>
            </div>

            <div class="container-fluid pt-4 px-1">
                <div class="bg-secondary rounded-top p-4" >
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Drill House</a>, All Right Reserved. 
                        </div>
                    </div>
                </div>
            </div>
            <!-- Button End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
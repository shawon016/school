<?php
    include("database.php")
?>

<!DOCTYPE html>
<html>
<head>
    <title>TOWNSRIPUR SHROCH CHANDRA HIGH SCHOOL</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <style>
        #logo {
            height: 140px;
            width: 110px;
        }
        .card-preview-text {
            text-align: justify;
        }
    </style>

    <!-- Header Start -->
    <div class="container">
        <div class="row p-3 shadow-lg p-2 bg-body-tertiary">
            <div class="col-1">
                <div class="text-center">
                    <img src="images/logo.jpg" class="rounded" alt="..." id="logo">
                </div>
            </div>
            <div class="col-10">
                <div>
                    <p class="text-success text-center fs-2 fw-bold">TOWNSRIPUR SHROCH CHANDRA HIGH SCHOOL</p>
                    <p class="text-danger text-center fs-4 fw-bold">TOWNSRIPUR, DEBHATA, SATKHIRA.</p>
                </div>
                <div class="d-flex justify-content-center fs-5 fw-bold">
                    <p class="text-danger">ESTD-1916</p>
                    <p class="text-success ms-5">EIIN-118616</p>
                    <p class="text-primary ms-5">POST CODE-9430</p>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Navigation Start -->
    <div class="container">
        <div class="row text-center shadow-lg bg-info">
            <div class="col-2"></div>
            <div class="col-8">
                <nav class="navbar navbar-expand-lg bg-info">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav d-flex mx-auto">
                            <li class="nav-item">
                                <a class="nav-link fw-bold" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-bold" aria-current="page" href="#">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-bold" aria-current="page" href="#">Online Class</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-bold" aria-current="page" href="#">Online Addmission</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-bold" aria-current="page" href="#">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-bold" aria-current="page" href="#">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-bold" aria-current="page" href="http://localhost/school/login.php" target="_blank">Admin Login</a>
                            </li>
                        </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
    <!-- Navigation End -->




    
    <!-- Footer Start -->
    <div class="container">
        <div class="row mt-3 shadow-lg p-2 bg-info">
            <div class="col-8 text-center pt-3 fw-bold">
                <p>Copyright &copy 2023 TOWNSRIPUR S. C HIGH SCHOOL. All rights reserved.</p>
            </div>
            <div class="col-4 text-center pt-3 fw-bold">
                <p>Technical Assistance by: SHAWON ALI.</p>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
<?php
    include("database.php")
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>TOWNSRIPUR S. C HIGH SCHOOL</title>
</head>

<body>
    <div>
        
    </div>

    <style>
        #logo {
            height: 140px;
            width: 110px;
        }
        .card-preview-text {
            text-align: justify;
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .card {
            height: 320px;
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

    <!-- Marquee Start -->
    <div class="container">
        <div class="row mt-2">
            <div class="col-2 bg-warning">
                <p class="fw-bold pt-3 ms-4">LATEST NEWS</p>
            </div>
            <div class="col-10 bg-primary">
                <marquee class="fw-bold pt-3 fs-5 text-light" behavior="scroll" direction="left" scrollamount="10">WELCOME TO TOWNSRIPUR SHROCH CHANDRA HIGH SCHOOL</marquee>
            </div>
        </div>
    </div>
    <!-- Marquee End -->

    <!-- Institute Picture and Notice Start -->
    <div class="container">
        <div class="row mt-2 shadow-lg p-2 bg-body-tertiary">
            <div class="col-7">
                <div class="card">
                    <div class="card-head">
                        <h5 class="text-center p-1 fw-bold text-light bg-primary">Institute Picture</h4>
                    </div>
                    <div class="card-body">
                            <img src="images/school.jpg" alt="" width="100%" height="250px">
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="card">
                    <div class="card-head">
                        <h5 class="text-center p-1 fw-bold text-light bg-primary">Latest Notice</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center shadow-lg p-2 bg-body-tertiary">
                            <tr>
                                <th class="bg-info">All Notices</th>
                            </tr>
                            <?php
                                $sql = "SELECT * FROM latest_notice";
                                $result = mysqli_query($conn, $sql);

                                if(!$result){
                                    die("SQL Statement Wrong");
                                }
                                else{
                                    while($row = mysqli_fetch_assoc($result)){
                                        ?>
                                        <tr>
                                            
                                            <td><?php echo $row['latest_notice_description']; ?></td>
                                        </tr>
                                        <?php
                                    }
                                }
                            ?>
                        </table>
                    </div>
                </div>  
            </div>
        </div>
    </div>
    <!-- Institute Picture and Notice End -->

    <!-- Institute information and Golden jubilee Start -->

    <div class="container" id="institute">
        <div class="row mt-3 shadow-lg p-2 bg-body-tertiary">
            <div class="col-7">
                <div class="card">
                    <div class="card-head">
                        <h5 class="text-center p-1 fw-bold text-light bg-primary">Institute Information</h5>
                    </div>
                    <div class="card-body">
                        <div>
                            <p class="card-preview-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, dolores quasi? Minus cumque, modi sunt aspernatur dolor fugiat tenetur natus tempore magni architecto illum amet omnis neque ratione itaque nobis maiores culpa mollitia maxime, magnam aliquid fugit asperiores quasi? Ipsum voluptatem delectus repellendus nam hic. Nihil, error iste eius consequuntur dolores at facilis exercitationem molestias. Ratione iusto et tempore nemo quod? Ex atque nam rem ipsa tempore culpa laboriosam, qui sapiente labore! Voluptas ut placeat asperiores aperiam dolorem at earum libero reprehenderit optio! Atque non dignissimos incidunt possimus cumque delectus voluptate fugit qui nisi, laudantium harum blanditiis, earum, tempora perspiciatis.</p> 
                            <div class="text-end">
                                <button class="btn btn-success"><a href="institute_info_all.php" class="text-decoration-none text-light fw-bold">Read More</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="card">
                    <div class="card-head">
                        <h5 class="text-center p-1 fw-bold text-light bg-primary">Golden Jubilee Corner of Independence</h5>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img src="images/golden.png" alt="" height="100px" width="150px">
                        </div>
                        <div>
                            <p class="card-preview-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident alias iure, maxime consectetur dolor similique fuga fugit aut corrupti numquam nisi labore unde quasi odit molestiae molestias, iusto quae asperiores non cupiditate quas velit nihil recusandae! Iure iusto, eum laboriosam voluptate laudantium itaque minima rem atque quidem saepe nam blanditiis.</p>
                            <div class="text-end">
                                <button class="btn btn-success"><a href="golden_all.php" class="text-decoration-none text-light fw-bold">Read More</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Institute information and Golden jubilee End -->

    <!-- Institute Head, Assistant and link Start -->
    <div class="container">
        <div class="row mt-3 shadow-lg p-2 bg-body-tertiary">
            <div class="col-4">
                <div class="card">
                    <div class="card-head">
                        <h5 class="text-center p-1 fw-bold text-light bg-primary">Institute Head Info</h5>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img src="images/logo.jpg" alt=""  height="100px" width="100px">
                        </div>
                        <div>
                            <p class="card-preview-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab cupiditate, nulla, provident, esse recusandae cumque sed molestias ex tenetur illo sint beatae voluptas tempora doloremque repellat nostrum excepturi? Quibusdam, accusantium.</p>
                            <div class="text-end">
                                <button class="btn btn-success"><a href="head_all.php" class="text-decoration-none text-light fw-bold">Read More</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-head">
                        <h5 class="text-center p-1 fw-bold text-light bg-primary">Assistant Institute Head Info</h5>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img src="images/logo.jpg" alt="" height="100px" width="100px">
                        </div>
                        <div>
                            <p class="card-preview-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab cupiditate, nulla, provident, esse recusandae cumque sed molestias ex tenetur illo sint beatae voluptas tempora doloremque repellat nostrum excepturi? Quibusdam, accusantium.</p>
                            <div class="text-end">
                                <button class="btn btn-success"><a href="ass_head_all.php" class="text-decoration-none text-light fw-bold">Read More</a></button>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-head">
                        <h5 class="text-center p-1 fw-bold text-light bg-primary">Important Links</h5>
                    </div>
                    <div class="card-body">
                        <div>
                            <h6 class="p-2 bg-info"><a href="https://www.jessoreboard.gov.bd/" target="_blank" class="text-decoration-none text-dark fw-bold fs-6 ms-5">Jashore Board</a></h6>
                            <h6 class="p-2 bg-info"><a href="https://dshe.gov.bd/" target="_blank" class="text-decoration-none text-dark fw-bold fs-6 ms-5">DSHE</a></h6>
                            <h6 class="p-2 bg-info"><a href="https://www.shed.gov.bd/" target="_blank" class="text-decoration-none text-dark fw-bold fs-6 ms-5">SHED</a></h6>
                            <h6 class="p-2 bg-info"><a href="https://hsp.pmeat.gov.bd/HSP-MIS/login" target="_blank" class="text-decoration-none text-dark fw-bold fs-6 ms-5">HSP-MIS</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Institute Head, Assistant and link End -->

    <!-- Teacher Section Start -->
    <div class="container">
        <div class="row mt-3 shadow-lg p-2 bg-body-tertiary">
            <div class="col-4">
                <div class="card">
                    <div class="card-head">
                        <h5 class="text-center p-1 fw-bold text-light bg-primary">Sheikh Rasel Digital Lab</h5>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <p class="card-preview-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab cupiditate, nulla, provident, esse recusandae cumque sed molestias ex tenetur illo sint beatae voluptas tempora doloremque repellat nostrum excepturi? Quibusdam, accusantium.</p>
                            <div class="text-end">
                                <button class="btn btn-success"><a href="sheikhrasel_all.php" class="text-decoration-none text-light fw-bold">Read More</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-head">
                        <h5 class="text-center p-1 fw-bold text-light bg-primary">Visitor Counter</h5>
                    </div>
                    <div class="card-body">
                        <div>
                            <p class="card-preview-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab cupiditate, nulla, provident, esse recusandae cumque sed molestias ex tenetur illo sint beatae voluptas tempora doloremque repellat nostrum excepturi? Quibusdam, accusantium.</p>
                        </div>
                    </div>
                </div>  
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-head">
                        <h5 class="text-center p-1 fw-bold text-light bg-primary">Internal E-Services</h5>
                    </div>
                    <div class="card-body">
                        <div>
                            <h6 class="p-2 bg-info"><a href="" target="_blank" class="text-decoration-none text-dark fw-bold fs-6 ms-5">Teacher's List</a></h6>
                            <h6 class="p-2 bg-info"><a href="" target="_blank" class="text-decoration-none text-dark fw-bold fs-6 ms-5">Staff List</a></h6>
                            <h6 class="p-2 bg-info"><a href="" target="_blank" class="text-decoration-none text-dark fw-bold fs-6 ms-5">Student's List</a></h6>
                            <h6 class="p-2 bg-info"><a href="" target="_blank" class="text-decoration-none text-dark fw-bold fs-6 ms-5">Developer Team</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Teacher Section End -->

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
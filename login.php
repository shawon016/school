<?php

    session_start();

    include("database.php");

    $empty_email = '';
    $empty_password = '';

    if(isset($_POST['submit'])){
        $email = $_POST['user_email'];
        $password = $_POST['user_password'];

        $md5_password = md5($password);

        if(empty($email)){
            $empty_email = "Please enter your Email";
        }
        if(empty($password)){
            $empty_password = "Please enter your Password";
        }

        if(!empty($email) && !empty($password)){
            $sql = "SELECT * FROM users WHERE user_email = '$email' AND user_password = '$md5_password' ";

            $query = $conn->query($sql);

            if($query->num_rows > 0){
                $_SESSION['login'] = "Login Successfully";
                header('location:dashboard.php');
            }
            else{
                echo "Not Found";
            }
        }
    }
?>

<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <div class="contrainer">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4 shadow-lg p-3 mb-5 bg-info rounded" style="margin-top: 150px;">
                    <?php
                        if(isset($_GET['usercreated'])){
                            echo "User Create Successfully";
                        }
                    ?>
                    <form action="login.php" method="POST">
                        <div class="mt-2">
                            <label for="" class="form-label fw-bold">Email</label>
                            <input type="text" class="form-control" name="user_email" value="<?php if(isset($_POST['submit'])){ echo $email; } ?>">
                            <?php if(isset($_POST['submit'])){ echo "<span class='text-danger'>".$empty_email."</span>";} ?>
                        </div>
                        <div class="mt-2">
                            <label for="" class="form-label fw-bold">Password</label>
                            <input type="password" class="form-control" name="user_password">
                            <?php if(isset($_POST['submit'])){ echo "<span class='text-danger'>".$empty_password."</span>";} ?>
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-success fw-bold" name="submit">Login</button>
                        </div>
                    </form>
                    <h5 class="fw-bold">Not have account? <a href="user.php" class="btn btn-primary fw-bold">Register</a></h5>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
    </body>
</html>
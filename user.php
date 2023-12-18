<?php

    include("database.php");

    $empmsg_firstname = '';
    $empmsg_lastname = '';
    $empmsg_email = '';
    $empmsg_password = '';
    $empmsg_confirmpassword = '';

    $empmsq_email = "";

    if(isset($_POST['submit'])){
        $firstname = $_POST['user_first_name'];
        $lastname = $_POST['user_last_name'];
        $email = $_POST['user_email'];
        $password = $_POST['user_password'];
        $confirmpassword = $_POST['user_confirm_password'];

        $md5_password = md5($password);

        $checkuser = "SELECT * FROM users WHERE user_email = '$email' ";
        $result = mysqli_query($conn, $checkuser);
        $count = mysqli_num_rows($result);

        if($count > 0){
            $empmsq_email ="Email already exists";
        }
        else{


        if(empty($firstname)){
            $empmsg_firstname = "Please enter first name";
        }
        if(empty($lastname)){
            $empmsg_lastname = "Please enter last name";
        }
        if(empty($email)){
            $empmsg_email = "Please enter email";
        }
        if(empty($password)){
            $empmsg_password = "Please enter password";
        }
        if(empty($confirmpassword)){
            $empmsg_confirmpassword = "Please enter confirm password";
        }

        if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($password) && !empty($confirmpassword)){
            if($password === $confirmpassword){
                $sql = "INSERT INTO users (user_first_name, user_last_name, user_email, user_password) 
                        VALUES ('$firstname', '$lastname', '$email', '$md5_password')";

                if($conn->query($sql) == TRUE){
                    header('location:login.php?usercreated');
                }
                else{
                    echo "Password Not Match";
                }
            }
            else{
                echo "Password Not Match";
            }
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
                <div class="col-4 shadow-lg p-3 mb-5 bg-info rounded" style="margin-top: 50px;">
                    <?php if(isset($_POST['submit'])){ echo "<h4 class='text-light text-center bg-danger p-1'>".$empmsq_email."</h4>";} ?>
                    <form action="user.php" method="POST">
                        <div class="mt-2">
                            <label for="" class="form-label fw-bold">First Name</label>
                            <input type="text" class="form-control" name="user_first_name" value="<?php if(isset($_POST['submit'])){ echo $firstname; } ?>">
                            <?php if(isset($_POST['submit'])){ echo "<span class='text-danger'>".$empmsg_firstname."</span>";} ?>
                        </div>
                        <div class="mt-2">
                            <label for="" class="form-label fw-bold">Last Name</label>
                            <input type="text" class="form-control" name="user_last_name" value="<?php if(isset($_POST['submit'])){ echo $lastname; } ?>">
                            <?php if(isset($_POST['submit'])){ echo "<span class='text-danger'>".$empmsg_lastname."</span>";} ?>
                        </div>
                        <div class="mt-2">
                            <label for="" class="form-label fw-bold">Email</label>
                            <input type="text" class="form-control" name="user_email" value="<?php if(isset($_POST['submit'])){ echo $email; } ?>">
                            <?php if(isset($_POST['submit'])){ echo "<span class='text-danger'>".$empmsg_email."</span>";} ?>
                        </div>
                        <div class="mt-2">
                            <label for="" class="form-label fw-bold">Password</label>
                            <input type="password" class="form-control" name="user_password">
                            <?php if(isset($_POST['submit'])){ echo "<span class='text-danger'>".$empmsg_password."</span>";} ?>
                        </div>
                        <div class="mt-2">
                            <label for="" class="form-label fw-bold">Confirm Password</label>
                            <input type="password" class="form-control" name="user_confirm_password">
                            <?php if(isset($_POST['submit'])){ echo "<span class='text-danger'>".$empmsg_confirmpassword."</span>";} ?>
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-success fw-bold" name="submit">Submit</button>
                        </div>
                    </form>
                    <h5 class="fw-bold">Already have an account? <a href="login.php" class="btn btn-primary fw-bold">Login</a></h5>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
    </body>
</html>
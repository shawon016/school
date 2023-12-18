<?php
    include("database.php");

    if(isset($_POST['add_teacher'])){
        $teachers_id = $_POST['teachers_id'];
        $teachers_name = $_POST['teachers_name'];
        $teachers_department = $_POST['teachers_department'];
        $teachers_mobile = $_POST['teachers_mobile'];
        $teachers_email = $_POST['teachers_email'];
        
        if(empty($teachers_id) || empty($teachers_name) || empty($teachers_department) || empty($teachers_mobile) || empty($teachers_email)){
            header("location:teacher.php?error=Please fill the form");
            exit();
        }
        else{
            $sql = "INSERT INTO teacher(teachers_id, teachers_name, teachers_department, teachers_mobile, teachers_email)
                    VALUES('$teachers_id','$teachers_name', '$teachers_department', '$teachers_mobile', '$teachers_email')";
            
            $result = mysqli_query($conn, $sql);
            if(!$result){
                die("SQL Statement Wrong");
            }
            else{
                header("location:teacher.php?success=Teacher Added Successfully");
                exit();
            }
        }
    }
?>
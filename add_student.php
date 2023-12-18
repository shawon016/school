<?php
    include("database.php");

    if(isset($_POST['add_student'])){
        $students_id = $_POST['students_id'];
        $students_name = $_POST['students_name'];
        $students_roll = $_POST['students_roll'];
        $students_class = $_POST['students_class'];
        $students_mobile = $_POST['students_mobile'];
        
        if(empty($students_id) || empty($students_name) || empty($students_roll) || empty($students_class) || empty($students_mobile)){
            header("location:student.php?error=Please fill the form");
            exit();
        }
        else{
            $sql = "INSERT INTO student(students_id, students_name, students_roll, students_class, students_mobile)
                    VALUES('$students_id','$students_name', '$students_roll', '$students_class', '$students_mobile')";
            
            $result = mysqli_query($conn, $sql);
            if(!$result){
                die("SQL Statement Wrong");
            }
            else{
                header("location:student.php?success=Student Added Successfully");
                exit();
            }
        }
    }
?>
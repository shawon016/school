<?php
    include("database.php");

    if(isset($_GET['students_id'])){
        $students_id = $_GET['students_id'];
    }
    $sql = "DELETE FROM student WHERE students_id = '$students_id'";
    $result = mysqli_query($conn, $sql);

    if(!$result){
        die("SQL Statemetn Wrong");
    }
    else{
        header("location:student.php?success=Student Data Delete Successfully");
        exit();
    }
?>
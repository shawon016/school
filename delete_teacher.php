<?php
    include("database.php");

    if(isset($_GET['teachers_id'])){
        $teachers_id = $_GET['teachers_id'];
    }
    $sql = "DELETE FROM teacher WHERE teachers_id = '$teachers_id'";
    $result = mysqli_query($conn, $sql);

    if(!$result){
        die("SQL Statemetn Wrong");
    }
    else{
        header("location:teacher.php?success=Teacher Data Delete Successfully");
        exit();
    }
?>
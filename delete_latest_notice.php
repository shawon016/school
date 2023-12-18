<?php
    include("database.php");

    if(isset($_GET['latest_notice_id'])){
        $latest_notice_id = $_GET['latest_notice_id'];
    }
    $sql = "DELETE FROM latest_notice WHERE latest_notice_id = '$latest_notice_id'";
    $result = mysqli_query($conn, $sql);

    if(!$result){
        die("SQL Statemetn Wrong");
    }
    else{
        header("location:latest_notice.php?success=Latest Notice Data Delete Successfully");
        exit();
    }
?>
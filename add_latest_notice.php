<?php
    include("database.php");

    if(isset($_POST['add_latest_notice'])){
        $latest_notice_id = $_POST['latest_notice_id'];
        $latest_notice_date = $_POST['latest_notice_date'];
        $latest_notice_description = $_POST['latest_notice_description'];
        
        if(empty($latest_notice_id) || empty($latest_notice_date) || empty($latest_notice_description)){
            header("location:latest_notice.php?error=Please fill the form");
            exit();
        }
        else{
            $sql = "INSERT INTO latest_notice(latest_notice_id, latest_notice_date, latest_notice_description)
                    VALUES('$latest_notice_id','$latest_notice_date', '$latest_notice_description')";
            
            $result = mysqli_query($conn, $sql);
            if(!$result){
                die("SQL Statement Wrong");
            }
            else{
                header("location:latest_notice.php?success=Latest Notice Added Successfully");
                exit();
            }
        }
    }
?>
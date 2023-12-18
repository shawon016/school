<?php
    $servername = "localhost";
    $serverusername = "root";
    $serverpassword = "";
    $dbname = "school";

    $conn = mysqli_connect($servername, $serverusername, $serverpassword, $dbname);

    if(!$conn){
        die("Connection Error". mysqli_connect_error());
    }

?>
<?php
    $db_host = "localhost"; 
    $db_user = "root";
    $db_password = "";
    $db_name = "shore_shoreditchtech";

    $con = mysqli_connect($db_host,$db_user,$db_password,$db_name);
    if(mysqli_connect_error()){
        echo "Failed to connect to MySQL";
    }
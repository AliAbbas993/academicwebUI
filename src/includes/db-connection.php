<?php
   $db_host = "181.214.31.161"; 
   $db_user = "shore_shore";
   $db_password = "Karachi@111";
   $db_name = "shore_shoreditchtech";

    $con = mysqli_connect($db_host,$db_user,$db_password,$db_name);
    if(mysqli_connect_error()){
        echo "Failed to connect to MySQL";
    }
    else {
        echo "Connected";
    }
?>
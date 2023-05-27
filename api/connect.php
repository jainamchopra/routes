<?php
    $connect = mysqli_connect("5.193.164.160" , "root" , "" , "voting") or die("Connection Failed!!!");

    if($connect){
        echo "Connection Succesful";
    }
    else{
        echo "Connection Failed";
    }

?>

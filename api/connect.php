<?php
    $connect = mysqli_connect("localhost" , "root" , "" , "voting") or die("Connection Failed!!!");

    if($connect){
        echo "Connection Succesful";
    }
    else{
        echo "Connection Failed";
    }

?>
<?php
    $connect = mysqli_connect("5.193.154.192" , "root" , "" , "voting") or die("Connection Failed!!!");

    if($connect){
        echo "Connection Succesful";
    }
    else{
        echo "Connection Failed";
    }

?>

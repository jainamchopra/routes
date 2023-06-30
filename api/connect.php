<?php
    $connect = mysqli_connect("sql12.freesqldatabase.com" , "sql12629679" , "AQ1vVxT9s6" , "voting") or die("Connection Failed!!!");

    if($connect){
        echo "Connection Succesful";
    }
    else{
        echo "Connection Failed";
    }

?>

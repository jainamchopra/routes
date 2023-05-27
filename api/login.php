<?php
    session_start();
    include("connect.php");
    $GRNO  = $_POST['GRNO'];
    $Password = $_POST['password'];
    $role = $_POST['role'];
    
    $check= mysqli_query($connect, "SELECT * FROM user WHERE GRNO = '$GRNO' and password = '$Password'") ;
    if(mysqli_num_rows($check)>0){
        $userdata = mysqli_fetch_array($check);
        $groups = mysqli_query($connect, "SELECT * FROM user WHERE role=2");
        $groupdata = mysqli_fetch_all($groups, MYSQLI_ASSOC);
        $_SESSION['userdata'] = $userdata;
        $_SESSION['groupdata'] = $groupdata;
        echo '
                <script>
                    window.location = "../Vote.php"
                </script>
            ';

    }
    else{

        echo '
                <script>
                    alert( "Invalid Gr No." )
                    window.location = "../index.html"
                </script>
            ';

    }
?>
<?php
    session_start();
    if(!isset($_SESSION['userdata']))
    {
        header("location: index.html");
    }
    $userdata = $_SESSION['userdata'];
    $groupdata = $_SESSION['groupdata'];

    if($_SESSION['userdata']['status']==0){
        $status = '<b style="color:red">Not Voted</b>';
    }
    else{
        $status = '<b style="color:green">Voted</b>';
    }
?>



<html>
    <title>IPHS-Vote Page</title>
<link rel="stylesheet" href="css/stylesheet2.css">
<div>
<a href="logout.php"><button id="Logout" type="submit">Logout</button></a>
 <h1 id="header">Election System</h1><hr>
</div>

<div id=voterinfo>
<div id="group">
    <?php 
        if($_SESSION['groupdata']){
           for($i=0; $i<count($groupdata); $i++){
                ?>  
                
                <div>
                    <b>Group Name: <?php echo $groupdata[$i]['NAME'] ?></b>
                    <!-- <b>Votes: <?php echo $groupdata[$i]['votes'] ?></b> -->
                    <form action="api/vote.php" method="POST">
                        <input type="hidden" name="gvotes" value="<?php echo $groupdata[$i]['votes'] ?>">
                        <input type="hidden" name="gid" value="<?php echo $groupdata[$i]['id'] ?>"><br>
                        <?php 
                            if($_SESSION['userdata']['status']==0){
                                ?>
                                <input type="submit" name="votebtn" value="Vote" id="votebtn"><br>
                                <?php
                            }
                            else{
                                ?>
                                <button disabled type="submit" name="votebtn" value="Voted" id="voted">Voted</button><br>
                                <?php
                            }
                        ?>
                        
                    </form>
                    <div>
                        <hr>
                    </div>
                </div>
                <?php
            } 
        }
        else{

            }
    ?>

</div>

<div id="info">
<b>Name: <?php echo $userdata['NAME'] ?><br><br></b>
<b>Gr No: <?php echo $userdata['GRNO'] ?><br><br> </b>
<b>House: <?php echo $userdata['House'] ?><br><br></b>
<b>Status: <?php echo $status ?><br><br> </b>
</div>
</html>
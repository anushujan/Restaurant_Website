<?php
session_start();
include("dbconn.php");
if(isset($_POST['reserve']))
{
    $aname=$_POST['rname'];
    $aemail=$_POST['remail'];
    $aphone=$_POST['rphone'];
    $anop=$_POST['rnop'];
    $adate=$_POST['rdate'];
    $atime=$_POST['rtime'];
    $aservice=$_POST['rservice'];

    $sql = "INSERT INTO reserve (name,email,phone,nop,date,time,service) VALUES ('$aname','$aemail','$aphone','$anop','$adate',
                                                                                    '$atime','$aservice')";

    $result = mysqli_query($conn,$sql);

    if(!$result){
        $_SESSION['rmessage'] = "Table reservation added failed";
        header("Location:reserve.php");
        exit(0);
    }
    else{
        $_SESSION['rmessage'] = "Table reservation added Successfully";
        header("Location:reserve.php");
        exit(0);
    }


}


?>
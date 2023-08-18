<?php
session_start();
include("dbconn.php");
if(isset($_POST['contact']))
{
    $cname=$_POST['ctname'];
    $cemail=$_POST['ctemail'];
    $csubject=$_POST['ctsubject'];
    $cmessage=$_POST['ctmessage'];
    $sql = "INSERT INTO contact (name,email,subject,message) VALUES ('$cname','$cemail','$csubject','$cmessage')";

    $result = mysqli_query($conn,$sql);

    if(!$result){
        header("Location:index.html");
        exit(0);
    }
    else{
        header("Location:index.html");
        exit(0);
    }


}


?>
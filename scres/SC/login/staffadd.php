<?php
session_start();
include("dbconn.php");
if(isset($_POST['submit']))
{
    $staffname=$_POST['psuser'];
    $staffpass=$_POST['pspass'];


   if(empty($staffname)){
    $_SESSION['message'] = "staff name required";
    header("Location:addstaff.php");
    exit();

   }
   else if(empty($staffpass)){
    $_SESSION['message'] = "staff password required";
    header("Location:addstaff.php");
    exit();
   }
   else{

    $sql = "INSERT INTO slogin(suser,spass) VALUES ('$staffname','$staffpass')";

    $result = mysqli_query($conn,$sql);

    if(!$result){
        $_SESSION['message'] = "Staff added failed";
        header("Location:adminpage.php");
        exit(0);
    }
    else{
        $_SESSION['message'] = "Staff added Successfully";
        header("Location:staffdetails.php");
        exit(0);
    }
}

}


?>
<?php
session_start();
 include("dbconn.php");
if (isset($_POST['hauser']) && isset($_POST['hapass'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        
    }
   $uname = validate($_POST['hauser']);
   $pass  = validate($_POST['hapass']);

   if(empty($uname)){
    header("Location:admin.php?error=User Name is required");
    exit();

   }
   else if(empty($pass)){
    header("Location:admin.php?error=Password is required");
    exit();
   }
   else{
    $sql = "SELECT * FROM alogin WHERE auser = '$uname' AND apass = '$pass'";

    //execute the query
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        if($row['auser'] == $uname && $row['apass'] == $pass ){
            header("Location:adminpage.php");
        }
        else{
            header("Location:admin.php?error=Invalid Username or Password");
        exit();

        }
        
    }else{
        header("Location:admin.php?error=Invalid Username or Password");
        exit();
    }


   }
}
else{
    header("Location:admin.php");
    exit();
}



?>
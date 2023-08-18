<?php
session_start();
 include("dbconn.php");
if (isset($_POST['hsuser']) && isset($_POST['hspass'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        
    }
   $uname = validate($_POST['hsuser']);
   $pass  = validate($_POST['hspass']);

   if(empty($uname)){
    header("Location:staff.php?error=User Name is required");
    exit();

   }
   else if(empty($pass)){
    header("Location:staff.php?error=Password is required");
    exit();
   }
   else{
    $sql = "SELECT * FROM slogin WHERE suser = '$uname' AND spass = '$pass'";

    //execute the query
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        if($row['suser'] == $uname && $row['spass'] == $pass ){
            header("Location:staffpage.php");
        }
        else{
            header("Location:staff.php?error=Invalid Username or Password");
        exit();

        }
        
    }else{
        header("Location:staff.php?error=Invalid Username or Password");
        exit();
    }

   }
}
else{
    header("Location:staff.php");
    exit();
}



?>
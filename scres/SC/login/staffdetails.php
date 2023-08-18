<?php
session_start();
include("dbconn.php");

if(isset($_GET['sid'])){
    $id=$_GET['sid'];
    $delete = mysqli_query($conn,"DELETE FROM slogin WHERE sid ='$id'");
    $_SESSION['message'] = "Staff deleted Successfully";
}
$select= "SELECT * FROM slogin";
$query = mysqli_query($conn,$select);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="addstaffstyle.css">
    <link rel="stylesheet" href="styleadmin.css">

</head>
<body>
      <!--navigation bar-->
      <header class="header_admin" >
    <!--SIDE NAVICATION BAR -->

    <nav class="navbar">
        <!--logo include-->
        <div class="logo">
            <a href="adminpage.php"><img src="logo1.png"></a>
            <h1>SIGNATURE CUISINE</h1>
        </div>
        <ul>
            <li><a href="addstaff.php">ADD STAFF</a></li> 
            <li><a href="staffdetails.php">STAFF DEATIALS</a></li>
            
        </ul>
        <p class=message><?php
        if(isset($_SESSION['message'])){
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
            }
        ?></p>

        <!--logout button include-->
        <div class="logout">
        <a href="alogout.php"><button class="logbtn"><span></span>LOGOUT</button></a>
        </div>

    </nav>

    <!--navigation bar end-->
</header>
    <table border="0" class="staffdetailtable">  
    <tr class="shead">
        <th>Staff id</th>
        <th>Staff username</th>
        <th>Staff password</th>
        <th>operation</th>
    </tr>
    <?php
    $num = mysqli_num_rows($query);
    if($num>0){
        while($result = mysqli_fetch_assoc($query)){
            echo "
            <tr class=sbody>
                <td>".$result['sid']."</td>
                <td>".$result['suser']."</td>
                <td>".$result['spass']."</td>
                <td>
                    <a href='staffdetails.php?sid=".$result['sid']."' class='deletebtn'>DELETE</a>       
                </td>
            </tr>
            ";
        }
    }
    ?>
    </table>
</body>
</html>
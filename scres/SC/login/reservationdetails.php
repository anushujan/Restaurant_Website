<?php
include("dbconn.php");
$select= "SELECT * FROM reserve";
$query = mysqli_query($conn,$select);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reservation details</title>
    <link rel="stylesheet" href="styleadmin.css">
    <link rel="stylesheet" href="addstaffstyle.css">
     <!--designed by anushujan-->
</head>
<body>
    <header class="header_staff" >

    <!--nav bar start-->
    <nav class="navbar">
        <!--logo include-->
        <div class="logo">
            <a href="staffpage.php"><img src="logo1.png"></a>
            <h1>SIGNATURE CUISINE</h1>
        </div>
        <ul>
            <li><a href="">Table Reservation</a></li> 
            <li><a href=""></a></li>
        </ul>
        <!--logout button include-->
        <div class="logout">
        <a href="slogout.php"><button class="logbtn"><span></span>LOGOUT</button></a>
        </div>
    </nav>
    <!--nav bar end-->
    </header>


    <table border="0" class=staffreservationtable>
    <tr class=sshead>
        <th>Reserve id</th>
        <th>Name</th>
        <th>E-mail</th>
        <th>Phone</th>
        <th>No-of-Guests</th>
        <th>Date</th>
        <th>Time</th>
        <th>Service Type</th>
    </tr>
    <?php
    $num = mysqli_num_rows($query);
    if($num>0){
        while($result = mysqli_fetch_assoc($query)){
            echo "
            <tr class=ssbody>
                <td>".$result['rid']."</td>
                <td>".$result['name']."</td>
                <td>".$result['email']."</td>
                <td>".$result['phone']."</td>
                <td>".$result['nop']."</td>
                <td>".$result['date']."</td>
                <td>".$result['time']."</td>
                <td>".$result['service']."</td>
            </tr>
            
            ";
        }
    }
    ?>
    </table>
</body>
</html>
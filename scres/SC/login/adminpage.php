
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
    <link rel="stylesheet" href="styleadmin.css">
     <!--designed by anushujan-->
</head>
<body>
<header class="header_admin" >

    <!--navigation bar start-->

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

        <!--ogout button include-->
        <div class="logout">
            <a href="alogout.php"><button class="logbtn"><span></span>LOGOUT</button></a>
        </div>
    </nav>

    <!--nav bar end-->
</header>

<section>
    <div class="apage">
        <?php 
        session_start();
        echo "welcome admin";
        ?>
    </div>

</section>
</body>
</html>

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
<header class="header_staff" >

    <!--SIDE NAVICATION BAR -->

    <nav class="navbar">
        <!--logo include-->
        <div class="logo">
            <a href="staffpage.php"><img src="logo1.png"></a>
            <h1>SIGNATURE CUISINE</h1>
        </div>

        <ul>
            <li><a href="reservationdetails.php">Table Reservation</a></li> 
            <li><a href=""></a></li>
        </ul>

        <!--ogout button include-->
        <div class="logout">
        <a href="slogout.php"><button class="logbtn"><span></span>LOGOUT</button></a>
</div>
    </nav>

    <!--SIDE NAVICATION BAR END-->
</header>

<section>
    <div class="apage">
        <?php 
        session_start();
        echo "welcome staff";
        ?>
    </div>

</section>
</body>
</html>
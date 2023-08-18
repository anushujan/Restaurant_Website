
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addstaff page</title>
    <link rel="stylesheet" href="addstaffstyle.css">
    <link rel="stylesheet" href="styleadmin.css">
    <!--designed by anushujan-->
</head>
<body>
    <!--navigation bar-->
    <header class="header_admin" >

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

        <!--logout button include-->
        <div class="logout">
        <a href="alogout.php"><button class="logbtn"><span></span>LOGOUT</button></a>
        </div>

    </nav>

    <!--navigation bar end-->
</header>
      <!-- admin page add staff page-->
      <section class="addstaff-section">     
        <div class="titleadd">
      <?php 
            session_start();
            echo "Add staff";

            ?> 
            </div>
        <div class="add">
                <form method="POST" action="staffadd.php">
                    <div class="field">
                        
                        <label>Username</label>
                        <input type="text" name="psuser">
                    </div>
                    <div class="field">
                    <label>Password</label>
                        <input type="text" name="pspass">
                        
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Add">
                    </div>
                </form>
                <p class="message">
                <?php 
                if(isset($_SESSION['message'])){
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                }
                ?></p>
        </div>
    </section>   
</body>
</html>
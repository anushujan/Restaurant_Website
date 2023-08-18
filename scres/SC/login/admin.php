<!DOCTYPE html>
<!-- admin login page -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>admin login page</title>
      <link rel="stylesheet" href="admin.css">
       <!--designed by anushujan-->
   </head>
   <body>
      <div class="box">
         <div class="title">
            Admin Login
         </div>
         <form method="POST" action="adminlogin.php">
            <!--error message pop up-->
            <?php if(isset($_GET['error'])) {?>
               <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>  

            <div class="field">
               <input type="text" name="hauser">
               <label>Username</label>
            </div>
            <div class="field">
               <input type="password" name="hapass">
               <label>Password</label>
            </div>
            <div class="field">
               <input type="submit" value="Login" name="submit">    
         </form>
      </div>
   </body>
</html>


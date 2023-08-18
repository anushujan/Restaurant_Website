<!DOCTYPE html>
<!-- staff login page -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>staff login page</title>
      <link rel="stylesheet" href="admin.css">
       <!--designed by anushujan-->
   </head>
   <body>
      <div class="box">
         <div class="title">
            Staff Login
         </div>
         <form method="POST" action="stafflogin.php">
            <!--error message pop up-->
            <?php if(isset($_GET['error'])) {?>
               <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?> 
            <div class="field">
               <input type="text" name="hsuser">
               <label>Username</label>
            </div>
            <div class="field">
               <input type="password" name="hspass">
               <label>Password</label>
            </div>
            <div class="field">
               <input type="submit" value="Login" name="submit">    
         </form>
      </div>
   </body>
</html>


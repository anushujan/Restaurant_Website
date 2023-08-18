  <?php 
  session_start();
  ?>
<!DOCTYPE html>
<html>
<head>
  <title>Table Reservation Form</title>
   <!--designed by anushujan-->
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap');
@font-face {
    font-family: Dagestan;
    src: url(DagestaN.ttf);
}
 body {
      font-family: Dagestan;
      background-color: rgb(248, 236, 248);
    }
    .resimg img{
      left:38%;
      top:18%;
      position: absolute;
      height: 540px;
      border-top-right-radius: 10px;
      border-bottom-right-radius: 10px;
    }
    .resimg .box{
      width: 670px;
      height: 590px;
      background: linear-gradient(#57398f, #8761cc );
      position: absolute;
      top:15%;
      left:38%;
    }
   
    h1 {
    left:10%;
    top:5%;
    position: absolute;
      color: #270465;
      letter-spacing: 4px;
      z-index: 1;
    }
    .reservebox {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      top:15%;
      position: absolute;
      left:10%;
      background-color: #fff;
      border-top-left-radius: 10px;
      border-bottom-left-radius: 10px;
      box-shadow: 0 0 10px rgba(255, 0, 234, 0.1);
      height: 550px;
      width:500px;
    }

    .form-group {
      margin-bottom: 20px;
      letter-spacing: 2px;
      color: #270465;
    }

    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .form-group input[type="text"],
    .form-group input[type="email"],
    .form-group select {
      width: 100%;
      padding: 8px;
      border: 1px solid #4c3180;  
      border-radius: 5px; 
      box-sizing: border-box;
      font-weight: 300;
    }
    input[type="date"]{
        background-color: rgb(235, 160, 235);
        border: 1px solid #4c3180; 
        border-radius: 5px;
        padding: 5px;
        color: #270465;        
    }
    input[type="time"]{
        background-color: rgb(235, 160, 235);
        border: 1px solid #4c3180; ;
        border-radius: 5px;
        padding: 1px;
        color: #270465;        
    }


    .form-group input[type="submit"] {
      background-color: #4c3180;
      color: #fff;
      float: right;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      top:90%;
      left:65%;
      position: absolute;
      cursor: pointer;
      transition: 0.45s;
    }

    .form-group input[type="submit"]:hover {
      background-color: rgb(235, 160, 235);
      color: #4c3180;
    }
    .message{
      background: #F2DEDE ;
      color: #A94442;
      margin-top: 20px;
      padding:10px;
      width:60%;
      border-radius: 5px;
      font-family: Dagestan;
      z-index: 1;
    }

</style>
<body>
  <div class="resimg">
    <div class="box"></div>
    <img src="images/table.jpg">
  </div>
<!--reservation form-->
  <h1>Table Reservation</h1>
  <div class="reservebox">
    <form method="POST" action="reserveadd.php">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="rname" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="remail" required>
      </div>
      <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="rphone" required>
      </div>
      <div class="form-group">
        <label for="people">No of peoples:</label>
        <input type="text" id="people" name="rnop" required>
      </div>
      <div class="form-group">
        <label for="date">Date:</label>
        <input type="date" id="date" name="rdate" required>
      </div>
      <div class="form-group">
        <label for="time">Time:</label>
        <input type="time" id="time" name="rtime" required>
      </div>
      <div class="form-group">
        <label for="Table">Service Type:</label>
        <select id="Table-model" name="rservice" required>
          <option value="1">Table service</option>
          <option value="2">Counter Service</option>
          <option value="3">Continued Service</option>
          <option value="4">All you can eat</option>
          <option value="5">Small plates service</option>
          <option value="6">Self-Service</option>
          <option value="7">Buffet Service</option>
          <!-- Add more options as needed -->
        </select>
      </div>
      <p class="message">
      <?php
      if(isset($_SESSION['rmessage'])){
                    echo $_SESSION['rmessage'];
                    unset($_SESSION['rmessage']);
                }
                ?>
          </p>
      <div class="form-group">
        <input type="submit" value="Reserve Table" name="reserve">
      </div>
    </form>
  </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>facility page</title>
     <!--designed by anushujan-->
</head>
<!-- facility design start-->
    <style>
        .facility-section p{
        position: absolute;
        font-size: 50px;
        left:20%;
        top: 110px;
        color: #270465;
    }
    .facility_search{
        position: absolute;
        top:150px;
        left:57%;      
    }
    .tralert td{
        left: 30%;
        top: 10%;
        position: relative;
        height:400px;
        color: rgb(172, 172, 172);
        font-size: 60px;
    }
    .facility_search button{
        width:100px;
        height:35px;
        position: relative;
        background: transparent;
        border:2px solid #270465;
        top:25px;
        padding: 10px;
        font-size: 20px;
        left:203px;
        color:#270465;
        cursor: pointer;  
        overflow: hidden;
        z-index: 1;
    }
    span{
        background: rgb(235, 160, 235);
        height: 100%;
        width: 0%;
        position: absolute;
        left:0;
        bottom:0;
        z-index: -1;
        transition: 0.5s;
    }
    button:hover span{
        width: 100%;
    }
    button:hover{
        border: none;
    }

    .facility_search input[type="text"]{
        width:200px;
        font-family: 'Roboto';
        height:35px;
        font-size: 15px;
    }

    .table{
        position: absolute;
        top:35%;
        left:13%;
    }
    .trhead td{
        width:260px;
        height:40px;
        font-size: 25px;
        color: #4c3180;
        background: rgb(235, 160, 235);
        text-align: center;
    }
    .trbody td{
        width:260px;
        height:40px;
        font-family: 'roboto';
        font-size: 15px;
        text-align: center;
    }
</style>
<!-- facility design end-->
<body>
     <!--header start-->
     <header>
        <nav>
            <div class="facimenu">
            <div class="logo">
                <img src="images/logo1.png">
                <p>Signature Cusine</p>
            </div>
              <ul>
                    <li><a href="index.html">HOME</a></li>     
                </ul>  
            </div>                          
        </nav>
    </header>
    <!--header End-->

     <!--search -->   
<form  method=GET action="">
    <section class="facility-section">
        <p>Facility</p>
        <div class="facility_search">
            <input type="text" name="search" value=" <?php  if(isset($_GET['search'])){echo $_GET['search'];}?> " placeholder="search facility..">
            <button type="submit"><span></span>Search</button>
           </div>
     <!--search end-->   
     <!--facility table start-->
           <div class=table> 
           <table border= 0>
                <tr class=trhead>
                    <td>Name</td>
                    <td>Discription</td>
                    <td>Availability</td>
                </tr>
                <?php
                include("dbconn.php");
                if(isset($_GET['search'])){
                    $filtervalues = $_GET['search'];
                    $query="SELECT *  FROM facility WHERE CONCAT(name,about) LIKE '%$filtervalues%' ";
                    $query_run = mysqli_query($conn,$query);

                    if(mysqli_num_rows($query_run)>0){
                        foreach($query_run as $items){
                            ?>
                              <tr class=trbody>
                                <td><?= $items['name'];?></td>
                                <td><?= $items['about'];?></td>
                                <td><?= $items['available'];?></td>
                            </tr>
                            <?php
                        }
                    }else{
                        ?>
                            <tr class="tralert">
                                <td colspan="3">No facility found</td>
                            </tr>
                        <?php
                    }
                }
                ?>
            </table>
            </div>
            <!--facility table end-->
    </section>
</form>

</body>
</html>
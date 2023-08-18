<?php
session_start();
// if(session_destroy()){
//     header("location:admin.php");
// }
session_unset();
header("location:admin.php");

?>
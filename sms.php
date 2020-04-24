<?php
session_start();
include "includes/conn.php";
  if (isset($_GET['accepted'])) {
    $number = $_GET['number'];
    header("Location:http://www.estoresms.com/smsapi.php?username=nelzluv&password=element121&sender=Movies_App&recipient=.$number.&message=This is to notify you to return the movie you collected. Thanks, from Movie_Club&dnd=true");
  } else{
    //echo mysqli_error($conn);
    //http://www.estoresms.com/smsapi.php?username=nelzluv&password=element121&sender=Movies_App&recipient=.$number.&message=This is to notify you to return the movie you collected. Thanks, from Movie_Club&dnd=true
  }
?>


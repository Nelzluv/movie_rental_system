<?php
session_start();
include "includes/conn.php";
  if (isset($_GET['accepted'])) {
    $id = ($_GET['id']);

    $query = "UPDATE customer_info SET customer_status=1 WHERE id = $id";  
    if($stmt = $pdo->prepare($query)){
        $stmt->bindParam(":id", $id);
        if($stmt->execute()){
            echo "<script> alert('The movie has been returned'); </script>";
            echo "<script> location.href='view_customers.php';</script>";
        } else {
            echo $stmt->errorInfo();
        }
    } else{
      echo $stmt->errorInfo();
    }
  } else{
    //echo mysqli_error($conn);
  }

 ?>

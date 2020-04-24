<?php
session_start();
if(!isset($_SESSION['user_info'])){
	header("location: signout.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="Style/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="Style/main.css">
    <title>MOVIES ZONE | Admin</title>
</head>
<body>
    <div class="container">
        <?php include("includes/nav.php") ?>
    </div>
<div class="container">
	<div class="jumbotron text-center" >
		<h1 class="text-center"> ADMIN PANEL </h1>
		<form action="view_customers.php" method="POST">
			<button type="submit" class="btn btn-primary btn-group" name="view"> View all Customers </button>
			<button type="submit" class="btn btn-default btn-group" name="pending">Movies not returned</button>
			<button type="submit" class="btn btn-danger btn-group" name="returned"> Returned Movies</button>
			<a href="view_customers.php" class="btn btn-success btn-group" > Back to Home </a>
		</form>
	</div>
</div>
<?php
include ("includes/conn.php");
if(isset($_POST['view'])){
//View all customers in the database
 ?>
<div class="container">
<table class="table table-hover">
	<tr>
		<th class="danger">No</th>
		<th class="danger">Customer Name</th>
		<th class="danger">Address</th>
		<th class="danger">Phone Number</th>
		<th class="danger">Movie Name</th>
		<th class="danger">Date Rented</th>
		<th class="danger">Return Date</th>
	</tr>
	<?php
		$query = "select * from customer_info";
		$stmt = $pdo->prepare($query);
		if($stmt->execute()){
			$customers = $stmt->fetchAll();
			$count = 1;
            foreach($customers as $customer){
	?>
			<tr>
				<td class="info"> <?php echo $count++; ?></td>
				<td class="info"> <?php echo $customer['customer_name']; ?> </td>
				<td class="info"> <?php echo $customer['customer_address']; ?> </td>
				<td class="info"> <?php echo $customer['customer_phone']; ?> </td>
				<td class="info"> <?php echo $customer['movie_name']; ?> </td>
				<td class="info"> <?php echo $customer['date_rented']; ?> </td>
				<td class="info"> <?php echo $customer['return_date']; ?> </td>
			</tr>
	<?php
			}

		}
	}
	 ?>
</table>
</div>


<?php
//View all Student in the database
if(isset($_POST["pending"])){
 ?>
<div class="container">
<table class="table table-bordered table-hover table-responsive">
   <tr>
		<th class="danger">No</th>
		<th class="danger">Name</th>
		<th class="danger">Address</th>	
		<th class="danger">Movie Name</th>
		<th class="danger">Date Rented</th>
		<th class="danger">Return Date</th>
		<th class="danger">Reminder</th>
		<th class="danger">Remove from List</th>
	</tr>

	<?php
	$query = "select * from customer_info where customer_status = 0";
	$stmt = $pdo->prepare($query);
	if($stmt->execute()){
		$customers = $stmt->fetchAll();
		$count = 1;
		foreach($customers as $customer){
	?>
  <tr>
  <tr>
<tr>
		<td class="info"> <?php echo $count++; ?></td>
		<td class="info"> <?php echo $customer['customer_name']; ?> </td>
		<td class="info"> <?php echo $customer['customer_address']; ?> </td>
		<td class="info"> <?php echo $customer['movie_name']; ?> </td>
		<td class="info"> <?php echo $customer['date_rented']; ?> </td>
		<td class="info"> <?php echo $customer['return_date']; ?> </td>
		 <td class="info"> <a class="btn btn-primary" type= "submit" name="accepted" href="sms.php?accepted=1&number='<?php echo $customer['customer_phone']; ?>'">Send Text </a> </td>
		 <td class="info"> <a class="btn btn-primary" type= "submit" name="accepted" href="modify.php?accepted=1&id='<?php echo $customer['id']; ?>'"> Remove </a> </td>
  </tr>
	<?php
			}

		} else {
			echo $stmt->errorInfo();
		}

	} 
	 ?>
</table>
</div>

<!--End of student Accept -->

<?php
//View all Student in the database
if(isset($_POST["returned"])){
 ?>
<div class="container">
<table class="table table-bordered table-hover table-responsive">
   <tr>
		<th class="danger">No</th>
		<th class="danger">Customer Name</th>
		<th class="danger">Address</th>
		<th class="danger">Phone Number</th>
		<th class="danger">Movie Name</th>
		<th class="danger">Date Rented</th>
		<th class="danger">Return Date</th>
	</tr>

	<?php
	$query = "select * from customer_info where customer_status = 1";
	$stmt = $pdo->prepare($query);
	if($stmt->execute()){
		$customers = $stmt->fetchAll();
		$count = 1;
		foreach($customers as $customer){
	?>
  <tr>
  <tr>
<tr>
		<td class="info"> <?php echo $count++; ?></td>
		<td class="info"> <?php echo $customer['customer_name']; ?> </td>
		<td class="info"> <?php echo $customer['customer_address']; ?> </td>
		<td class="info"> <?php echo $customer['customer_phone']; ?> </td>
		<td class="info"> <?php echo $customer['movie_name']; ?> </td>
		<td class="info"> <?php echo $customer['date_rented']; ?> </td>
		<td class="info"> <?php echo $customer['return_date']; ?> </td>
  </tr>
	<?php
			}

		} else {
			echo $stmt->errorInfo();
		}

	}
	 ?>
</table>
</div>

<!--End of student Accept -->
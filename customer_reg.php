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
    <title>MOVIES ZONE | Index</title>
</head>
<body>
    <div class="container">
        <?php include("includes/nav.php") ?>
    </div>
    <div class="container push-down">
       <div class="well top-header"> <h1 class="text-center">WELCOME TO MOVIE RENTAL CLUB SYSTEM</h1></div>
       <div class="row">
           <div class="col-md-7 col-sm-12">
                 <form id="customer_reg_form">
                    <h3>Enter the customer information</h3>
                    <div class="form-group">
                        <label for="firstName" class="col-sm-2 control-label">Frist Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="customer_name" name="customer_name" placeholder="Customer Name">
                        </div>
                    </div> 
                    <hr><br>
                    <div class="form-group">
                        <label for="customer_phone" class="col-sm-2 control-label">Customer's Tel. No:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="customer_phone" name="customer_phone" placeholder="Customers Phone Number">
                        </div>
                    </div><hr><br>
                    <div class="form-group">
                        <label for="movie_name" class="col-sm-2 control-label">Movie Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="movie_name" name="movie_name" placeholder="Movie Name">
                        </div>
                    </div> 
                    <hr><br>

                    <div class="form-group">
                        <label for="date_rented" class="col-sm-2 control-label">Date Collected:</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="date_rented" maxlength="255" name="date_rented" type="text"  placeholder = "Date Collected"  style="cursor: crosshair"  required>
                        </div>
                    </div><hr><br>

                     <div class="form-group">
                        <label for="date_rented" class="col-sm-2 control-label">Date to be Returned:</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="return_date"  onfocus="giveDate()" maxlength="255" name="return_date" type="text"  placeholder = "Date to be returned" readonly required>
                        </div>
                    </div><hr><br>

                    <div class="form-group">
                        <label for="customer_address" class="col-sm-2 control-label">Customer Address</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" rows="1" name="customer_address" id="customer_address"></textarea>
                        </div>
                    </div><hr><br>
                    <div id="responseText" class="warning">
                    </div><!--end of alert box-->
                    <button type="submit" class="btn btn-block btn-primary" style="margin-top: 5px;"> Add Customer Record </button> <br>
                   
                </form>
           </div><!--end of col-md-7-->
           <div class="col-md-5 col-sm-12">
                <div class="col-sm-12 col-md-12">
                    <div class="thumbnail">
                        <img src="images/phone-swap.jpg" alt="No image found">
                        <div class="caption">
                        </div>
                    </div><!--END OF THUMBNAIL-->
                </div><!--end of col-md-4-->
           </div>
       </div>
    </div>
    <script src="Script/jquery-3.1.1.js"></script>
    <script src="Script/bootstrap.min.js"></script>
    <script src="Script/moment.js"></script>
    <script src="Script/main.js"></script>
    <script src="Script/dateFunc.js"></script>
    <script src="Script/effect.js"></script>
    <script type="text/javascript" src="Script/bootstrap-datepicker.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
       
         $('#date_rented').datepicker({
          format: "yyyy-mm-dd"
        });
      });

     
	</script>
   

   
</body>
</html>
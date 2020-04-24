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
    <<div class="container push-down">
       <div class="well top-header"> <h1 class="text-center">WELCOME TO MOVIE RENTAL CLUB SYSTEM</h1></div>
       <div class="row">
           <div class="col-md-7 col-sm-12">
                 <form id="login_form">
                    <h3>Enter your login details</h3>
                    <div class="form-group">
                        <label for="firstName" class="col-sm-2 control-label">Username </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="username" name="username" placeholder="username">
                        </div>
                    </div>
                    <hr><br>
                    <div class="form-group">
                        <label for="password" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" name="password" placeholder="password">
                        </div>
                    </div>
                    <hr><br>

                    <div id="responseText" class="warning">
                    </div><!--end of alert box-->
                    <button type="submit" class="btn btn-block btn-primary" style="margin-top: 5px;"> Login</button> <br>

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

    <?php include "includes/footer.php"?>
    <script src="Script/jquery-3.1.1.js"></script>
    <script src="Script/main.js"></script>
    <script src="Script/effect.js"></script>
    <script type="text/javascript" src="Script/bootstrap-datepicker.js"></script>

</body>
</html>

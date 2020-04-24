<div class="container-fluid">
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">MOVIE RENTAL</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <?php if(isset($_SESSION['user_info'])):?>
            <li><a href="view_customers.php">Home</a></li>
            <li><a href="customer_reg.php">Add Record</a></li>
            <li><a href="view_customers.php">View Customers</a></li>
            <li><a href="signout.php">Sign Out</a></li>
            <?php else:?>
            <li><a href="index.php">Home</a></li>
            <li><a href="login.php">login</a></li>
            <?php endif; ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>


</div>

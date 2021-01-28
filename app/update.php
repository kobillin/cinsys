<!DOCTYPE html>
<?php
require '../config/config.php';
if(empty($_SESSION['username']))
	header('Location: login.php');	
?>
<?php include '../include/header.php';?>
	<!-- Header nav -->	
	<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#212529;" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="../index.php">Home</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#"><?php echo $_SESSION['fullname']; ?> <?php if($_SESSION['role'] == 'admin'){ echo "(Admin)"; } ?></a>
            </li>
            <li class="nav-item">
              <a href="../auth/logout.php" class="nav-link">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	<!-- end header nav -->
<?php include '../include/side-nav.php';?>
<section class="wrapper" style="margin-left: 16%;margin-top: -11%;">
	<!-- Nav tabs -->
	<ul class="nav nav-tabs" role="tablist">
	  <li class="nav-item">
	    <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Add Item</a>
	  </li>
	  <!-- <li class="nav-item">
	    <a class="nav-link" data-toggle="tab" href="inventories" role="tab">Inventory</a>
	  </li> -->
	</ul>
	<div class="tab-content">
	<!-- inventories -->
	  <div class="tab-pane active embed-responsive" id="home" role="tabpanel"><br>
	  	<?php include 'partials/editinvent.php';?>
	  </div>
	</div>	
</section>
<?php include '../include/footer.php';?>
<body>
	
</body>
</html>
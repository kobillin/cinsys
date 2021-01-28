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
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
			<?php 
               if (isset($_GET['id'])) {
               	$get_id =$_GET['id'];


               	$get_post ="select *from registrations_invent where id='$get_id'";
               	$run_post =mysqli_query($con, $get_post);
               	$row = mysqli_fetch_array($run_post);

               	$post_con = $row['decsription'];
               }
			 ?>
			 <form action="" method="post" id="f">
			 	<center><h2>Edit Inventory here:</h2></center><br>
			 	<textarea class="form-control" cols="83" rows="4" name="content"><?php echo $post_con; ?></textarea><br>
			 	<input type="submit" name="update" value="Update Inventory" class="btn btn-info"/>
			 </form>
			 <?php 



             if (isset($_POST['update'])) {


              } 
			  ?>
		</div>

		<div class="col-sm-3"></div>
	</div>
	</div>	
</section>
<?php include '../include/footer.php';?>
<body>
	
</body>
</html>
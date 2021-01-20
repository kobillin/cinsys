<?php
	if(empty($_SESSION['role']))
		header('Location: login.php');

?>
<!-- <section> --><br>
	<nav class="navbar navbar-expand-sm navbar-default sidebar" style="background-color:#212529;" id="mainNav">
      <div class="container">
      	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive1" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Side Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive1">
          <ul class="navbar-nav text-center" style="    flex-direction: column;">      
            <li class="nav-item">
              <a class="nav-link" href="../auth/dashboard.php">Home</a>
            </li>
            <li class="nav-item">
            	<?php if($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'user'){ 
	        		echo '<a href="../app/register.php" class="nav-link">Add Inventory</a>';
	      	 	} ?>             
            </li>
            <li class="nav-item">
            	<?php if($_SESSION['role'] == 'admin'){ 
	        		echo '<a href="../app/addusers.php" class="nav-link">Add Users</a>';
	      	 	} ?>             
            </li>
            <li class="nav-item">
            	<?php if($_SESSION['role'] == 'admin'){ 
	        		echo '<a href="../app/inventories.php" class="nav-link">Inventories</a>';
	      	 	} ?>             
            </li>
            <li class="nav-item">
	        	<a href="#" class="nav-link">..</a>
            </li>
            <li class="nav-item">
	        	<a href="#" class="nav-link">..</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<!-- </section> -->
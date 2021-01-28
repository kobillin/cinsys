<?php 
               if (isset($_GET['id'])) {
               	$get_id =$_GET['id'];


               	$get_post ="select *from registrations_invent where id='$get_id'";
               	$run_post =mysqli_query($con, $get_post);
               	$row = mysqli_fetch_array($run_post);

               	$errMsg = '';
			// Get data from FROM
			$description = $_POST['description'];
			$brand = $_POST['brand'];
			$model = $_POST['model'];
			$serial_no = $_POST['serial_no'];
			$location = $_POST['location'];
			$department = $_POST['department'];
			$assigned_to = $_POST['assigned_to'];
			$status = $_POST['status'];
               }
			 ?>
<!-- <div class="row"> -->			
<div class="col-md-11 col-xs-12 col-sm-12">
  	<div class="alert alert-info" role="alert">
  		<?php
			if(isset($errMsg)){
				echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
			}
		?>
  		<h2 class="text-center">Edit Item</h2>
  		<form action="" method="post" enctype="multipart/form-data">
		  	 <div class="row">
		  	 	<div class="col-md-4">
			  	  <div class="form-group">
				    <label for="description">Description</label>
				    <input type="text" class="form-control" id="description" placeholder=" description" name="description" <?php echo $description; ?> required>
				  </div>
				 </div>

				<div class="col-md-4">
				  <div class="form-group">
				    <label for="brand">Brand</label>
				    <input type="text" class="form-control" id="brand" title="brand" placeholder="brand" name="brand" <?php echo $brand; ?> required>
				  </div>
				 </div>

				<div class="col-md-4">
				  <div class="form-group">
				    <label for="model">Model</label>
				    <input type="text" class="form-control" id="model" title="model" placeholder="model" name="model" <?php echo $model; ?>>
				  </div>
				</div>
			</div>

			<div class="row">
		  	 	<div class="col-md-4">
				  <div class="form-group">
				    <label for="serial_no">Serial Number</label>
				    <input type="serial_no" class="form-control" id="serial_no" placeholder="serial number" name="serial_no" <?php echo $serial_no; ?> required>
				  </div>
				 </div>

				 <div class="col-md-4">
				  <div class="form-group">
				    <label for="location">Location</label>
					<select type="text" class="form-control" id="location" name="location" required>
                    
                          <option value="$location"><?php echo $location; ?></option>  
					      <option value="PSM">PSM</option>
					      <option value="FINANCE">FINANCE</option>
						  <option value="TOURISM">TOURISM</option>
						  <option value="LANDS">LANDS</option>
						  <option value="WATER">WATER</option>
						  <option value="AGRICULTURE">AGRICULTURE</option>
					    </select>
				  </div>
				 </div>

				 <div class="col-md-4">
				  <div class="form-group">
				    <label for="department">Department</label>
				    <input type="text" class="form-control" id="department" placeholder="department" name="department" <?php echo $department; ?> required>
				  </div>
				 </div>
			</div>

			<div class="row">
				<div class="col-md-4">
			  		<div class="form-group">
			    	<label for="assigned_to">Assigned To</label>
			    	<input type="assigned_to" class="form-control" id="assigned_to" placeholder="assigned to" name="assigned_to" <?php echo $assigned_to; ?> required>
			  		</div>

					 <div class="form-group">
					    <label for="status">Condition</label>
					    <select type="text" class="form-control" id="status" name="status" required>
                        <option value="$status"><?php echo $status; ?></option>
					      <option value="Working">Working</option>
					      <option value="Not Working">Not Working</option>
					    </select>
					  </div> 
			  	</div>
			 		 
			</div>
			  </div>			
			  <input type="submit" name="update" value="Update Post" class="btn btn-info"/>
			</form>	
            <?php 



             if (isset($_POST['update'])) {
                $description = $_POST['description'];
                $brand = $_POST['brand'];
                $model = $_POST['model'];
                $serial_no = $_POST['serial_no'];
                $location = $_POST['location'];
                $department = $_POST['department'];
                $assigned_to = $_POST['assigned_to'];
                $status = $_POST['status'];

                $update_post ="update posts set post_content='$content' where post_id='$get_id'";
                $run_update = mysqli_query($con, $update_post);

                if ($run_update) {
                	echo "<script>alert('A post has been updated')</script>";
    				echo "<script>window.open('home.php', '_self')</script>";
                }
              } 
			  ?>
			</div>			
  	</div>
<!-- </div> -->
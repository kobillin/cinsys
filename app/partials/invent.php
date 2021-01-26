<!-- <div class="row"> -->			
<div class="col-md-11 col-xs-12 col-sm-12">
  	<div class="alert alert-info" role="alert">
  		<?php
			if(isset($errMsg)){
				echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
			}
		?>
  		<h2 class="text-center">Add Item</h2>
  		<form action="" method="post" enctype="multipart/form-data">
		  	 <div class="row">
		  	 	<div class="col-md-4">
			  	  <div class="form-group">
				    <label for="description">Description</label>
				    <input type="text" class="form-control" id="description" placeholder=" description" name="description" required>
				  </div>
				 </div>

				<div class="col-md-4">
				  <div class="form-group">
				    <label for="brand">Brand</label>
				    <input type="text" class="form-control" id="brand" title="brand" placeholder="brand" name="brand" required>
				  </div>
				 </div>

				<div class="col-md-4">
				  <div class="form-group">
				    <label for="model">Model</label>
				    <input type="text" class="form-control" id="model" title="model" placeholder="model" name="model">
				  </div>
				</div>
			</div>

			<div class="row">
		  	 	<div class="col-md-4">
				  <div class="form-group">
				    <label for="serial_no">Serial Number</label>
				    <input type="serial_no" class="form-control" id="serial_no" placeholder="serial number" name="serial_no" required>
				  </div>
				 </div>

				 <div class="col-md-4">
				  <div class="form-group">
				    <label for="location">Location</label>
					<select type="text" class="form-control" id="location" name="location" required>
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
				    <input type="text" class="form-control" id="department" placeholder="department" name="department" required>
				  </div>
				 </div>
			</div>

			<div class="row">
				<div class="col-md-4">
			  		<div class="form-group">
			    	<label for="assigned_to">Assigned To</label>
			    	<input type="assigned_to" class="form-control" id="assigned_to" placeholder="assigned to" name="assigned_to" required>
			  		</div>
			  	</div>
			 		 <div class="form-group">
					    <label for="status">Condition</label>
					    <select type="text" class="form-control" id="status" name="status" required>
					      <option value="Working">Working</option>
					      <option value="Not Working">Not Working</option>
					    </select>
					  </div>
			</div>
			  </div>			
			  <button type="submit" class="btn btn-primary" name='register_invent' value="register_invent">Submit</button>
			</form>	
			</div>			
  	</div>
<!-- </div> -->
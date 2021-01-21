<!-- <div class="row"> -->			
<div class="col-md-11 col-xs-12 col-sm-12">
  	<div class="alert alert-info" role="alert">
  		<?php
			if(isset($errMsg)){
				echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
			}
		?>
  		<h2 class="text-center">Add User</h2>
  		<form action="" method="post" enctype="multipart/form-data">
		  	 <div class="row">
		  	 	<div class="col-md-4">
			  	  <div class="form-group">
				    <label for="fullname">Full Name</label>
					<input type="text" class="form-control" id="fullname" placeholder="Full Name" name="fullname" required>
				  </div>
				 </div>

				<div class="col-md-4">
				  <div class="form-group">
				  <label for="username">User Name</label>
				  <input type="text" class="form-control" id="username" placeholder="User Name" name="username" required>
				  </div>
				 </div>

				<div class="col-md-4">
				  <div class="form-group">
				  <label for="mobile">Mobile</label>
				  <input type="text" class="form-control" pattern="^(\d{10})$" id="mobile" title="10 digit mobile number" placeholder="10 digit mobile number" name="mobile" required>
				  </div>
				</div>
			</div>

			<div class="row">
		  	 	<div class="col-md-4">
				  <div class="form-group">
				  <label for="email">Email</label>
				  <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
				  </div>
				 </div>

				 <div class="col-md-4">
				  <div class="form-group">
				  <label for="password">Password</label>
				  <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
				  </div>
				 </div>

				 <div class="col-md-4">
				  <div class="form-group">
				  <label for="c_password">Confirm Password</label>
				  <input type="password" class="form-control" id="c_password" placeholder="Confirm Password" name="c_password" required>
				  </div>
				 </div>
			</div>
			 <!-- <div class="col-md-4">
			  <div class="form-group">
			    <label for="description">Image</label>
			    <input type="file" name="image" id="image">
			  </div>
			  </div> -->
			  </div>			
			  <button type="submit" class="btn btn-primary" name='register_user' value="register_user">Add</button>
			</form>	
			</div>			
  	</div>
<!-- </div> -->
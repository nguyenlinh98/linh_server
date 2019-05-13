<?php
include("Views/admin/layouts/header.php");
?>
	<!-- contend -->
	<div class="container_form">
		<div class="row">
			<div class="col-sm-10">
				<h1 style=" font-size: 50px;">From Add</h1>
				<form action="?mod=doctor&&act=add" method="post" accept-charset="utf-8">
				    <div class="row">
				    	<div class="col-sm-6">
				    		<label>Name*:</label>
							<input type="text" name="name" class="form-control" placeholder="Enter firt name">
							<label>Email:</label>
							<input type="text" name="email" class="form-control" placeholder="address Email...">
							<label>Password*:</label>
							<input type="text" name="password" class="form-control" placeholder="Password">
							<label>Confirm Password *:</label>
							<input type="text" name="password" class="form-control" placeholder="Confirm password">
							<label>Date Of Birth *:</label>
							<input type="date" name="date" class="form-control">
							<label>Profile Picture:</label>
							<input type="file" name="doctor_image">
				    	</div>
				    	<div class="col-sm-6">
							<label>Gender*:</label>
							<select name="gender" class="form-control">
								<option value="0">Male</option>
								<option value="1">Female</option>
							</select>
							<label >Departments *:</label>
							<select name="department" id="department" class="form-control
							">
							<?php
							 foreach ($department as $department) {
							?>
							<option value="<?php echo $department['id'];?>"><?php echo $department['name']; ?></option>
							<?php
							 }
							?>
							</select>
							<label>Mobile No.*:</label>
							<input type="text" name="phone" class="form-control" placeholder="Phone number">
							<label>Address*:</label>
							<input type="text" name="address" class="form-control" placeholder="Address">
							<label>degree:</label>
							<textarea name="degree" class="form-control" cols="5" placeholder="Degree"></textarea>
				    	</div>
				    	<div class="col-md-12">
				    		<label>description:</label>
							<textarea name="description" class="form-control" cols="5" placeholder="Description"></textarea>
							<input type="submit" name="btn_submit" value="add doctor" class="btn-primary">
							<input type="submit" name="btn_reset" value="cancel" class="btn-default">
				    	</div>
				</form>
			</div>
		</div>
	</div>
<?php
include("Views/admin/layouts/footer.php");
?>

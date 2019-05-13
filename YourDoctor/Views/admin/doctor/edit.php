<?php
include("Views/admin/layouts/header.php");
?>
    <style type="text/css" media="screen">
    	ul{
    		list-style-type: none;
    	}
    	h1{
    		font-family: inherit;
    		color: cadetblue;
    		text-align:all;
    	}
    	.cotend{
    		align:center;
    	}
    </style>
</head>
<body>
	<div class="container_form">
		<div class="tittle_box"><h1>EDIT FROM</h1></div>
		<div class="row">
			<div class="col-sm-10">
				<form action="add_doctor_submit" method="get" accept-charset="utf-8">
				    <div class="row">
				    	<div class="col-sm-6">
				    		<label>First name*:</label>
							<input type="text" name="doctor_name" class="form-control" placeholder="Enter firt name">
							<label>Email:</label>
							<input type="text" name="Email" class="form-control" placeholder="address Email...">
							<label>Confirm Password *:</label>
							<input type="text" name="pass" class="form-control" placeholder="Confirm password">
							<label>Gender*:</label>
							<select name="gender" class="form-control">
								<option value="0">male</option>
								<option value="1">female</option>
							</select><label>Date Of Birth *:</label>
							<input type="date" name="date" class="form-control">
							<label>Profile Picture:</label>
							<input type="file" name="doctor_image">
				    	</div>
				    	<div class="col-sm-6">
				    		<label>Last name*:</label>
							<input type="text" name="doctor_name" class="form-control" placeholder="Enter last name">
							<label>Password*:</label>
							<input type="text" name="pass" class="form-control" placeholder="Password">
							<label>Departments *:</label>
							<input type="text" name="Departments" class="form-control">
							<label>Mobile No.*:</label>
							<input type="text" name="doctor_name" class="form-control" placeholder="Phone number">
							<label>Address*:</label>
							<input type="text" name="address" class="form-control" placeholder="Address">
				    	</div>
				    </div>
					<label>Education:</label>
					<textarea name="doctor_derc" class="form-control" cols="5" placeholder="Education"></textarea>
					<br>
					<!-- buttion -->
					<div class="btn_form">
		             <button type="button" class=" btn btn-primary">Update</button>
		             <button type="button" class=" btn btn-warning">Resert</button>
		           </div>
					<br>
				</form>
			</div>
		</div>
	</div>
<?php
include("Views/admin/layouts/footer.php");
?>
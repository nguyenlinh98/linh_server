<?php
include("Views/admin/layouts/header.php");
?>
			<div class="row ">
				<div class="col-sm-4">
					<section class="contend-header">
						<div class="row">
							<div class="col-sm-3">
								<div class="header_icon">
									<i class="fa fa-clipboard-list"></i>
								</div>
							</div>
							<div class="col-sm-9">
								<div class="tittle_header">
									 <h1>Calendar</h1>
									 <small>calendar list</small>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
			<div class="row">
				<div class="form-calendar">
					<div class="panel-body">
						<div class="row">
							<div class="col-sm-6">
								<div class="add_form">
									<a type="button" class="btn btn-primary"><i class="fa fa-calendar"></i> Add Calendar
									</a>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form_search">
							      <form class="navbar-form navbar-right" action="index.html" method="post">
							        <div class="form_search">
							         search: <input type="text" name="name_search" value="" class="form-control">
							          <button type="submit" name="button" class="btn btn-default">
							             <i class="fa fa-search"></i>
							          </button>
							        </div>
							      </form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
						<div class="form-calendar">
	  						<table class="table table-bordered">
						 	     <thead>
						 		    <tr>
						 			    <th>Serial No</th>
	                    				<th>Appionment id</th>
										<th>Doctor</th>
										<th>Department</th>
										<th>Appionment day</th>
										<th>Patient id</th>
	                  				    <th>problem</th>
										<th>status</th>
										<th>active</th>
						 		    </tr>
						 	     </thead>
						 	     <tbody>
						 		    <tr>
						 			    <td>1</td>
	                    				<td>cd1</td>
									    <td>Nguyen Khan An</td>
									    <td>khoa mat</td>
										<td>22/05/2019</td>
	                   				    <td>pa1</td>
										<td>heathy problem</td>
										<td>
										<span class="label-success label laebel-default">active</span>
										</td>
										<td>
					                      <a href="Views/manager/department/edit.php" class="btn btn-primary ">
					                        <i class="fa fa-wrench "></i>
					                      </a>
					                      <a href="#" class="delete btn btn-danger ">
					                        <i class="fa fa-trash"></i>
					                      </a>
					                    </td>
									</tr>
	                                <tr>
						 			    <td>1</td>
	                                    <td>cd1</td>
										<td>Nguyen Khan An</td>
										<td>khoa mat</td>
										<td>22/05/2019</td>	
	                  				    <td>pa1</td>
										<td>heathy problem</td>
										<td>
										<span class="label-success label laebel-default">active</span>
										</td>
										<td>
											<a href="edit.php" class="btn btn-primary "><i class="fa fa-wrench"></i></a>
											<a href="#"class=" btn btn-danger"><i class="fa fa-trash"></i></a>
										</td>
						 		    </tr>
	                			    <tr>
						 			    <td>1</td>
	                   				    <td>cd1</td>
										<td>Nguyen Khan An</td>
										<td>khoa mat</td>
									    <td>22/05/2019</td>
	                                    <td>pa1</td>
										<td>heathy problem</td>
										<td><span class="label-danger label laebel-default">Inactive</span></td>
										<td>
											<a href="edit.php" class="btn btn-primary ">
												<i class="fa fa-wrench"></i>
											</a>
			                                <a href="#" class="btn btn-danger" class="delete"><i class="fa fa-trash"></i></a>
			                            </td>
						 		    </tr>
                  				<tr>
					 			    <td>1</td>
                    				<td>cd1</td>
									<td>Nguyen Khan An</td>
									<td>khoa mat</td>
									<td>22/05/2019</td>
                    				<td>pa1</td>
									<td>heathy problem</td>
									<td><span class="label-danger label laebel-default">Inactive</span></td>
									<td>
										<a href="edit.php" class="btn btn-primary ">
											<i class="fa fa-wrench"></i>
										</a>
			                            <a href="#" class="btn btn-danger" class="delete">
			                            	<i class="fa fa-trash"></i></a>
			                            </td>
					 		    </tr>
                  				<tr>
					 			    <td>1</td>
                    				<td>cd1</td>
									<td>Nguyen Khan An</td>
									<td>khoa mat</td>
									<td>22/05/2019</td>
                  				    <td>pa1</td>
									<td>heathy problem</td>
									<td>
										<span class="label-success label laebel-default">active</span>
									</td>
									<td>
										<a href="edit.php" class="btn btn-primary ">
											<i class="fa fa-wrench"></i>
										</a>
			                             <a href="#" class="btn btn-danger" class="delete"><i class="fa fa-trash"></i>
			                             </a>
			                            </td>
					 		    </tr>
                  				<tr>
					 			    <td>1</td>
                   					<td>cd1</td>
									<td>Nguyen Khan An</td>
									<td>khoa mat</td>
									<td>22/05/2019</td>
                   					<td>pa1</td>
									<td>heathy problem</td>
									<td><span class="label-danger label laebel-default">Inactive</span></td>
									<td>
										<a href="edit.php" class="btn btn-primary"><i class="fa fa-wrench"></i></a>
		                                <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a>
		                            </td>
					 		    </tr>

					 	     </tbody>
					 </table>
	  				</div>
				</div>
			</div>
<?php
	include("Views/admin/layouts/footter.php");
?>


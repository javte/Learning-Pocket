<?php require_once('../assets/php/initialize.php'); ?>

<?php include(PHP_PATH . '/header.php'); ?>

<?php include(PHP_PATH . '/navigation.php'); ?>


    <div class="main-panel">

      <!-- Top menu -->
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Users</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               Log out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

	     <!-- Content  -->
        <div class="content">
            <div class="container-fluid">
                <div class="row"><!-- Here the row starts -->
									<div class="col-md-12">
											<div class="card">
													<div class="header">
															<h4 class="title">Users</h4>
															<p class="category">Users enrolled</p>
													</div>
													<div class="content table-responsive table-full-width">
															<table class="table table-hover table-striped">
																	<thead>
																			<th>ID</th>
																		<th>Name</th>
																		<th>Username</th>
																		<th>City</th>
																	</thead>
																	<tbody>
																			<tr>
																				<td>1</td>
																				<td>Dakota Rice</td>
																				<td>Username1</td>
																				<td>Oud-Turnhout</td>
																			</tr>
																			<tr>
																				<td>2</td>
																				<td>Minerva Hooper</td>
																				<td>Username2</td>
																				<td>Sinaai-Waas</td>
																			</tr>
																			<tr>
																				<td>3</td>
																				<td>Sage Rodriguez</td>
																				<td>Username3</td>
																				<td>Baileux</td>
																			</tr>
																			<tr>
																				<td>4</td>
																				<td>Philip Chaney</td>
																				<td>Username4</td>
																				<td>Overland Park</td>
																			</tr>
																			<tr>
																				<td>5</td>
																				<td>Doris Greene</td>
																				<td>Username5</td>
																				<td>Feldkirchen in Kärnten</td>
																			</tr>
																			<tr>
																				<td>6</td>
																				<td>Mason Porter</td>
																				<td>Username6</td>
																				<td>Gloucester</td>
																			</tr>
																	</tbody>
															</table>

													</div>
											</div>
									</div><!-- The table ends here -->

                </div><!--  The row ends here -->

								<div class="row"><!--  The "Add user" row starts here -->
										<div class="col-md-8">
												<div class="card">
														<div class="header">
																<h4 class="title">Add new user</h4>
														</div>
														<div class="content">
																<form>
																		<div class="row">
																				<div class="col-md-3">
																						<div class="form-group">
																								<label>Username</label>
																								<input type="text" class="form-control" placeholder="Username">
																						</div>
																				</div>
																				<div class="col-md-4">
																						<div class="form-group">
																								<label for="exampleInputEmail1">Email address</label>
																								<input type="email" class="form-control" placeholder="Email">
																						</div>
																				</div>
																				<div class="col-md-5">
																						<div class="form-group">
																								<label for="exampleInputEmail1">Phone number</label>
																								<input type="email" class="form-control" placeholder="Phone number">
																						</div>
																				</div>
																		</div>

																		<div class="row">
																				<div class="col-md-6">
																						<div class="form-group">
																								<label>First Name</label>
																								<input type="text" class="form-control" placeholder="Company">
																						</div>
																				</div>
																				<div class="col-md-6">
																						<div class="form-group">
																								<label>Last Name</label>
																								<input type="text" class="form-control" placeholder="Last Name">
																						</div>
																				</div>
																		</div>

																		<div class="row">
																				<div class="col-md-12">
																						<div class="form-group">
																								<label>Address</label>
																								<input type="text" class="form-control" placeholder="Address">
																						</div>
																				</div>
																		</div>

																		<div class="row">
																				<div class="col-md-4">
																						<div class="form-group">
																								<label>City</label>
																								<input type="text" class="form-control" placeholder="City">
																						</div>
																				</div>
																		</div>

																		<button type="submit" class="btn btn-info btn-fill pull-right">Add user</button>
																		<div class="clearfix"></div>
																</form>
														</div>
												</div>

            </div><!-- The row ends here -->
        </div>
    </div>
  </div>

  <?php include(PHP_PATH . '/footer.php'); ?>
  
  </div>
</body>

<?php include(PHP_PATH . '/footerfiles.php'); ?>

</html>

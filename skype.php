<div class="container">
			<div class="row">
				<div class="col-sm-12">

					<div id="loginmodal" data-keyboard="false" data-backdrop="static" class="modal fade" tabindex="-1">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title" style="text-align: center;font-family: 'Vollkorn SC', serif; font-size: 30px;">Registration Form</h4>
								</div>
								<div class="modal-body">
									<form class="my-form" data-toggle="validator" action="ent.php" method="post" role="form">
										<div class="form-group">
											<label class="control-label" for="inputName">Name :</label>
											<input type="text" class="form-control" minlength="5" data-error="Please enter Full name with minimum lenth of 5" placeholder="Enter name" name="name" required>
											<div class="help-block with-errors"></div>
										</div>
										<div class="form-group">
											<label class="control-label" for="inputFather's Name">Father's Name :</label>
											<input type="text" class="form-control" minlength="5" data-error="Please enter Full name with minimum lenth of 5" placeholder="Enter Father's name" name="fathername" required>
											<div class="help-block with-errors"></div>
										</div>
										<div class="form-group">
											<label class="control-label" for="inputMother's Name">Mother's Name :</label>
											<input type="text" class="form-control" minlength="5" data-error="Please enter Full name with minimum lenth of 5" placeholder="Enter Mother's name" name="mothername" required>
											<div class="help-block with-errors"></div>
										</div>
										<div class="form-group">
											<label class="control-label" for="inputDate of Birth">Date of Birth :</label>

											<input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" required type="text"/>
											<div class="help-block with-errors"></div>
										</div>

										<div class="form-group">
											<label class="control-label" for="inputEmail">Email :</label>
											<input type="email" class="form-control" data-error="Invalid Email" placeholder="Enter Email" name="email" required>
											<div class="help-block with-errors"></div>
										</div>

										<div class="form-group">
											<label class="control-label">Gender :</label>
											<label class="radio-inline" style="margin-left: 10px;"><input type="radio" name="radio" required>Male</label>
											<label class="radio-inline"><input type="radio" name="radio" required>Female</label>
										</div>

										<div class="form-group">
											<label for="sel1" class="control-label">Class :</label>
											<select class="form-control" id="sel1" name="class" required>
												<option>-select-</option>
												<option>9th</option>
												<option>10th</option>
												<option>11th</option>
												<option>12th</option>
											</select>
										</div>
										<div class="form-group">
											<label for="sel1" class="control-label">Course :</label>
											<select class="form-control" id="sel1" name="course" required>
												<option>-select-</option>
												<option>Physics</option>
												<option>Chemistry</option>
												<option>Mathematics</option>
												<option>Computers</option>
											</select>
										</div>
										<div class="form-group">
											<label class="control-label">City :</label>
											<input type="text" class="form-control" placeholder="Enter City" name="city" required>
											<div class="help-block with-errors"></div>
										</div>
										<div class="form-group">
											<label class="control-label">Contact number :</label>
											<input type="number" class="form-control" minlength="10" maxlength="10" placeholder="Enter Contact Number" name="contact" required>
											<div class="help-block with-errors"></div>
										</div>
										<div class="form-group">
											<label class="control-label">Address :</label>
											<textarea class="form-control" placeholder="Enter Address" name="address" rows="4" required></textarea>
											<div class="help-block with-errors"></div>
										</div>


								</div>
								<div class="modal-footer">
									<button class="btn btn-primary" type="submit">Submit</button>
									<button class="btn btn-primary" data-dismiss="modal">Close</button>
								</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
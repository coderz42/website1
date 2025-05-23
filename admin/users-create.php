<?php include('includes/header.php'); ?>

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h4>
					Add Student
					<a href="users.php" class="btn btn-danger float-end">Back</a>
				</h4>
			</div>
			<div class="card-body">
				
				<?= alertMessage(); ?>

				<form action="code.php" method="POST">
					<div class="row">
						<div class="col-md-6">
							<div class="mb-3">
							<label for="name">Name: </label>
							<input type="text" name="name" id="name" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label for="nrp">NRP: </label>
								<input type="text" name="nrp" id="nrp" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label for="email">Email: </label>
								<input type="text" name="email" id="email" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label for="field_of_study">Field of Study: </label>
								<input type="text" name="field_of_study" id="field_of_study" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label for="address">Address: </label>
								<input type="text" name="address" id="address" class="form-control">
							</div>
						</div>
						<div class="col-md-3">
                            <div class="mb-3">
                                <label for="gender" class="form-label">Gender: </label>
        
                                <!-- Male option -->
                                <div class="form-check">
                                    <input type="radio" name="gender" value="male" id="genderMale" class="form-check-input">
                                    <label for="genderMale" class="form-check-label">Male</label>
                                </div>
        
                                <!-- Female option -->
                                <div class="form-check">
                                    <input type="radio" name="gender" value="female" id="genderFemale" class="form-check-input">
                                    <label for="genderFemale" class="form-check-label">Female</label>
                                </div>
                            </div>
                        </div>
						<div class="col-md-6">
							<div class="mb-3 text-end">
								<br/>
							<button type="submit" name="saveUser" class="btn btn-primary">Save</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php include('includes/footer.php'); ?>

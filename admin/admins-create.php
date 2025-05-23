<?php include('includes/header.php'); ?>

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h4>
					Add Admin
					<a href="admins.php" class="btn btn-danger float-end">Back</a>
				</h4>
			</div>
			<div class="card-body">
				
				<?= alertMessage(); ?>

				<form action="code.php" method="POST">
					<div class="row">
						<div class="col-md-6">
							<div class="mb-3">
							<label for="username">Name: </label>
							<input type="text" name="username" id="username" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label for="NIM">NIM: </label>
								<input type="text" name="NIM" id="NIM" class="form-control">
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
								<label for="password">Password: </label>
								<input type="password" name="password" id="password" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label for="password2">Confirm Password: </label>
								<input type="password" name="password2" id="password2" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3 text-end">
								<br/>
							<button type="submit" name="saveAdmin" class="btn btn-primary">Save</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php include('includes/footer.php'); ?>

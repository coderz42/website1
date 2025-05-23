<?php include('includes/header.php') ?>

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h4>
					Edit Student
					<a href="users.php" class="btn btn-danger float-end">Back</a>
				</h4>
			</div>
			<div class="card-body">

				<?= alertMessage(); ?>
				
				<form action="code.php" method="POST">

					<?php
						$paramResult = checkParamId('id');
						if(!is_numeric($paramResult)){
							echo '<h5>'.$paramResult.'</h5>';
							return false;
						}

						$user = getById('users', checkParamId('id'));
						if($user['status'] == 200){
		
							?>

							<input type="hidden" name="userId" value="<?= $user['data']['id']; ?>" required >

								<div class="row">
									<div class="col-md-6">
										<div class="mb-3">
										<label for="name">Name: </label>
										<input type="text" name="name" value="<?= $user['data']['name']; ?>" id="name" required class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label for="nrp">NRP: </label>
											<input type="text" name="nrp" value="<?= $user['data']['nrp']; ?>" id="nrp" required class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label for="email">Email: </label>
											<input type="text" name="email" value="<?= $user['data']['email']; ?>" id="email" required class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label for="field_of_study">Field of Study: </label>
											<input type="text" name="field_of_study" value="<?= $user['data']['field_of_study']; ?>" id="field_of_study" required class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label for="address">Address: </label>
											<input type="text" name="address" value="<?= $user['data']['address']; ?>" id="address" required class="form-control">
										</div>
									</div>
									<div class="col-md-3">
									    <div class="mb-3">
									        <label for="gender" class="form-label">Gender: </label>

									        <!-- Male option -->
									        <div class="form-check">
    									        <input type="radio" name="gender" value="male" 
    									            <?= $user['data']['gender'] == 'male' ? 'checked' : ''; ?> id="genderMale" class="form-check-input">
    									        <label for="genderMale" class="form-check-label">Male</label>
    									    </div>

    									    <!-- Female option -->
    									    <div class="form-check">
    									        <input type="radio" name="gender" value="female" 
    									            <?= $user['data']['gender'] == 'female' ? 'checked' : ''; ?> id="genderFemale" class="form-check-input">
    									        <label for="genderFemale" class="form-check-label">Female</label>
    									    </div>
    									</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3 text-end">
											<br/>
										<button type="submit" name="updateUser" class="btn btn-primary">Update</button>
										</div>
									</div>
								</div>
							<?php
		
						}else{
							echo '<h5>'.$user['message'].'</h5>';
						}
					?>
				</form>
			</div>
		</div>
	</div>
</div>

<?php include('includes/footer.php') ?>

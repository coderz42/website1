<?php include('includes/header.php'); ?>
<?php include('koneksi.php'); ?>

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h4>
					List of Students:
					<a href="users-create.php" class="btn btn-primary float-end">Add Student</a>
				</h4>
			</div>
			<div class="card-body">

				<?= alertMessage(); ?>

				<form method="POST" class="mb-3">
					<div class="input-group mb-3">
						<input type="text" name="keyword" class="form-control" placeholder="Type here..." value="<?= $_POST['keyword'] ?? '' ?>">
						<button type="submit" name="cari" class="btn btn-secondary" id="button-addon2">Search</button>
					</div>
				</form>

				<?php
				if (isset($_POST["cari"]) && !empty($_POST["keyword"])) {
					$keyword = mysqli_real_escape_string($koneksi, $_POST["keyword"]);
					$query = "SELECT * FROM users 
							  WHERE id LIKE '%$keyword%' 
							  OR name LIKE '%$keyword%' 
							  OR nrp LIKE '%$keyword%' 
							  OR email LIKE '%$keyword%' 
							  OR field_of_study LIKE '%$keyword%' 
							  OR address LIKE '%$keyword%' 
							  OR gender LIKE '%$keyword%'";
					$users = mysqli_query($koneksi, $query);
				} else {
					$users = mysqli_query($koneksi, "SELECT * FROM users");
				}
				?>
<br>
				<div class="table-responsive">
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Id</th>
								<th>Name</th>
								<th>NRP</th>
								<th>Email</th>
								<th>Field of Study</th>
								<th>Address</th>
								<th>Gender</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							if (mysqli_num_rows($users) > 0) {
								while ($userItem = mysqli_fetch_assoc($users)) {
									?>
										<tr>
											<td><?= $userItem['id']; ?></td>
											<td><?= $userItem['name']; ?></td>
											<td><?= $userItem['nrp']; ?></td>
											<td><?= $userItem['email']; ?></td>
											<td><?= $userItem['field_of_study']; ?></td>
											<td><?= $userItem['address']; ?></td>
											<td><?= $userItem['gender']; ?></td>

											<td>
												<a href="users-edit.php?id=<?= $userItem['id']; ?>" class="btn btn-success btn-sm">Edit</a>
												<a href="users-delete.php?id=<?= $userItem['id']; ?>" class="btn btn-danger btn-sm mx-2" onclick="return confirm('Are you sure you want to delete this data?')">Delete</a>
											</td>
										</tr>
									<?php
								}
							} else {
								?>
								<tr>
									<td colspan="8" class="text-center">No Record Found</td>
								</tr>
								<?php
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include('includes/footer.php'); ?>

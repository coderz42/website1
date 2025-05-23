<?php include('includes/header.php'); ?>
<?php include('koneksi.php'); ?>

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h4>
					List of Admins:
					<a href="admins-create.php" class="btn btn-primary float-end">Add Admin</a>
				</h4>
			</div>
			<div class="card-body">

				<?= alertMessage(); ?>

				<form method="POST" class="mb-3">
					<div class="input-group">
						<input type="text" name="keyword" class="form-control" placeholder="Type here..." value="<?= $_POST['keyword'] ?? '' ?>">
						<button type="submit" name="cari" class="btn btn-secondary">Search</button>
					</div>
				</form>

				<?php
				if (isset($_POST["cari"]) && !empty(trim($_POST["keyword"]))) {
					$keyword = mysqli_real_escape_string($koneksi, $_POST["keyword"]);
					$query = "SELECT * FROM admins 
							  WHERE username LIKE '%$keyword%' 
							  OR email LIKE '%$keyword%' 
							  OR NIM LIKE '%$keyword%' 
							  OR field_of_study LIKE '%$keyword%'";
					$users = mysqli_query($koneksi, $query);
				} else {
					$users = mysqli_query($koneksi, "SELECT * FROM admins");
				}
				?>
				<br>

				<div class="table-responsive">
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Id</th>
								<th>Name</th>
								<th>NIM</th>
								<th>Email</th>
								<th>Field of Study</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php if (mysqli_num_rows($users) > 0): ?>
								<?php while ($userItem = mysqli_fetch_assoc($users)): ?>
									<tr>
										<td><?= $userItem['id']; ?></td>
										<td><?= $userItem['username']; ?></td>
										<td><?= $userItem['NIM']; ?></td>
										<td><?= $userItem['email']; ?></td>
										<td><?= $userItem['field_of_study']; ?></td>
										<td>
											<a href="admins-edit.php?id=<?= $userItem['id']; ?>" class="btn btn-success btn-sm">Edit</a>
											<a href="admins-delete.php?id=<?= $userItem['id']; ?>" class="btn btn-danger btn-sm mx-2"
											   onclick="return confirm('Are you sure you want to delete this data?')">Delete</a>
										</td>
									</tr>
								<?php endwhile; ?>
							<?php else: ?>
								<tr>
									<td colspan="6" class="text-center">No Record Found</td>
								</tr>
							<?php endif; ?>
						</tbody>
					</table>
				</div>

			</div>
		</div>
	</div>
</div>

<?php include('includes/footer.php'); ?>

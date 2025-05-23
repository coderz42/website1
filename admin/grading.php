<?php include('includes/header.php'); ?>
<?php include('koneksi.php'); ?>

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h4>
					List of Student's Grade Records:
					<a href="grading-create.php" class="btn btn-primary float-end">Add Data</a>
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
				// Get data
				if (isset($_POST["cari"]) && !empty($_POST["keyword"])) {
					$keyword = mysqli_real_escape_string($koneksi, $_POST["keyword"]);
					$query = "SELECT * FROM grade 
							  WHERE student LIKE '%$keyword%' 
							  OR teacher LIKE '%$keyword%' 
							  OR grade1 LIKE '%$keyword%' 
							  OR grade2 LIKE '%$keyword%' 
							  OR grade3 LIKE '%$keyword%'";
					$users = mysqli_query($koneksi, $query);
				} else {
					$users = mysqli_query($koneksi, "SELECT * FROM grade");
				}
				?>
<br>
				<div class="table-responsive">
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Id</th>
								<th>Student</th>
								<th>Teacher</th>
								<th>Grade 1</th>
								<th>Grade 2</th>
								<th>Grade 3</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php if (mysqli_num_rows($users) > 0): ?>
								<?php while ($userItem = mysqli_fetch_assoc($users)): ?>
									<tr>
										<td><?= $userItem['id']; ?></td>
										<td><?= $userItem['student']; ?></td>
										<td><?= $userItem['teacher']; ?></td>
										<td><?= $userItem['grade1']; ?></td>
										<td><?= $userItem['grade2']; ?></td>
										<td><?= $userItem['grade3']; ?></td>
										<td>
											<a href="grading-edit.php?id=<?= $userItem['id']; ?>" class="btn btn-success btn-sm">Edit</a>
											<a href="grading-delete.php?id=<?= $userItem['id']; ?>" class="btn btn-danger btn-sm mx-2" onclick="return confirm('Are you sure you want to delete this data?')">Delete</a>
										</td>
									</tr>
								<?php endwhile; ?>
							<?php else: ?>
								<tr>
									<td colspan="7" class="text-center">No Record Found</td>
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


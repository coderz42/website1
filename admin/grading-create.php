<?php

include('includes/header.php'); 
include "koneksi.php";

?>

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h4>
					Add Data
					<a href="grading.php" class="btn btn-danger float-end">Back</a>
				</h4>
			</div>
			<div class="card-body">
				
				<?= alertMessage(); ?>

				<form action="code.php" method="POST">
					<div class="row">
						<div class="col-md-6">
							<div class="mb-3">
							<label for="student">Student: </label>
								<select name="student" id="student" class="form-control">
    								<option value="">  Select Student  </option>
    								<?php

    								$query = mysqli_query($koneksi, "SELECT nrp FROM users");
    								while ($data = mysqli_fetch_array($query)) {
        								echo "<option value='{$data['nrp']}'>{$data['nrp']}</option>";
    								}
								    ?>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label for="teacher">Teacher: </label>
								<select name="teacher" id="teacher" class="form-control">
    								<option value="">  Select Teacher  </option>
    								<?php

    								$query = mysqli_query($koneksi, "SELECT NIM FROM admins");
    								while ($data = mysqli_fetch_array($query)) {
        								echo "<option value='{$data['NIM']}'>{$data['NIM']}</option>";
    								}
								    ?>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label for="grade1">Grade 1: </label>
								<input type="text" name="grade1" id="grade1" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label for="grade2">Grade 2: </label>
								<input type="text" name="grade2" id="grade2" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label for="grade3">Grade 3: </label>
								<input type="text" name="grade3" id="grade3" class="form-control">
							</div>
						</div>
							<div class="mb-3 text-center">
								<br/>
							<button type="submit" name="saveGrade" class="btn btn-primary">Save</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php include('includes/footer.php'); ?>

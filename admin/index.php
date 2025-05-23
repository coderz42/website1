<?php include('includes/header.php'); ?>

<div class="row">
	<div class="col-md-3 mb-4">
		<div class="card card-body p-3">
			<p class="text-sm mb-0 text-capitalize font-weight-bold">Total Students:</p>
				<h5 class="font-weight-bolder mb-0"><?= getCount('users') ?>
			</h5>
		</div>
	</div>
	<div class="col-md-3 mb-4">
		<div class="card card-body p-3">
			<p class="text-sm mb-0 text-capitalize font-weight-bold">Total Admins:</p>
				<h5 class="font-weight-bolder mb-0"><?= getCount('admins') ?></h5>
		</div>
	</div>
	<div class="col-md-3 mb-4">
		<div class="card card-body p-3">
			<p class="text-sm mb-0 text-capitalize font-weight-bold">Total Students Graded:</p>
				<h5 class="font-weight-bolder mb-0"><?= getCount('grade') ?></h5>
		</div>
	</div>
</div>

<?php include('includes/footer.php'); ?>

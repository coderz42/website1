<?php include('includes/header.php') ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Edit Admin
                    <a href="admins.php" class="btn btn-danger float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">

                <form action="code.php" method="POST">

                <?= alertMessage(); ?>

                    <?php
                        $paramResult = checkParamId('id');
                        if (!is_numeric($paramResult)) {
                            echo '<h5>' . $paramResult . '</h5>';
                            return false;
                        }

                        $user = getById('admins', $paramResult);
                        if ($user['status'] == 200) {
                            $admin = $user['data'];
                    ?>

                    <input type="hidden" name="userId" value="<?= $admin['id']; ?>" required>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="username">Username:</label>
                                <input type="text" name="username" value="<?= htmlspecialchars($admin['username']); ?>" id="username" required class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="NIM">NIM:</label>
                                <input type="text" name="NIM" value="<?= htmlspecialchars($admin['NIM']); ?>" id="NIM" required class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="email">Email:</label>
                                <input type="email" name="email" value="<?= htmlspecialchars($admin['email']); ?>" id="email" required class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="field_of_study">Field of Study:</label>
                                <input type="text" name="field_of_study" value="<?= htmlspecialchars($admin['field_of_study']); ?>" id="field_of_study" required class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="password">New Password:</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Leave blank to keep current">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="password2">Confirm Password:</label>
                                <input type="password" name="password2" id="password2" class="form-control" placeholder="Repeat new password">
                            </div>
                        </div>
                        <div class="col-md-6">
							<div class="mb-3 text-end">
								<br/>
                            <button type="submit" name="updateAdmin" class="btn btn-primary">Update</button>
                        </div>
                    </div>

                    <?php
                        } else {
                            echo '<h5>' . $user['message'] . '</h5>';
                        }
                    ?>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php') ?>

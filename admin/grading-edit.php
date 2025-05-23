<?php include('includes/header.php'); ?>
<?php include('koneksi.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Edit Data
                    <a href="grading.php" class="btn btn-danger float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">

                <?= alertMessage(); ?>
                
                <form action="code.php" method="POST">

                    <?php
                        $paramResult = checkParamId('id');
                        if (!is_numeric($paramResult)) {
                            echo '<h5>' . $paramResult . '</h5>';
                            return false;
                        }

                        $user = getById('grade', checkParamId('id'));
                        if ($user['status'] == 200) {
                    ?>

                            <input type="hidden" name="userId" value="<?= $user['data']['id']; ?>" required >

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                    <label for="student">Student: </label>
                                    <select name="student" id="student" class="form-control" required>
                                        <option value="">Select Student</option>
                                        <?php
                                            $studentsQuery = "SELECT nrp FROM users";
                                            $studentsResult = mysqli_query($koneksi, $studentsQuery);
                                            while ($student = mysqli_fetch_assoc($studentsResult)) {
                                                $selected = ($student['nrp'] == $user['data']['student']) ? 'selected' : '';
                                                echo "<option value='{$student['nrp']}' {$selected}>{$student['nrp']}</option>";
                                            }
                                        ?>
                                    </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="teacher">Teacher: </label>
                                        <select name="teacher" id="teacher" class="form-control" required>
                                            <option value="">Select Teacher</option>
                                            <?php
                                                $teachersQuery = "SELECT NIM FROM admins";
                                                $teachersResult = mysqli_query($koneksi, $teachersQuery);
                                                while ($teacher = mysqli_fetch_assoc($teachersResult)) {
                                                    $selected = ($teacher['NIM'] == $user['data']['teacher']) ? 'selected' : '';
                                                    echo "<option value='{$teacher['NIM']}' {$selected}>{$teacher['NIM']}</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="grade1">Grade 1: </label>
                                        <input type="text" name="grade1" value="<?= $user['data']['grade1']; ?>" id="grade1" required class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="grade2">Grade 2: </label>
                                        <input type="text" name="grade2" value="<?= $user['data']['grade2']; ?>" id="grade2" required class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="grade3">Grade 3: </label>
                                        <input type="text" name="grade3" value="<?= $user['data']['grade3']; ?>" id="grade3" required class="form-control">
                                    </div>
                                </div>
                                <div class="mb-3 text-center">
                                    <button type="submit" name="updateGrade" class="btn btn-primary">Update</button>
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

<?php include('includes/footer.php'); ?>

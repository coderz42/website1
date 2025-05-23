<?php

require 'functions.php';

if(isset($_POST['saveUser']))
{
	$name = validate($_POST['name']);
	$nrp = validate($_POST['nrp']);
	$email = validate($_POST['email']);
	$fieldofstudy = validate($_POST['field_of_study']);
	$address = validate($_POST['address']);
	$gender = validate($_POST['gender']);


	if($name != '' || $nrp != '' || $email != '' || $fieldofstudy != '' || $address != '' || $gender != ''){

		$query = "INSERT INTO users (name,nrp,email,field_of_study,address,gender) VALUES('$name','$nrp','$email','$fieldofstudy','$address','$gender')";
		$result = mysqli_query($conn, $query);

		if($result){
			redirect('users.php', 'Student added successfully!');
		}else{
			redirect('users-create.php', 'Something went wrong');
		}

	}else{
		redirect('users-create.php', 'Please fill all the input fields');
	}
}

if(isset($_POST['updateUser'])){

	$name = validate($_POST['name']);
	$nrp = validate($_POST['nrp']);
	$email = validate($_POST['email']);
	$fieldofstudy = validate($_POST['field_of_study']);
	$address = validate($_POST['address']);
	$gender = validate($_POST['gender']);

	$userId = validate($_POST['userId']);

	$user = getById('users', $userId);
	if($user['status'] != 200){
		redirect('users-edit.php?id='.$userId, 'No such id found!');
	}

	if($name != '' || $nrp != '' || $email != '' || $fieldofstudy != '' || $address != '' || $gender != ''){

		$query = "UPDATE users SET
					name='$name',
					nrp= '$nrp',
					email= '$email',
					field_of_study= '$fieldofstudy',
					address= '$address',
					gender= '$gender'
					WHERE id= '$userId' ";

		$result = mysqli_query($conn, $query);

		if($result){
			redirect('users.php?id='.$userId, 'Student updated successfully!');
		}else{
			redirect('users-create.php', 'Something went wrong');
		}

	}else{
		redirect('users-create.php', 'Please fill all the input fields');
	}
}

if (isset($_POST['saveAdmin'])) {
    $username = validate($_POST['username']);
    $NIM = validate($_POST['NIM']);
    $email = validate($_POST['email']);
    $fieldofstudy = validate($_POST['field_of_study']);
    $password = validate($_POST['password']);
    $password2 = validate($_POST['password2']);

    if ($username != '' && $NIM != '' && $email != '' && $fieldofstudy != '' && $password != '' && $password2 != '') {

        // Check if username already exists
        $result = mysqli_query($conn, "SELECT username FROM admins WHERE username = '$username'");

        if (mysqli_fetch_assoc($result)) {
            echo "<script>alert('Username already taken!');</script>";
        } else {
            // Check if passwords match
            if ($password !== $password2) {
                echo "<script>alert('Confirmed password incorrect!');</script>";
                redirect('admins-create.php', 'Please Check Again!');
            } else {
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                // Insert new admin
                $query = "INSERT INTO admins (username, NIM, email, field_of_study, password) 
                          VALUES ('$username', '$NIM', '$email', '$fieldofstudy', '$hashedPassword')";
                $insertResult = mysqli_query($conn, $query);

                if ($insertResult) {
                    redirect('admins.php', 'Admin added successfully!');
                } else {
                    redirect('admins-create.php', 'Something went wrong');
                }
            }
        }
    } else {
        redirect('admins-create.php', 'Please fill all the input fields');
    }
}

if (isset($_POST['updateAdmin'])) {

    $username = validate($_POST['username']);
    $NIM = validate($_POST['NIM']);
    $email = validate($_POST['email']);
    $fieldofstudy = validate($_POST['field_of_study']);
    $password = validate($_POST['password']);
    $password2 = validate($_POST['password2']);

    $userId = validate($_POST['userId']);

    $user = getById('admins', $userId);
    if ($user['status'] != 200) {
        redirect('admins-edit.php?id=' . $userId, 'No such ID found!');
    }

    // Ensure all required fields are filled
    if ($username != '' && $NIM != '' && $email != '' && $fieldofstudy != '') {

        // Check if passwords are being updated
        if ($password != '' || $password2 != '') {
            if ($password !== $password2) {
                redirect('admins-edit.php?id=' . $userId, 'Confirmed password does not match!');
            }
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $query = "UPDATE admins SET 
                        username = '$username',
                        NIM = '$NIM',
                        email = '$email',
                        field_of_study = '$fieldofstudy',
                        password = '$hashedPassword'
                      WHERE id = '$userId'";
        } else {
            // Update without changing password
            $query = "UPDATE admins SET 
                        username = '$username',
                        NIM = '$NIM',
                        email = '$email',
                        field_of_study = '$fieldofstudy'
                      WHERE id = '$userId'";
        }

        $result = mysqli_query($conn, $query);

        if ($result) {
            redirect('admins.php?id=' . $userId, 'Admin updated successfully!');
        } else {
            redirect('admins-edit.php?id=' . $userId, 'Something went wrong');
        }

    } else {
        redirect('admins-edit.php?id=' . $userId, 'Please fill all the required input fields');
    }
}

if(isset($_POST['saveGrade']))
{
    $student = validate($_POST['student']);
    $teacher = validate($_POST['teacher']);
    $grade1 = validate($_POST['grade1']);
    $grade2 = validate($_POST['grade2']);
    $grade3 = validate($_POST['grade3']);


    if($student != '' || $teacher != '' || $grade1 != '' || $grade2 != '' || $grade3 != ''){

        $query = "INSERT INTO grade (student,teacher,grade1,grade2,grade3) VALUES('$student','$teacher','$grade1','$grade2','$grade3')";
        $result = mysqli_query($conn, $query);

        if($result){
            redirect('grading.php', 'Data added successfully!');
        }else{
            redirect('grading-create.php', 'Something went wrong');
        }

    }else{
        redirect('grading-create.php', 'Please fill all the input fields');
    }
}

if(isset($_POST['updateGrade'])){

    $student = validate($_POST['student']);
    $teacher = validate($_POST['teacher']);
    $grade1 = validate($_POST['grade1']);
    $grade2 = validate($_POST['grade2']);
    $grade3 = validate($_POST['grade3']);

    $userId = validate($_POST['userId']);

    $user = getById('grade', $userId);
    if($user['status'] != 200){
        redirect('grading-edit.php?id='.$userId, 'No such id found!');
    }

    if($student != '' || $teacher != '' || $grade1 != '' || $grade2 != '' || $grade3 != ''){

        $query = "UPDATE grade SET
                    student='$student',
                    teacher= '$teacher',
                    grade1= '$grade1',
                    grade2= '$grade2',
                    grade3= '$grade3'
                    WHERE id= '$userId' ";

        $result = mysqli_query($conn, $query);

        if($result){
            redirect('grading.php?id='.$userId, 'Data updated successfully!');
        }else{
            redirect('grading-create.php', 'Something went wrong');
        }

    }else{
        redirect('grading-create.php', 'Please fill all the input fields');
    }
}

?>
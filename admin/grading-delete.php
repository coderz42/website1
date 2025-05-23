<?php

require 'functions.php';

$paraResult = checkParamId('id');
if(is_numeric($paraResult)){

	$userId = validate($paraResult);

	$user = getById('grade', $userId);
	if($user['status'] == 200){

		$userDeleteRes = deleteQuery('grade',$userId);

		if($userDeleteRes){

			redirect('grading.php', 'Data deleted successfully!');

		}else{

			redirect('grading.php', 'Something Went Wrong');
		}

	}else{
		
		redirect('grading.php', $user['message']);
	}

}else{
	redirect('grading.php', $paraResult);
}

?>
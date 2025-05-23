<?php

require 'functions.php';

$paraResult = checkParamId('id');
if(is_numeric($paraResult)){

	$userId = validate($paraResult);

	$user = getById('admins', $userId);
	if($user['status'] == 200){

		$userDeleteRes = deleteQuery('admins',$userId);

		if($userDeleteRes){

			redirect('admins.php', 'Admin deleted successfully!');

		}else{

			redirect('admins.php', 'Something Went Wrong');
		}

	}else{
		
		redirect('admins.php', $user['message']);
	}

}else{
	redirect('admins.php', $paraResult);
}

?>
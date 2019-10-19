<?php  

	if(isset($_SESSION['msg_success'])){
		unset($_SESSION['msg_success']);
	}

	if(isset($_SESSION['msg_error'])){
		unset($_SESSION['msg_error']);
	}
?>
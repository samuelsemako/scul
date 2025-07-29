<?php include 'config.php';?>
<?php 
	$action=$_POST['action'];
	  switch ($action){
	case 'reset_password':
		// $staff_id=trim($_POST['staff_id']);
		$page=$action;
		require_once ('content-page.php');
	break;

	case 'password_reset_completed':
		$page=$action;
	  	require_once('content-page.php');
	break;

	
}
?>



<?php include 'config.php';?>
<?php 
	$action=$_POST['action'];
	  switch ($action){
		
	case 'get-page':
	    $page=$_POST['page'];
		require_once 'config/content-page.php';
	break;
}
?>

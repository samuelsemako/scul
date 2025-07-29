<?php include '../../../config/config.php';?>
<?php 
	$action=$_POST['action'];
	  switch ($action){
		
	case 'get-page':
	    $page=$_POST['page'];
		require_once ('content-page.php');
	break;
}
?>

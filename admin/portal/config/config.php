<?php 

    session_start();
    session_regenerate_id(true);
    error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);
   
 
  

    $thename='Get Hostel'; 
    $page = basename($_SERVER['SCRIPT_NAME']);
    $website_auto_url =(isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $ip_address=$_SERVER['REMOTE_ADDR']; //ip used
     $sysname=gethostname();//computer used
    /////////////////////////////////////////////////////////////////

    $website_url='http://localhost/gethostel.com/';
//  $website_url='http://192.168.38.115/gethostel.com/';
?>

<script>
    var website_url = '<?php echo $website_url ;?>';
    var local_portal_url=website_url+'config/code.php'; /// for login local url ////
   // var local_portal_url=website_url+'/config/code.php';
   //ar website_url = 'http://localhost/gethostel.com';
</script>


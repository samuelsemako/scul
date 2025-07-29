<?php include '../../config/config.php'?>
<?php include 'config/welcome-profile.php'?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include "meta.php"?> 
<title>OOU Hostel</title>
<script src="https://cdn.canvasjs.com/jquery.canvasjs.min.js"></script>
</head>
<body>

  <?php include "header.php" ?>

    <section>  
        <?php include "sidebar.php" ?>
                
            <div class="dashboard-content">
                <div class="second-inner">
                    <?php $callClass->welcomeProfilePanel();?>
                    <div id="page-content">
                        <script>_getPage('all_staff')</script>
                        <?php require_once 'config/content-page.php';?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
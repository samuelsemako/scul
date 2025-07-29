<?php
$appName="OOU HOSTEL";
$appDescription ="This solution update and fetfch data from the database using API and AJAX.";
$apiKeys = isset($_SERVER['HTTP_APIKEYS']) ? $_SERVER['HTTP_APIKEYS'] : null;
$expectedApiKey = "d08cebbe-0270-42bb-b559-5759ed2f63d5";

$websiteUrl='http://localhost/oouhostel.com';
$documentStoragePath= $websiteUrl.'/api/Uploaded_files/userPics/';
$userProfilePixPath = '../../Uploaded_files/userPics/';
?>
<?php
include '../config/connection.php';

if ($apiKeys !== $expectedApiKey) {
    $response = [
        'response' => 98,
        'success' => false,
        'message' => 'SECURITY ACCESS DENIED!'
    ];
    goto end;
}
    // Get POST data
    $staffName     = trim(strtoupper($_POST['staffName']));
    $staffEmail = trim($_POST['staffEmail']);
    $staffNumber  = trim($_POST['staffNumber']);
    $position = trim($_POST['position']);
    $staffPassword = trim($_POST['password']);
    $passport  = $_FILES['passport']['name'];


    // Basic validations
    if (empty($staffName)) {
        $response = [
            'response' => 101,
            'success' => false,
            'message' => "Provide your staff Name to continue."
        ];
        goto end;
    }

    if (empty($staffNumber)){
        $response = [
            'response' => 102,
            'success' => false,
            'message' => "Provide phone number to continue."
        ];
        goto end;
    }

    if (!preg_match('/^[0-9]{10}$/', $staffNumber)) {
        $response = [
            'response' => 103,
            'success' => false,
            'message' => "Provide valid phone number to continue."
        ];
        goto end;
    }

    if (empty($staffEmail)){
        $response = [
            'response' => 104,
            'success' => false,
            'message' => "Provide  Matric Number to continue."
        ];
        goto end;
    }

     if (empty($staffPassword)){
        $response = [
            'response' => 105,
            'success' => false,
            'message' => "Provide Password to continue."
        ];
        goto end;
    }
    if (empty($position)) {
        $response = [
            'response' => 106,
            'success' => false,
            'message' => "Provide your Position to continue."
        ];
        goto end;
    }

    if (!$passport) {
        $response = [
            'response' => 107,
            'success' => false,
            'message' => 'Staff Passport REQUIRED!'
        ];
        goto end;
    }

    // Check if email exists
    $checkUserEmail = mysqli_query($conn, "SELECT * FROM staff_tab WHERE staffEmail = '$staffEmail'");
    $UserEmailCount= mysqli_num_rows($checkUserEmail);
    if ($UserEmailCount > 0) {
        $response = [
            'response' => 108,
            'success' => false,
            'message' => "Email $staffEmail already used by another user."
        ];
        goto end;
    }

    // Check if phone number exists
    $checkUserPhone = mysqli_query($conn, "SELECT * FROM staff_tab WHERE staffNumber = '$staffNumber'");
    $UserPhoneCount = mysqli_num_rows($checkUserPhone);
    if ($UserPhoneCount > 0) {
        $response = [
            'response' => 109,
            'success' => false,
            'message' => "Phone number $staffNumber already used by another user."
        ];
        goto end;
    }

    $allowedExts = ["jpg", "jpeg", "png", "gif", "webp", "JPG", "JPEG", "PNG", "GIF", "WEBP"];
    $extension = pathinfo($passport, PATHINFO_EXTENSION);

    if (!in_array($extension, $allowedExts)) {
        $response = [
            'response' => 110,
            'success' => false,
            'message' => "Invalid picture format."
        ];
        goto end;
    }


      
    // Generate staffId
    $sequence = $callclass->_getSequenceCount($conn, 'STAFF');
    $array = json_decode($sequence, true);
    $no = $array[0]['no'];
    $staff_id = 'STAFF' . $no . date("YmdHis");


     // Save passport
    $passport = $user_id . date("Ymdhi") . $passport;
    $uploadPath = $userProfilePixPath . $passport;
 
    if (!move_uploaded_file($_FILES["passport"]["tmp_name"], $uploadPath)) {
        $response = [
            'response' => 111,
            'success' => false,
            'message' => 'Picture upload error Contact your'
        ];
        goto end;
    }


    // Insert user data into database
    $query = "INSERT INTO staff_tab (staff_id, staffName, staffEmail, staffNumber, staffPassword, passport, position, created_time, updated_time) 
                        VALUES ('$staff_id', '$staffName',  '$staffEmail', '$staffNumber', '$staffPassword', '$passport','$position', NOW(), NOW())";

    if (!mysqli_query($conn, $query)) {
        $response = [
            'response' => 112,
            'success' => false,
            'message' => 'Failed to create staff'
        ];
        goto end;
    }

    $response = [
        'response' => 200,
        'success' => true,
        'message' => "Staff created successfully.",
        'staff_id' => $staff_id
    ];

end:
echo json_encode($response);
?>

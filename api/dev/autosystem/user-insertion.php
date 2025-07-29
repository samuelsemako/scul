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
    $fullname     = trim(strtoupper($_POST['fullname']));
    $matric_no = trim($_POST['matric_no']);
    $phoneNumber  = trim($_POST['phoneNumber']);
    $password = trim($_POST['password']);
    $confirmPassword = trim($_POST['confirmPassword']);
    $passport  = $_FILES['passport']['name'];

    // Basic validations
    if (empty($fullname)) {
        $response = [
            'response' => 101,
            'success' => false,
            'message' => "Provide your fullname to continue."
        ];
        goto end;
    }

    if (empty($phoneNumber)){
        $response = [
            'response' => 102,
            'success' => false,
            'message' => "Provide phone number to continue."
        ];
        goto end;
    }

    if (!preg_match('/^[0-9]{10}$/', $phoneNumber)) {
        $response = [
            'response' => 103,
            'success' => false,
            'message' => "Provide valid phone number to continue."
        ];
        goto end;
    }

    if (empty($matric_no)){
        $response = [
            'response' => 104,
            'success' => false,
            'message' => "Provide  Matric Number to continue."
        ];
        goto end;
    }

     if (empty($password)){
        $response = [
            'response' => 105,
            'success' => false,
            'message' => "Provide Password to continue."
        ];
        goto end;
    }

      if (empty($confirmPassword)){
        $response = [
            'response' => 106,
            'success' => false,
            'message' => "Please confirm password to continue."
        ];
        goto end;
    }

         if ($password !== $confirmPassword) {
        $response = [
            'response' => 113,
            'success' => false,
            'message' => 'Passwords do not match.'
        ];
        goto end;
    }


    if (!$passport) {
        $response = [
            'response' => 107,
            'success' => false,
            'message' => 'PASSPORT REQUIRED!'
        ];
        goto end;
    }

    // Check if email exists
    $checkUserEmail = mysqli_query($conn, "SELECT * FROM student_tab WHERE matric_no = '$matric_no'");
    $UserEmailCount= mysqli_num_rows($checkUserEmail);
    if ($UserEmailCount > 0) {
        $response = [
            'response' => 108,
            'success' => false,
            'message' => "Matric number $matric_no already used by another user."
        ];
        goto end;
    }

    // Check if phone number exists
    $checkUserPhone = mysqli_query($conn, "SELECT * FROM student_tab WHERE phoneNumber = '$phoneNumber'");
    $UserPhoneCount = mysqli_num_rows($checkUserPhone);
    if ($UserPhoneCount > 0) {
        $response = [
            'response' => 109,
            'success' => false,
            'message' => "Phone number $phoneNumber already used by another user."
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

    // Generate userId
    $sequence = $callclass->_getSequenceCount($conn, 'USER');
    $array = json_decode($sequence, true);
    $no = $array[0]['no'];
    $user_id = 'USER' . $no . date("YmdHis");

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
    $query = "INSERT INTO student_tab (user_id, fullname, matric_no, phoneNumber, password, passport, created_time, updated_time) 
                        VALUES ('$user_id', '$fullname',  '$matric_no', '$phoneNumber', '$password', '$passport', NOW(), NOW())";

    if (!mysqli_query($conn, $query)) {
        $response = [
            'response' => 112,
            'success' => false,
            'message' => 'Failed to create user'
        ];
        goto end;
    }

    $response = [
        'response' => 200,
        'success' => true,
        'message' => "User created successfully.",
        'user_id' => $user_id
    ];

end:
echo json_encode($response);
?>

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

    $userId = $_GET['userId'];
    $fullName = trim(strtoupper($_POST['fullName']));
    $emailAddress = trim($_POST['emailAddress']);
    $phoneNumber = trim($_POST['phoneNumber']);
    $passport     = $_FILES['passport']['name'];

    if (empty($userId)) {
        $response = [
            'response' => 100,
            'success' => false,
            'message' => "User ID is required."
        ];
        goto end;
    }

    if (empty($fullName)) {
        $response = [
            'response' => 101,
            'success' => false,
            'message' => "Provide fullname to continue."
        ];
        goto end;
    }

    if (empty($phoneNumber))  {
        $response = [
            'response' => 102,
            'success' => false,
            'message' => "Provide phone number to continue."
        ];
        goto end;
    }

    if (!filter_var($emailAddress, FILTER_VALIDATE_EMAIL)) {
        $response = [
            'response' => 103,
            'success' => false,
            'message' => "Valid email required."
        ];
        goto end;
    }

        $checkUser = mysqli_query($conn, "SELECT userId FROM user_tab WHERE userId = '$userId'");
        $userIdCount=mysqli_num_rows($checkUser);

        if ($userIdCount === 0) {
            $response = [
                'response' => 104,
                'success' => false,
                'message' => "User not found."
            ];
            goto end;
        }

            $checkUserEmail = mysqli_query($conn, "SELECT * FROM user_tab WHERE emailAddress = '$emailAddress' AND userId!= '$userId'");
            $userEmailCount=mysqli_num_rows($checkUserEmail);

            if ($userEmailCount > 0) {
                $response = [
                    'response' => 105,
                    'success' => false,
                    'message' => "Email already used by another user."
                ];
                goto end;
            }

                $uploadPath = null;
                if (isset($_FILES['passport']) && $_FILES['passport']['error'] === UPLOAD_ERR_OK && !empty($_FILES['passport']['name'])) {

                    $allowedExts = ["jpg", "jpeg", "png", "gif", "webp", "JPG", "JPEG", "PNG", "GIF", "WEBP"];
                    $extension = pathinfo($_FILES['passport']['name'], PATHINFO_EXTENSION);
                    
                    if (!in_array($extension, $allowedExts)) {
                        $response = [
                            'response' => 108,
                            'success' => false,
                            'message' => "Invalid picture format."
                        ];
                        goto end;
                    }

                    $passportArray = $callclass->_getUserDetails($conn, $userId);
                    $fetchPassport = json_decode($passportArray, true);
                    $dbPassportPix = $fetchPassport[0]['passport'];

                    unlink($userProfilePixPath . $dbPassportPix);
                    
                    $datetime = date("Ymdhi");
                    $passport = $userId . '' . $datetime . '' . $_FILES['passport']['name']; // Use original file name
                    $uploadPath = $userProfilePixPath . $passport;

                    if (!move_uploaded_file($_FILES["passport"]["tmp_name"], $uploadPath)) {
                        $response = [
                            'response' => 109,
                            'success' => false,
                            'message' => 'Picture upload error'
                        ];
                        goto end;
                    }

                    mysqli_query($conn, "UPDATE user_tab SET passport='$passport' WHERE userId='$userId'") or die(mysqli_error($conn));
                }

                mysqli_query($conn, "UPDATE user_tab SET fullName = '$fullName', emailAddress = '$emailAddress', phoneNumber = '$phoneNumber', passport = '$passport', updatedTime = NOW() WHERE userId = '$userId'") or die(mysqli_error($conn));

                $response = [
                    'response' => 200,
                    'success' => true,
                    'message' => "User updated successfully.",
                    'userId' => $userId
                ];

    end:
    echo json_encode($response);
    ?>
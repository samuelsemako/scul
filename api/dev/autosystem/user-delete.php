<?php include '../config/connection.php'; ?>

<?php
// Security check
if ($apiKeys !== $expectedApiKey) {
    $response = [
        'response' => 98,
        'success' => false,
        'message' => 'SECURITY ACCESS DENIED! You are not allowed to execute this command.'
    ];
    goto end;
}

    // Get userId
    $userId = $_GET['userId'];

    if (empty($userId)) {
        $response = [
            'response' => 100,
            'success' => false,
            'message' => 'USER ID REQUIRED! Please provide a valid userId.'
        ];
        goto end;
    }

        $checkUser = mysqli_query($conn, "SELECT userId FROM user_tab WHERE userId = '$userId'");
        $userIdCount=mysqli_num_rows($checkUser);

        if ($userIdCount == 0) {
            $response = [
                'response' => 101,
                'success' => false,
                 'message' => 'USER NOT FOUND! No user found with the provided userId.'
            ];
            goto end;
        }

            $passportArray = $callclass->_getUserDetails($conn, $userId);
            $fetchPassport = json_decode($passportArray, true);
            $dbPassportPix = $fetchPassport[0]['passport'];

            unlink($userProfilePixPath . $dbPassportPix);

            // Delete user from database
            mysqli_query($conn, "DELETE FROM user_tab WHERE userId = '$userId'") or die(mysqli_error($conn));

            $response = [
                'response' => 200,
                'success' => true,
                'message' => 'USER DELETED SUCCESSFULLY!',
                'userId' => $userId
            ];

end:
echo json_encode($response);
?>

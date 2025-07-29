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
    $user_id     = trim(strtoupper($_POST['user_id']));
    $hostel = trim($_POST['hostel']);
    $room  = trim($_POST['room']);
    $bed = trim($_POST['bed']);


    // Basic validations
    if (empty($user_id)) {
        $response = [
            'response' => 101,
            'success' => false,
            'message' => "Select a student."
        ];
        goto end;
    }

    if (empty($hostel)){
        $response = [
            'response' => 102,
            'success' => false,
            'message' => "Provide hostel name to continue."
        ];
        goto end;
    }

    if (empty($room)){
        $response = [
            'response' => 104,
            'success' => false,
            'message' => "Provide  Room Number to continue."
        ];
        goto end;
    }

     if (empty($bed)){
        $response = [
            'response' => 105,
            'success' => false,
            'message' => "Provide bed number to continue."
        ];
        goto end;
    }
    // Check if email exists
    $checkUserEmail = mysqli_query($conn, "SELECT * FROM hostel_allocation_tab WHERE user_id = '$user_id'");
    $UserEmailCount= mysqli_num_rows($checkUserEmail);
    if ($UserEmailCount > 0) {
        $response = [
            'response' => 108,
            'success' => false,
            'message' => "A room has been allocated for you before"
        ];
        goto end;
    }

    



      
    // Generate hostelId
    $sequence = $callclass->_getSequenceCount($conn, 'HOSTEL');
    $array = json_decode($sequence, true);
    $no = $array[0]['no'];
    $hostel_id = 'HOSTEL' . $no . date("YmdHis");

    // Insert user data into database
    $query = "INSERT INTO hostel_allocation_tab (user_id, hostel_id, hostel, room, bed, created_time) 
                        VALUES ('$user_id', '$hostel_id','$hostel',  '$room', '$bed', NOW())";

    if (!mysqli_query($conn, $query)) {
        $response = [
            'response' => 112,
            'success' => false,
            'message' => 'Failed to allocate Hostel'
        ];
        goto end;
    }

    $response = [
        'response' => 200,
        'success' => true,
        'message' => "Hostel allocated successfully.",
        'hostel_id' => $hostel_id
    ];

end:
echo json_encode($response);
?>

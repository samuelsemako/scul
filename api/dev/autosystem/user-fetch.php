<?php include '../config/connection.php'; ?>

<?php
// API key check
if ($apiKeys !== $expectedApiKey) {
    $response = [
        'response' => 98,
        'success' => false,
        'message' => 'SECURITY ACCESS DENIED! You are not allowed to execute this command.'
    ];
    goto end;
}
    //  input
    // Get POST data
    $loginMatric     = trim(strtoupper($_POST['loginMatric']));
    $loginPassword = trim($_POST['loginPassword']);

     if (empty($loginMatric)) {
        $response = [
            'response' => 101,
            'success' => false,
            'message' => "Provide your Matric number to continue."
        ];
        goto end;
    }
 
    if (empty($loginPassword)){
        $response = [
            'response' => 102,
            'success' => false,
            'message' => "Provide Password to continue."
        ];
        goto end;
    }

    $select="
        SELECT * 
        FROM student_tab 
        WHERE matric_no = '$loginMatric' 
        AND 
        password = '$loginPassword'
    ";

        $query=mysqli_query($conn,$select);
        if (!$query) {
            $response = [
                'response'=> 500,
                'success'=> false,
                'message'=> 'Database error: ' . mysqli_error($conn)
            ];
            goto end;
        }

        


        $allUserCount=mysqli_num_rows($query);
        if($allUserCount==0){
            $response = [
                'response'=> 200,
                'success'=>false,
                'message'=> 'No Record found!!!'
            ];  
            goto end;
        }
            $response = [
                'response'=> 200,
                'success'=> true,
                'message'=> 'USER FETCH SUCCESSFUL!!',
                'allUserCount'=> $allUserCount,
                'data'=>  [],
                'user_id'=> $user_id
            ]; 
                while ($fetchQuery = mysqli_fetch_assoc($query)) {
                    $fetchQuery['documentStoragePath'] = $documentStoragePath;
                    $response['data'] = $fetchQuery;
                }
                
end:
echo json_encode($response);
?>

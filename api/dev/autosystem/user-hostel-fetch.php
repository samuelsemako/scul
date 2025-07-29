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
    $user_id = trim(strtoupper($_POST['user_id']));
    
     if (empty($user_id)) {
        $response = [
            'response' => 101,
            'success' => false,
            'message' => "You are yet to be allocated hostel"
        ];
        goto end;
    }
 
    $select="
        SELECT a.*, b.fullname, b.matric_no 
        FROM hostel_allocation_tab a, student_tab b
        WHERE b.user_id = a.user_id
        AND a.user_id = '$user_id'
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
                'message'=> 'HOSTEL FETCH SUCCESSFUL!!',
                'allUserCount'=> $allUserCount,
                'data'=>  []
            ]; 
             while ($fetchQuery = mysqli_fetch_assoc($query)) {
                    $fetchQuery['documentStoragePath'] = $documentStoragePath;
                    $response['data'] = $fetchQuery;
                }
                
end:
echo json_encode($response);
?>

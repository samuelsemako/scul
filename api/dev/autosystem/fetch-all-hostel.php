<?php include '../config/connection.php'; ?>

<?php

// Check API Key
if ($apiKeys !== $expectedApiKey) {
    echo json_encode([
        'response' => 98,
        'success' => false,
        'message' => 'SECURITY ACCESS DENIED! You are not allowed to execute this command.'
    ]);
    exit;
}

// Query to fetch all users from student_tab
$sql = "SELECT a.*, b.fullname, b.matric_no FROM hostel_allocation_tab a, student_tab b WHERE a.user_id = b.user_id";
$result = $conn->query($sql);

// Initialize response
$response = [
    'response' => 200,
    'success' => true,
    'message' => 'HOSTEL FETCH SUCCESSFUL!!',
    'allUserCount' => 0,
    'data' => []
];

// Check if there are rows
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $row['documentStoragePath'] = $documentStoragePath ?? ''; // Optional, if defined
        $response['data'][] = $row;
    }
    $response['allUserCount'] = count($response['data']);
} else {
    $response = [
        'response' => 200,
        'success' => false,
        'message' => 'No Hostel found.',
        'allUserCount' => 0,
        'data' => []
    ];
}

// Output final JSON response
echo json_encode($response);
?>

<?php require_once '../config/connection.php' ?>
<?php if (!$checkBasicSecurity) {goto end;}?>

<?php
$studentId = $_GET['studentId'];
$searchKeywords = $_GET['searchKeywords'];
$query = fetchStudentData($conn, $studentId,$searchKeywords);

$queryCounts= mysqli_num_rows($query);

if ( $queryCounts == 0) {
    $response = [
        'success' => false,
        'message' => 'No student found'
    ];
    goto end;
}

$response = [
    'success' => true,
    'message' => "Student Fetched Succeful",
    'Total Student' => $queryCounts
];

$response['data']=array();
while ($fetchQuery = mysqli_fetch_assoc($query)) {
    $fetchQuery['documentStoragePath'] = "$documentStoragePath/user-pics";
    $response['data'][]=$fetchQuery;
}


end:
echo json_encode($response);


?>
<?php require_once '../config/connection.php' ?>
<?php if (!$checkBasicSecurity) {goto end;}?>

<?php
$staffId = $_GET['staffId'];
$searchKeywords = $_GET['searchKeywords'];

$query = fetchStaffData($conn, $staffId, $searchKeywords);

$queryCounts= mysqli_num_rows($query);

if ( $queryCounts == 0) {
    $response = [
        'success' => false,
        'message' => 'No staff found'
    ];
    goto end;
}

$response = [
    'success' => true,
    'message' => "Staff Fetched Succeful",
    'Total Staff' => $queryCounts
];

$response['data']=array();
while ($fetchQuery = mysqli_fetch_assoc($query)) {
    $fetchQuery['documentStoragePath'] = "$documentStoragePath/staff-pics";
    $response['data'][]=$fetchQuery;
}


end:
echo json_encode($response);


?>
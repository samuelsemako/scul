<?php require_once '../config/connection.php' ?>
<?php if (!$checkBasicSecurity) {goto end;} ?>

<?php 
$fullName = strtoupper(trim($_POST["fullName"]));
$emailAddress = trim($_POST["emailAddress"]);
$phoneNumber = trim($_POST["phoneNumber"]);
$homeAddress = strtoupper(trim($_POST["homeAddress"]));
$genderId = trim($_POST["gender"]);
$qualificationId = trim($_POST["qualification"]);
$statusId = trim($_POST["status"]);
$roleId = trim($_POST["role"]);
$passport = trim($_FILES["passport"]['name']);
$password = 11111;

validateEmptyField($fullName, 'Full Name');
validateEmptyField($emailAddress, 'Email Address');
validateEmptyField($phoneNumber, 'Phone Number');
validateEmptyField($homeAddress, 'Home Address');
validateEmptyField($genderId, 'Gender');
validateEmptyField($qualificationId, 'Qualification');
validateEmptyField($roleId, 'Role');
validateEmptyField($statusId, 'Status');

validateEmail($emailAddress);
validateDigit($phoneNumber, 'Phone Number');
phoneLenght($phoneNumber);

$allowedExts = array("jpg", "jpeg", "JPEG", "JPG", "gif", "png", "PNG", "GIF", "webp", "WEBP");
$extension = pathinfo($_FILES['passport']['name'], PATHINFO_EXTENSION);

if (!in_array(($extension), $allowedExts)) {
    $response = [
        'response' => 111,
        'success' => false,
        'message' => 'ERROR! Input passport to continue'
    ];
    goto end;
}

//////////////check if email address already exist//////////////////////////
$query = mysqli_query($conn, "SELECT emailAddress FROM staff_tab WHERE emailAddress = '$emailAddress'") or die(mysqli_error($conn));
$checkEmailExists = mysqli_num_rows($query);
if ($checkEmailExists > 0) {
    $response = [
        'response' => 110,
        'success' => false,
        'message' => "This email ('$emailAddress') is already in use. Please try another Email Address."
    ];
    goto end;
}

//////////////geting sequence//////////////////////////
$sequence = $callclass->_getSequenceCount($conn, 'STF');
$array = json_decode($sequence, true);
$no = $array[0]['no'];

/// generate staffId ///////
$staffId = 'STF' . $no . date("Ymdhis");
$passport = $staffId . $passport;
$uploadPath = $staffProfilePixPath . $passport;

if (!move_uploaded_file($_FILES["passport"]["tmp_name"], $uploadPath)) {
    $response = [
        'response' => 112,
        'success' => false,
        'message' => 'PICTURE UPLOAD ERROR! Contact your Engineer For Help'
    ];
    goto end;
}

//// insert into staff_tab ////
mysqli_query($conn, "INSERT INTO staff_tab 
(staffId, fullName, emailAddress, phoneNumber, homeAddress, genderId, qualificationId, statusId, roleId, password, passport, createdTime) 
VALUES 
('$staffId', '$fullName', '$emailAddress', '$phoneNumber', '$homeAddress', '$genderId', '$qualificationId', '$statusId', '$roleId', '$password', '$passport', NOW())") or die(mysqli_error($conn));

//// if role is admin (1), insert into admin_tab ////
if ($roleId == 1) {
    $retakeQuery = mysqli_query($conn, "SELECT staffId, emailAddress, password FROM staff_tab WHERE staffId = '$staffId'") or die(mysqli_error($conn));
    $fetchQuery = mysqli_fetch_array($retakeQuery);
    $adminStaffId = $fetchQuery['staffId'];
    $adminEmail = $fetchQuery['emailAddress'];
    $adminPassword = $fetchQuery['password'];

    mysqli_query($conn, "INSERT INTO admin_tab(staffId, emailAddress, password) 
    VALUES 
    ('$adminStaffId', '$adminEmail', '$adminPassword')") or die(mysqli_error($conn));
}

$response = [
    'response' => 200,
    'success' => true,
    'message' => "Staff registered successfully",
];

$queryTwo = mysqli_query($conn, "SELECT a.staffId, a.fullName, a.emailAddress, a.phoneNumber, a.homeAddress, b.genderName, d.statusName, e.roleName, a.passport , a.createdTime 
FROM staff_tab a, setup_gender_tab b, setup_status_tab d, setup_role_tab e  
WHERE a.staffId = '$staffId' 
AND a.genderId = b.genderId
AND a.statusId = d.statusId
AND a.roleId = e.roleId
") or die(mysqli_error($conn));

$response['data'] = array();
while ($fetchQueryTwo = mysqli_fetch_assoc($queryTwo)) {
    $fetchQueryTwo['documentStoragePath'] = "$documentStoragePath/staff-pics";
    $response['data'][] = $fetchQueryTwo;
}

end:
echo json_encode($response);

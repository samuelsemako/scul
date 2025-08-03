<?php require_once '../config/connection.php' ?>
<?php if (!$checkBasicSecurity) {goto end;} ?>

<?php
$fullName = strtoupper(trim($_POST["fullName"]));
$emailAddress = trim($_POST["emailAddress"]);
$phoneNumber = trim($_POST["phoneNumber"]);
$homeAddress = strtoupper(trim($_POST["homeAddress"]));
$genderId = trim($_POST["gender"]);
$parentName = strtoupper(trim($_POST["parentName"]));
$classId = trim($_POST["class"]);
$statusId = trim($_POST["status"]);
$roleId = trim($_POST["role"]);
$passport = trim($_FILES["passport"]['name']);


validateEmptyField($fullName, 'Full Name');
validateEmptyField($emailAddress, 'Email Address');
validateEmptyField($phoneNumber, 'Phone Number');
validateEmptyField($homeAddress, 'Home Address');
validateEmptyField($genderId, 'Gender');
validateEmptyField($parentName, 'Parent Name');
validateEmptyField($classId, 'Class');
validateEmptyField($statusId, 'Status');
validateEmptyField($roleId, 'Role');

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
$query = mysqli_query($conn, "SELECT emailAddress FROM student_tab WHERE emailAddress = '$emailAddress'") or die(mysqli_error($conn));
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
$sequence = $callclass->_getSequenceCount($conn, 'STDT');
$array = json_decode($sequence, true);
$no = $array[0]['no'];
/// generate userId //////
$studentId = 'STDT' . $no . date("Ymdhis");
$passport = $studentId . $passport;
$uploadPath = $studentProfilePixPath . $passport;

if (!move_uploaded_file($_FILES["passport"]["tmp_name"], $uploadPath)) {
    $response = [
        'response' => 112,
        'success' => false,
        'message' => 'PICTURE UPLOAD ERROR! Contact your Engineer For Help'
    ];
    goto end;
}

mysqli_query($conn, "INSERT INTO student_tab 
(studentId, fullName, emailAddress, phoneNumber, homeAddress, genderId, parentName, classId, statusId, roleId, passport, createdTime) 
VALUES 
('$studentId', '$fullName', '$emailAddress', '$phoneNumber', '$homeAddress', '$genderId', '$parentName', '$classId', '$statusId', '$roleId', '$passport', NOW())") or die(mysqli_error($conn));

$response = [
    'response' => 200,
    'success' => true,
    'message' => "Student registered successfully",
];


///// get user
$query = mysqli_query($conn, "SELECT a. studentId, a.fullName, a.emailAddress, a.phoneNumber, a.homeAddress, b.genderName, a.parentName, c.className, d.statusName, e.roleName, a.passport , a.createdTime 
FROM student_tab a, setup_gender_tab b, setup_class_tab c, setup_status_tab d, setup_role_tab e  
WHERE a.studentId = '$studentId' 
AND a.genderId = b.genderId
AND a.classId = c.classId
AND a.statusId = d.statusId
AND a.roleId = e.roleId
 ");

$response['data'] = array();
$fetchQuery = mysqli_fetch_assoc($query);
$fetchQuery['documentStoragePath'] = "$documentStoragePath/student-pics";
$response['data'] = $fetchQuery;


end:
echo json_encode($response);
?>
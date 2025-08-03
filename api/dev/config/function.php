<?php

///////////////////GENERAL FUNCTIONS////////////////////////////////
class allClass
{   ///COUNTER
    function _getSequenceCount($conn, $counterId)
    {
        $count = mysqli_fetch_array(mysqli_query($conn, "SELECT counterValue FROM counter_tab WHERE counterId = '$counterId' FOR UPDATE"));
        $num = $count[0] + 1;
        mysqli_query($conn, "UPDATE counter_tab SET counterValue = '$num' WHERE counterId = '$counterId'") or die(mysqli_error($conn));
        if ($num < 10) {
            $no = '00' . $num;
        } elseif ($num >= 10 && $num < 100) {
            $no = '0' . $num;
        } else {
            $no = $num;
        }
        return '[{"no":"' . $no . '"}]';
    }
} 
$callclass = new allClass();


/// field validation
function validateEmptyField($field, $fieldName)
{
    if (empty($field)) {
        echo json_encode([
            'response' => 400,
            'success' => false,
            'message' => "$fieldName REQUIRED! Check the fields and try again",
        ]);
        exit;
    }
}

/// email validation
function validateEmail($emailAddress)
{
    if (!filter_var($emailAddress, FILTER_VALIDATE_EMAIL)) {
        echo json_encode([
            'response' => 104,
            'success' => false,
            'message' => "$emailAddress is not valid."
        ]);
        exit;
    }
}

//// function for digit Validation
function validateDigit($field, $fieldName)
{
    if (!is_numeric($field)) {
        echo json_encode([
            'response' => 103,
            'success' => false,
            'message' => "INVALID $fieldName! ENTER ONLY DIGITS."
        ]);
        exit;
    }
}

//// function for PHONE LENGTH
function phoneLenght($phoneNumber)
{
    if (strlen($phoneNumber) != 11) {
        echo json_encode([
            'response' => 104,
            'success' => false,
            'message' => "INVALID PHONE NUMBER! NUMBER MUST BE EXACTLY 11 DIGITS."
        ]);
        exit;
    }
}



//////////////////////// STUDENT FUNCTION///////////////////////////////////////////////////
///FETCH STUDENTS
function fetchStudentData($conn, $studentId, $searchKeywords )
{
    if ($studentId != '' || $searchKeywords != '') {
        return mysqli_query($conn, "
            SELECT a.studentId, a.fullName, a.emailAddress, a.phoneNumber, a.homeAddress,
            b.genderName, a.parentName, c.className, d.statusName, e.roleName, a.passport, a.createdTime 
            FROM student_tab a, setup_gender_tab b, setup_class_tab c, setup_status_tab d, setup_role_tab e  
            WHERE a.genderId = b.genderId
            AND a.classId = c.classId
            AND a.statusId = d.statusId
            AND a.roleId = e.roleId
            AND a.staffId LIKE '%$studentId%'
            AND a.fullName LIKE '%$searchKeywords%'
            ORDER BY a.fullName ASC
        ");
    }
    
    return mysqli_query($conn, "
        SELECT a.studentId, a.fullName, a.emailAddress, a.phoneNumber, a.homeAddress,
        b.genderName, a.parentName, c.className, d.statusName, e.roleName,
        a.passport, a.createdTime 
        FROM student_tab a, setup_gender_tab b, setup_class_tab c, setup_status_tab d, setup_role_tab e  
        WHERE a.genderId = b.genderId
        AND a.classId = c.classId
        AND a.statusId = d.statusId
        AND a.roleId = e.roleId
    ");
}


/////////////////////ALL STAFF FUNCTION//////////////////////////////////////////////
function fetchStaffData($conn, $staffId, $searchKeywords )
{
    if ($staffId != '' || $searchKeywords != '') {
        return mysqli_query($conn, "
            SELECT a.staffId, a.fullName, a.emailAddress, a.phoneNumber, a.homeAddress,
            b.genderName, d.statusName, e.roleName, a.passport, a.createdTime 
            FROM staff_tab a, setup_gender_tab b, setup_status_tab d, setup_role_tab e  
            WHERE a.genderId = b.genderId
            AND a.statusId = d.statusId
            AND a.roleId = e.roleId
            AND a.staffId LIKE '%$staffId%'
            AND a.fullName LIKE '%$searchKeywords%'
            ORDER BY a.fullName ASC
        ");
    }

    return mysqli_query($conn, "
        SELECT a.staffId, a.fullName, a.emailAddress, a.phoneNumber, a.homeAddress,
        b.genderName, d.statusName, e.roleName, a.passport, a.createdTime 
        FROM staff_tab a, setup_gender_tab b, setup_status_tab d, setup_role_tab e  
        WHERE a.genderId = b.genderId
        AND a.statusId = d.statusId
        AND a.roleId = e.roleId
        ORDER BY a.fullName ASC
    ");
}

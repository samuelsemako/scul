<?php
class allClass
{
    function _getSequenceCount($conn, $counterId){
        $count=mysqli_fetch_array(mysqli_query($conn,"SELECT counterValue FROM counter_tab WHERE counterId = '$counterId' FOR UPDATE"));
         $num=$count[0]+1;
         mysqli_query($conn,"UPDATE counter_tab SET counterValue = '$num' WHERE counterId = '$counterId'")or die (mysqli_error($conn));
         if ($num<10){$no='00'.$num;}elseif($num>=10 && $num<100){$no='0'.$num;}else{$no=$num;}
         return '[{"no":"'.$no.'"}]';
    }

    function _getUserDetails($conn, $userId){
        $query=mysqli_query($conn,"SELECT * FROM user_tab WHERE userId = '$userId'")or die (mysqli_error($conn));
        $fetchQuery=mysqli_fetch_array($query);
        $userId=$fetchQuery['userId'];
        $fullName=$fetchQuery['fullName'];
        $emailAddress=$fetchQuery['emailAddress'];
        $phoneNumber=$fetchQuery['phoneNumber'];
        $passport=$fetchQuery['passport'];
        return '[{"userId":"'.$userId.'","fullName":"'.$fullName.'","emailAddress":"'.$emailAddress.'","phoneNumber":"'.$phoneNumber.'","passport":"'.$passport.'"}]';
    }
} //end of class
$callclass = new allClass();
?>

<?php
require '../connect.php';

extract($_POST);
$day = '';
if(isset($_POST['userSend']) && isset($_POST['dateSend']) && isset($_POST['daySend']) && isset($_POST['startSend']) && isset($_POST['endSend']) && isset($_POST['consultSend'])){
    $dateValue = $_POST['daySend']; 
    $day = date('l', strtotime($dateValue));
    $query = "INSERT INTO `caregiver_schedule` (`Userid`, `caregiver_schedule_date`, `caregiver_schedule_day`, `caregiver_schedule_start_time`, `caregiver_schedule_end_time`, `average_consulting_time`) VALUES ('$userSend', '$dateSend', '$day', '$startSend', '$endSend', '$consultSend')";
    $result = mysqli_query($con, $query);
}
//echo $day;
// 
// if(isset($_POST['dateSend'])){
//     $dateValue = $_POST['dateSend']; 
//     $day = date('l, d-M-y', strtotime($dateValue));
//     //echo $day, '+ good';
// }
// $name =  date('l', strtotime('2022-04-25'));
// echo $name;
?>
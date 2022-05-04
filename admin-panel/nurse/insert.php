<?php
require '../../connect.php';

extract($_POST);
$day = '';
if(isset($_POST['userSend']) && isset($_POST['dateSend']) && isset($_POST['daySend']) && isset($_POST['startSend']) && isset($_POST['endSend']) && isset($_POST['consultSend'])){
    $dateValue = $_POST['daySend']; 
    $day = date('l', strtotime($dateValue));
    $query = "INSERT INTO `nutrition_schedule` (`User_id`, `schedule_date`, `schedule_day`, `start_time`, `end_time`, `average_consulting_time`) VALUES ('$userSend', '$dateSend', '$day', '$startSend', '$endSend', '$consultSend')";
    $result = mysqli_query($con, $query);
}
?>
<?php 
//require "connect.php";
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$con = mysqli_connect('localhost', 'root', '');
$db = mysqli_select_db($con, 'home_based_care');
$success = "";
$error = "";
if(isset($_POST['update_data'])){

    $id = $_POST['update_id'];

    $s_date = $_POST['schedule-date'];
    $s_day = $_POST['schedule-day'];
    $s_start = $_POST['start-time'];
    $s_end = $_POST['end-time'];
    $s_time = $_POST['average-consulting-time'];

    $query = "UPDATE `nurse_schedule` SET `schedule_date`='$s_date', `schedule_day`='$s_day', `start_time`='$s_start', `end_time`='$s_end', `average_consulting_time`='$s_time' WHERE `id`='$id'";

    $query_run = mysqli_query($con, $query);

    if($query_run){
        $success = "Record Updated Successfully";
        //header("location: Dashboard/nurse-profile.php");
    }else{
        $error ="Record not Updated";
    }
}
?>
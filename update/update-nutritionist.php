<?php 
//require "connect.php";
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$con = mysqli_connect('localhost', 'root', '');
$db = mysqli_select_db($con, 'home_based_care');
$success = "";
$error = "";
if(isset($_POST['update_data'])){

    $id = $_POST['update_id'];

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $sname = $_POST['sname'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $status = $_POST['status'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $query = "UPDATE `nutritionist` SET `Firstname`='$fname', `Lastname`='$lname', `Surname`='$sname', `Email`='$email', `Password`='$pwd', `Date of Birth`='$dob', `Gender`='$gender', `Status`='$status', `Phone`='$phone', `Address`='$address' WHERE `id`='$id'";
    $query_run = mysqli_query($con, $query);

    if($query_run){
        $success = "Record Updated Successfully";
        //header("location: Dashboard/caregiver-profile.php");
    }else{
        $error ="Record not Updated";
    }
}
?>
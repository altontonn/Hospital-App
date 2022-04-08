<?php
require "../connect.php";
session_start();
//delete a record for nutritionist
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $result = mysqli_query($con, "DELETE FROM `nutritionist` WHERE `id`=$id");

    $_SESSION['message'] = 'The record has been deleted!'; 
    $_SESSION['msg_type'] = 'danger';
    header("location: ../records/nutritionist.php"); 
}
?>
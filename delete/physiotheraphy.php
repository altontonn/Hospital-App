<?php 
require "../connect.php";
session_start();
//delete a record for psychotherapist
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $result = mysqli_query($con, "DELETE FROM `physiotheraphy` WHERE `id`=$id");

    $_SESSION['message'] = 'The record has been deleted!'; 
    $_SESSION['msg_type'] = 'danger';
    header("location: ../records/physiotheraphy.php"); 
}
?>
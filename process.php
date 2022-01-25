<?php
require "connect.php";
//delete a record
// if(isset($_GET['delete'])){
//     $id = $_GET['delete'];
//     $mysqli ="DELETE FROM caregiver WHERE `id`=$id";
// }

//edit a record
if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    //$query = "SELECT * FROM `caregiver` WHERE `id`=$id";
    $result = mysqli_query($con, "SELECT * FROM `caregiver` WHERE `id`=$id");
    
}
?>
<?php
include "../connect.php";
if(isset($_POST['deleteSend'])){
    $id = $_POST['deleteSend'];
    $query = "DELETE FROM `nurse_schedule` WHERE `id` = $id";
    $result = mysqli_query($con, $query);
}
?>
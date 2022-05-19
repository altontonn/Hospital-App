<?php
require("../../connect.php");
readfile("../../index.html");
session_start();
if(empty($_SESSION['id']) || $_SESSION['id'] == ''){
    header("Location:../Auth/caregiver-login.php");
    die();
}
$query = "SELECT * FROM `caregiver_schedule`";
$resultAll = mysqli_query($con, $query);
if(isset($_POST['displaySend'])){
    $table = '<table class="table table-striped table-bordered" id="doctor_schedule_table" width="100%" cellspacing="0">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Schedule Date</th>
                        <th>Schedule Day</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Consulting Time</th>
                        <th colspan="2" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>';
                while($row = mysqli_fetch_array($resultAll)){
                    $table.='<tr>
                        <td>'.$row["id"].'</td>
                        <td>'.$row["Userid"].'</td>
                        <td>'.$row["date"].'</td>
                        <td>'.$row["day"].'</td>
                        <td>'.$row["start_time"].'</td>
                        <td>'.$row["end_time"].'</td>
                        <td>'.$row["consulting_time"].'</td>
                        <td><a class="btn btn-primary text-white" href="edit.php?edit='.$row['id'].'">Edit</a></td>
                        <td><a class="btn btn-danger text-white" onclick="deleteUser('.$row['id'].')">Delete</a></td>
                    </tr>';
                }
                '</tbody>';
            $table.='</table>';
            echo $table;
}
?>
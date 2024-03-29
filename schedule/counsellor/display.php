<?php
require("../../connect.php");
readfile("../../index.html");
session_start();
if(empty($_SESSION['id']) || $_SESSION['id'] == ''){
    header("Location:../Auth/counsellor-login.php");
    die();
}
$query = "SELECT * FROM `counsellor_schedule`";
$resultAll = mysqli_query($con, $query);
if(isset($_POST['displaySend'])){
    $table = '<table class="table table-striped table-bordered" id="doctor_schedule_table">
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
                    $id = $row["id"];
                    $user = $row["user_id"];
                    $date = $row["schedule_date"];
                    $day = $row["schedule_day"];
                    $start = $row["start_time"];
                    $end = $row["end_time"];
                    $consult = $row["average_consulting_time"];
                $table .= '<tr>
                    <td>'.$id.'</td>
                    <td>'.$user.'</td>
                    <td>'.$date.'</td>
                    <td>'.$day.'</td>
                    <td>'.$start.'</td>
                    <td>'.$end.'</td>
                    <td>'.$consult.'</td>
                    <td><a class="btn btn-primary text-white" href="../../edit/schedule-counsellor.php?edit='.$id.'">Edit</a></td>
                    <td><a class="btn btn-danger text-white" onclick="deleteUser('.$id.')">Delete</a></td>
                    </tr>';
                }
                '</tbody>';
            $table.='</table>';
            echo $table;
}
?>
<?php
require("../connect.php");
readfile("../index.html");
session_start();
if(empty($_SESSION['id']) || $_SESSION['id'] == ''){
    header("Location:../Auth/caregiver-login.php");
    die();
}
$query = "SELECT * FROM `caregiver_schedule`";
$resultAll = mysqli_query($con, $query);
if(isset($_POST['displaySend'])){
    $table = '<table class="table table-bordered" id="doctor_schedule_table" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Schedule Date</th>
                        <th>Schedule Day</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Consulting Time</th>
                        <th colspan="2" class="text-center">Action</th>
                    </tr>
                </thead>';
                while($row = mysqli_fetch_array($resultAll)){
                    $id = $row["id"];
                    $date = $row["caregiver_schedule_date"];
                    $day = $row["caregiver_schedule_day"];
                    $start = $row["caregiver_schedule_start_time"];
                    $end = $row["caregiver_schedule_end_time"];
                    $consult = $row["average_consulting_time"];
                $table .= '<tbody>
                    <tr>
                    <td>'.$date.'</td>
                    <td>'.$day.'</td>
                    <td>'.$start.'</td>
                    <td>'.$end.'</td>
                    <td>'.$consult.'</td>
                    <td><a class="btn btn-primary text-white" href="../edit/schedule-caregiver.php?edit='.$id.'">Edit</a></td>
                    <td><a class="btn btn-danger text-white" href="../delete/caregiver-schedule.php?delete='.$id.'">Delete</a></td>
                    </tr>
                </tbody>';
                }
            $table.='</table>';
            echo $table;
}
?>
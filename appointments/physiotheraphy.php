<?php
readfile("../index.html");
require("../connect.php");
session_start();
if(empty($_SESSION['id']) || $_SESSION['id'] == ''){
    header("Location:../Auth/patient-login.php");
    die();
}
$query = "SELECT * FROM `physiotheraphy_schedule`";
$result = mysqli_query($con, $query);
?>
<style>
    .btn, btn-primary{
        font-size: 13px;
    }
</style>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-sm-4 col-md-4 col-lg-4 col-xl-3 px-sm-2 px-0 min-vh-100" style="background-color: #212529;">
            <?php include("../Admin/patient.php") ?>
        </div>
        <div class="col py-3">
            <nav class="navbar navbar-expand-sm justify-content-center bg-primary navbar-primary">
                <!-- Brand -->
                <a class="navbar-brand" href="#"></a>

                <!-- Links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="../Dashboard/patient-profile.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="">Book Appointment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="">My Appointment</a>
                    </li>
                </ul>
            </nav>
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header"><h4>Schedule List</h4></div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" id="appointment_list_table">
                                    <thead>
                                        <tr>
                                            <th>Caregiver Name</th>
                                            <th>Appointment Date</th>
                                            <th>Appointment Day</th>
                                            <th>Available Time</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    while($row = mysqli_fetch_array($result)){
                                    ?>
                                    <tbody>
                                    <tr>
                                        <td><?php echo $row["User_id"] ?></td>
                                        <td><?php echo $row["schedule_date"] ?></td>
                                        <td><?php echo $row["schedule_day"] ?></td>
                                        <td><?php echo $row["start_time"]?> - <?php echo $row["end_time"] ?></td>
                                        <td><a class="btn btn-primary text-white" href="?edit=">Book Appointment</a></td>
                                        </tr>
                                    </tbody>
                                    <?php
                                    }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
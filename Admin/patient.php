<?php
readfile("../index.html");
require("../connect.php");
session_start();
if(empty($_SESSION['id']) || $_SESSION['id'] == ''){
    header("Location:../Auth/patient-login.php");
    die();
}

$query1 = "SELECT `Firstname`, `Lastname` FROM `caregiver` WHERE `id` = '".$_SESSION["id"]."'";
$conn = mysqli_query($con, $query1);
$query = "SELECT * FROM `caregiver_schedule`";
$result = mysqli_query($con, $query);
?>
<style>
    ul>li.list-group-item{
        background-color: #212529;
    }
    .btn, btn-primary{
        font-size: 13px;
    }
</style>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-sm-4 col-md-4 col-lg-4 col-xl-3 px-sm-2 px-0" style="background-color: #212529;">
            <div class="d-flex flex-column  rounded align-items-center  px-3 pt-2 min-vh-100">
                <div class="modal-header">

                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline text-primary">Choose Your Appointment</span>
                    </a>
                </div>
                <ul class="list-group list-group-flush flex-column" id="menu">
                    <li class="list-group-item d-flex justify-content-center">
                        <a href="../Dashboard/caregiver-profile.php" class="nav-link d-flex align-items-center px-0">
                            <i class="fs-4 bi bi-person-circle"></i><span class="ms-1 d-none d-sm-inline">Caregiver</span> </a>
                    </li>
                    <li class="list-group-item d-flex justify-content-center">
                        <a href="../schedule/caregiver.php" class="nav-link d-flex align-items-center align-middle px-0">
                            <i class="fs-4 fas fa-user-friends"></i> <span class="ms-1 d-none d-sm-inline">Counsellor</span>
                        </a>
                    </li>
                    <li class="list-group-item d-flex justify-content-center">
                        <a href="#" class="nav-link d-flex align-items-center px-0 align-middle">
                        <i class="fs-4 fas fa-user-nurse"></i><span class="ms-1 d-none d-sm-inline">Nurse</span></a>
                    </li>
                    <li class="list-group-item d-flex justify-content-center">
                        <a href="#" class="nav-link d-flex align-items-center px-0 align-middle">
                        <img src="../img/diet.png" alt="nutritionist" class="bg-primary" style="height: 20px; width: 20px;"> </i><span class="ms-1 d-none d-sm-inline">Nutritionist</span></a>
                    </li>
                    <li class="list-group-item d-flex justify-content-center">
                        <a href="#" class="nav-link d-flex align-items-center px-0 align-middle">
                        <img src="../img/psychotherapy.png" alt="nutritionist" class="bg-primary" style="height: 20px; width: 20px;"><span class="ms-1 d-none d-sm-inline">Psychotherapist</span></a>
                    </li>
                    <li class="list-group-item d-flex justify-content-center">
                        <a href="../signout/patient.php" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi bi-power"></i><span class="ms-1 d-none d-sm-inline">Logout</span> </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col py-0">
        <nav class="navbar navbar-expand-sm justify-content-center bg-primary navbar-primary">
            <!-- Brand -->
            <a class="navbar-brand" href="#"></a>

            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href="../Dashboard/patient-profile.php">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="dashboard.php">Book Appointment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="appointment.php">My Appointment</a>
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
                                        <td><?php echo $row["Userid"] ?></td>
                                        <td><?php echo $row["caregiver_schedule_date"] ?></td>
                                        <td><?php echo $row["caregiver_schedule_day"] ?></td>
                                        <td><?php echo $row["caregiver_schedule_start_time"]?> - <?php echo $row["caregiver_schedule_end_time"] ?></td>
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
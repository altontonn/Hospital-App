<?php
include ("../../connect.php");
readfile("../../index.html");
include('insert.php');
session_start();
if(empty($_SESSION['id']) || $_SESSION['id'] == ''){
    header("Location:../../Auth/admin-login.php");
    die();
}
// Selecting the admin logged in user
$admin = "SELECT * FROM `admin` WHERE `id`= '".$_SESSION["id"]."'";
$res = mysqli_query($con, $admin);
$row_admin = mysqli_fetch_array ($res);
?>

<style>
    ul > li.nav-item{
    margin-bottom: 1rem;
    }
</style>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-sm-3 col-md-3 col-lg-3 col-xl-2 px-sm-2 px-0 min-vh-100" style="background-color: #212529;">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100"  style="">
                <div class="modal-header">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline text-primary text-center">Admin Dashboard</span>
                    </a>
                </div>
                
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start pt-3" id="menu">
                    <li class="nav-item">
                        <a href="../../Dashboard/admin-profile.php" class="nav-link align-middle px-0">
                        <img src="https://img.icons8.com/office/80/000000/test-account.png" alt="profile image" style="height: 2rem; width: 2rem; color:aliceblue;"> <span class="ms-1 d-none d-sm-inline">Profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../../records/patients.php" class="nav-link align-middle px-0">
                        <img src="https://img.icons8.com/office/80/000000/hospital-bed.png" alt="patients" style="height: 2rem; width: 2rem; color:aliceblue;"> <span class="ms-1 d-none d-sm-inline">Patients</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                        <img src="https://img.icons8.com/external-flaticons-flat-flat-icons/100/000000/external-caregiver-inhome-service-flaticons-flat-flat-icons-3.png" alt="caregiver image" style="height: 2rem; width: 2rem; color:aliceblue;"> <span class="ms-1 d-none d-sm-inline">Caregiver</span> </a>
                        <ul class="collapse nav flex-column ms-5 text-white" id="submenu1" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="../../records/caregiver.php" class="nav-link px-0 text-white"><img src="https://img.icons8.com/office/80/000000/test-account.png" alt="profile image" style="height: 1rem; width: 1rem; color:aliceblue;"> <span class="d-none d-sm-inline">Profile</span></a>
                            </li>
                            <li>
                                <a href="../caregiver/caregiver.php" class="nav-link px-0 text-white"><img src="https://img.icons8.com/office/80/000000/overtime.png" alt="profile image" style="height: 1rem; width: 1rem; color:aliceblue;"> <span class="d-none d-sm-inline">Schedules</span></a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0 text-white"><img src="https://img.icons8.com/office/80/000000/new-job.png" alt="profile image" style="height: 1rem; width: 1rem; color:aliceblue;"> <span class="d-none d-sm-inline">Apointments</span></a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="nav-item">
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                        <img src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/64/000000/external-counselor-psychology-flaticons-lineal-color-flat-icons-4.png" alt="counsellor image" style="height: 2rem; width: 2rem; color:aliceblue;"> <span class="ms-1 d-none d-sm-inline">Counsellor</span> </a>
                        <ul class="collapse nav flex-column ms-5 text-white" id="submenu2" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="../../records/counsellor.php" class="nav-link px-0 text-white"><img src="https://img.icons8.com/office/80/000000/test-account.png" alt="profile image" style="height: 1rem; width: 1rem; color:aliceblue;"> <span class="d-none d-sm-inline">Profile</span></a>
                            </li>
                            <li>
                                <a href="counsellor.php" class="nav-link px-0 text-white"><img src="https://img.icons8.com/office/80/000000/overtime.png" alt="profile image" style="height: 1rem; width: 1rem; color:aliceblue;"> <span class="d-none d-sm-inline">Schedules</span></a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0 text-white"><img src="https://img.icons8.com/office/80/000000/new-job.png" alt="profile image" style="height: 1rem; width: 1rem; color:aliceblue;"> <span class="d-none d-sm-inline">Apointments</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                        <img src="https://img.icons8.com/office/80/000000/nurse-female--v1.png" alt="counsellor image" style="height: 2rem; width: 2rem; color:aliceblue;"> <span class="ms-1 d-none d-sm-inline">Nurse</span> </a>
                        <ul class="collapse nav flex-column ms-5 text-white" id="submenu3" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="../../records/nurse.php" class="nav-link px-0 text-white"><img src="https://img.icons8.com/office/80/000000/test-account.png" alt="profile image" style="height: 1rem; width: 1rem; color:aliceblue;"> <span class="d-none d-sm-inline">Profile</span></a>
                            </li>
                            <li>
                                <a href="../nurse/nurse.php" class="nav-link px-0 text-white"><img src="https://img.icons8.com/office/80/000000/overtime.png" alt="profile image" style="height: 1rem; width: 1rem; color:aliceblue;"> <span class="d-none d-sm-inline">Schedules</span></a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0 text-white"><img src="https://img.icons8.com/office/80/000000/new-job.png" alt="profile image" style="height: 1rem; width: 1rem; color:aliceblue;"> <span class="d-none d-sm-inline">Apointments</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#submenu4" data-bs-toggle="collapse" class="nav-link px-0 align-middle"><img src="https://img.icons8.com/external-flaticons-flat-flat-icons/100/000000/external-nutritionist-dieting-flaticons-flat-flat-icons.png" alt="nutritionist image" style="height: 2rem; width: 2rem; color:aliceblue;"><span class="ms-1 d-none d-sm-inline">Nutritionist</span> </a>
                        <ul class="collapse nav flex-column ms-5 text-white" id="submenu4" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="../../records/nutritionist.php" class="nav-link px-0 text-white"><img src="https://img.icons8.com/office/80/000000/test-account.png" alt="profile image" style="height: 1rem; width: 1rem; color:aliceblue;"> <span class="d-none d-sm-inline">Profile</span></a>
                            </li>
                            <li>
                                <a href="../nutritionist/nutritionist.php" class="nav-link px-0 text-white"><img src="https://img.icons8.com/office/80/000000/overtime.png" alt="profile image" style="height: 1rem; width: 1rem; color:aliceblue;"> <span class="d-none d-sm-inline">Schedules</span></a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0 text-white"><img src="https://img.icons8.com/office/80/000000/new-job.png" alt="profile image" style="height: 1rem; width: 1rem; color:aliceblue;"> <span class="d-none d-sm-inline">Apointments</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#submenu5" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                        <img src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/64/000000/external-physiotherapy-nursing-flaticons-lineal-color-flat-icons.png" alt="physiotheraphy image" style="height: 2rem; width: 2rem; color:aliceblue;"> <span class="ms-1 d-none d-sm-inline">Psychotherapist</span> </a>
                        <ul class="collapse nav flex-column ms-5 text-white" id="submenu5" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="../../records/physiotheraphy.php" class="nav-link px-0 text-white"><img src="https://img.icons8.com/office/80/000000/test-account.png" alt="profile image" style="height: 1rem; width: 1rem; color:aliceblue;"> <span class="d-none d-sm-inline">Profile</span></a>
                            </li>
                            <li>
                                <a href="../counsellor/counsellor.php" class="nav-link px-0 text-white"><img src="https://img.icons8.com/office/80/000000/overtime.png" alt="profile image" style="height: 1rem; width: 1rem; color:aliceblue;"> <span class="d-none d-sm-inline">Schedules</span></a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0 text-white"><img src="https://img.icons8.com/office/80/000000/new-job.png" alt="profile image" style="height: 1rem; width: 1rem; color:aliceblue;"> <span class="d-none d-sm-inline">Apointments</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-toggle="dropdown">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipMHO5l8JMT1a4CU7_K-7f_CP3gC1LIQ05NBpD1u=w768-h768-n-o-v1" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1"><?php echo $row_admin['Firstname'] ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- <li><a class="dropdown-item" href="admin.php">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li> -->
                        <li class="text-center"><a class="text-decoration-none text-dark" href="../../signout/admin.php">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col py-3">
            <h4 class="mb-4 text-gray-800">Counsellor Schedule</h4>
        <!-- <span id="message"></span> -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col">
                            <h6 class="m-0 font-weight-bold text-primary">Counsellor Schedule List</h6>
                        </div>
                        <div class="col" align="right">
                            <button type="button" name="add_exam" data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-success btn-circle btn-sm"><i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                </div>
                <div class="text-success bg-light text-center fs-5" id="msgr"></div>
                <div class="text-success bg-light text-center fs-5" id="del-msg"></div>
                <div class="card-body" id="displayDataTable"></div>
            </div>
        </div>
        <!-- Modal form -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modal_title">Add Counsellor Schedule Data</h4>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group p-3">
                                <label for="firstname">Name</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-person"></i></span>
                                    <select type="text" class="form-control" id="user-name" name="user-name">
                                        <option value="">Select a Counsellorr</option>
                                        <?php
                                            $choose = "SELECT * FROM `counsellor`";
                                            $chos = mysqli_query($con, $choose);
                                            while($row=mysqli_fetch_array($chos)){
                                                echo '
                                                    <option value="'.$row["Firstname"].' '.$row["Lastname"].'">'.$row["Firstname"].' '.$row["Lastname"].'</option>';
                                                }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group p-3">
                                <label for="firstname">Schedule Date</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                    <input type="text" class="form-control" id="schedule-date" name="schedule-date">
                                </div>
                            </div>
                            <div class="form-group p-3">
                                <label for="start time">Start Time</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-clock"></i></span>
                                    <input type="time" class="form-control" id="start-time" name="start-time">
                                </div>
                            </div>
                            <div class="form-group p-3">
                                <label for="surname">End Time</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-clock"></i></span>
                                    <input type="time" class="form-control" id="end-time" name="end-time">
                                </div>
                            </div>
                            <div class="form-group p-3">
                                <label for="email">Average Consulting time</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-clock"></i></span>
                                    <select name="average-consulting-time" id="average-consulting-time" class="form-control" required>
                                        <option value="">Select Consulting Duration</option>
                                        <?php
                                        $count = 0;
                                        for($i = 1; $i <= 15; $i++)
                                        {
                                            $count += 5;
                                            echo '<option value="'.$count.'">'.$count.' Minute</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="addUser()">Add</button>
                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<script>
        
$(document).ready(function(){
    var date = new Date();
    date.setDate(date.getDate());

    $('#schedule-date').datepicker({
        startDate: date,
        format: "yyyy-mm-dd"
    });
    displayData();
})
    //display data function
    function displayData(){
        let displayData = "true";
        $.ajax({
            url: "display.php",
            type: "post",
            data:{
                displaySend: displayData
            },
            success:function(data, status){
                $('#displayDataTable').html(data);
            }
        })
    }

    function addUser(){
        let userAdd = $('#user-name').val();
        let dateAdd = $('#schedule-date').val();
        let dayAdd = $('#schedule-date').val();
        let startAdd = $('#start-time').val();
        let endAdd = $('#end-time').val();
        let consultAdd = $('#average-consulting-time').val();
        //console.log(dateAdd);
        // date('l', strtotime($_POST["doctor_schedule_date"]))
        $.ajax({
            url:"insert.php",
            type: "post",
            data:{
                userSend: userAdd,
                dateSend: dateAdd,
                daySend: dayAdd,
                startSend: startAdd,
                endSend: endAdd,
                consultSend: consultAdd
            },
            success:function(data, status){
                displayData();
                $('#msgr').html(data);
                $('#msg').html("Schedule Inserted Successfully").fadeIn('slow')  
                setTimeout(function(){
                    $('#msg').fadeOut('slow')
                }, 5000)
            }
        });
    }
    //delete a record
    function deleteUser(deleteId){
            $.ajax({
                url:"../../delete/counsellor-schedule.php",
                type: 'post',
                data:{
                    deleteSend: deleteId
                },
                success:function(data, status){
                    displayData();
                    $('#del-msg').html("Schedule Delete Successfully").fadeIn('slow')  
                    setTimeout(function(){
                    $('#del-msg').fadeOut('slow')
                }, 5000)
                }
            })

        }
    
</script>
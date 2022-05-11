<?php
include ("../../connect.php");
readfile("../../index.html");
include('insert.php');
session_start();
if(empty($_SESSION['id']) || $_SESSION['id'] == ''){
    header("Location:../Auth/nurse-login.php");
    die();
}
$userid = "SELECT `Firstname`, `Lastname` FROM `nurse` WHERE `id`= '".$_SESSION["id"]."'";
$user_query = mysqli_query($con, $userid);
$user_row = mysqli_fetch_array($user_query);
$query = "SELECT * FROM `nurse_schedule`";
$resultAll = mysqli_query($con, $query);
?>
<style>
    ul > li.nav-item{
        margin-bottom: 1rem;
    }
</style>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0" style="position: fixed; z-index: 1;  background-color: #212529;">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <div class="modal-header">
                    <a href="" class="d-flex align-items-center pb-1 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline text-primary text-center">Nurse</span>
                    </a>
                </div>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start pt-3" id="menu">
                    <li class="nav-item">
                        <a href="../../Dashboard/nurse-profile.php" class="nav-link px-0 align-middle">
                        <img src="https://img.icons8.com/office/80/000000/test-account.png" alt="profile image" style="height: 2rem; width: 2rem; color:aliceblue;"> <span class="ms-1 d-none d-sm-inline">Profile</span> </a>
                    </li>
                    <li class="nav-item">
                        <a href="Nurse.php" class="nav-link align-middle px-0">
                        <img src="https://img.icons8.com/office/80/000000/overtime.png" alt="profile image" style="height: 2rem; width: 2rem; color:aliceblue;"> <span class="ms-1 d-none d-sm-inline">Schedule</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link px-0 align-middle">
                        <img src="https://img.icons8.com/office/80/000000/new-job.png" alt="profile image" style="height: 2rem; width: 2rem; color:aliceblue;"> <span class="ms-1 d-none d-sm-inline">Appointments</span></a>
                    </li>
                    <li>
                        <a href="../../signout/Nurse.php" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi bi-power" style="color: aliceblue;"></i><span class="ms-1 d-none d-sm-inline">Logout</span> </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col py-3" style="padding-left: 15rem;">
            <h4 class="mb-4 text-gray-800">Nurse Schedule</h4>
        <!-- <span id="message"></span> -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col">
                            <h6 class="m-0 font-weight-bold text-primary">Nurse Schedule List</h6>
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
                        <h4 class="modal-title" id="modal_title">Add Nurse Schedule Data</h4>
                    </div>
                    
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group p-3">
                                    <label for="firstname">Name</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
                                        <input type="text" class="form-control" id="user-name" name="user-name" value="<?php echo $user_row["Firstname"] ?> <?php echo $user_row["Lastname"] ?>">
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
                                            $min = ' Minute';
                                            for($i = 1; $i <= 15; $i++)
                                            {
                                                $count += 5;
                                                echo '<option value="'.$count.''.$min.'">'.$count.' Minute</option>';
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
                url:"../../delete/nurse-schedule.php",
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
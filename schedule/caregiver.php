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
extract($_POST);
if(isset($_POST['dateSend']) && isset($_POST['daySend']) && isset($_POST['startSend']) && isset($_POST['endSend']) && isset($_POST['consultSend'])){

    $query = "INSERT INTO `caregiver_schedule` (`caregiver_schedule_date`, `caregiver_schedule_day`, `caregiver_schedule_start_time`, `caregiver_schedule_end_time`, `average_consulting_time`) VALUES ('$dateSend', '$daySend', '$startSend', '$endSend', '$consultSend')";
    $result = mysqli_query($con, $query);
}
?>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li>
                        <a href="../Admin/caregiver.php" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi bi-person-circle"></i><span class="ms-1 d-none d-sm-inline">Profile</span> </a>
                    </li>
                    <li class="nav-item">
                        <a href="../schedule/caregiver.php" class="nav-link align-middle px-0">
                            <i class="fs-4 bi bi-clock"></i> <span class="ms-1 d-none d-sm-inline">Caregiver schedule</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                        <i class="fs-4 bi bi-clipboard-plus"></i><span class="ms-1 d-none d-sm-inline">Appointments</span></a>
                    </li>
                    <li>
                        <a href="../signout/caregiver.php" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi bi-power"></i><span class="ms-1 d-none d-sm-inline">Logout</span> </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col py-3">
            <h4 class="mb-4 text-gray-800">Caregiver Schedule</h4>
        <!-- <span id="message"></span> -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col">
                            <h6 class="m-0 font-weight-bold text-primary">Caregiver Schedule List</h6>
                        </div>
                        <div class="col" align="right">
                            <button type="button" name="add_exam" data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-success btn-circle btn-sm"><i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                </div>
                <div class="message text-success bg-light text-center fs-5" id="msg"></div>
                <div class="card-body" id="displayDataTable">
                    <?php
                    //extract($_POST);
                    if(mysqli_num_rows($resultAll)>0){
                        if(isset($_SESSION['message'])):
                    ?>
                        <div class="alert alert-<?=$_SESSION['msg_type'];?>">
                            <?php 
                                echo $_SESSION['message']; 
                                unset($_SESSION['message']);
                            ?>
                        </div>
                        <?php endif ?>
                        
                        <?php 
                        } else{
                            ?>
                            <div class="alert alert-danger text-center">
                                <strong><?php echo 'No records found!!'; ?></strong>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal form -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modal_title">Add Caregiver Schedule Data</h4>
                    </div>
                    
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group p-3">
                                    <label for="firstname">Schedule Date</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                        <input type="date" class="form-control" id="schedule-date" name="schedule-date">
                                    </div>
                                </div>
                                <div class="form-group p-3">
                                    <label for="start time">Schedule Day</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-clock"></i></span>
                                        <input type="weekdays" class="form-control" id="schedule-day" name="schedule-day">
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
//to make data stay  in page
$(document).ready(function(){
    displayData();
})
    //display data function
    function displayData(){
        let displayData = "true";
        $.ajax({
            url: "displayCaregiver.php",
            type: "POST",
            data:{
                displaySend: displayData
            },
            success:function(data, status){
                $('#displayDataTable').html(data);
            }
        })
    }

    function addUser(){
        let dateAdd = $('#schedule-date').val();
        let dayAdd = $('#schedule-day').val();
        let startAdd = $('#start-time').val();
        let endAdd = $('#end-time').val();
        let consultAdd = $('#average-consulting-time').val();

        $.ajax({
            url:"caregiver.php",
            type: "POST",
            data:{
                dateSend: dateAdd,
                daySend: dayAdd,
                startSend: startAdd,
                endSend: endAdd,
                consultSend: consultAdd
            },
            success:function(data, status){
                $('#msg').html(data).fadeIn('slow');
                $('#msg').html("Schedule Inserted Successfully").fadeIn('slow') //also show a success message 
                setTimeout(function(){
                    $('#msg').fadeOut('slow')
                }, 5000)
                displayData();
            }
        });
    }
</script>
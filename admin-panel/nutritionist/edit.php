<?php 
require_once("../../connect.php");
readfile("../../index.html");
include("../../update/update-nurse-schedule.php");

session_start();
$id = $_GET['edit'];
$query = "SELECT * FROM `nutrtionist_schedule` WHERE `id` = '$id'";
$result = mysqli_query($con, $query);

while($row = mysqli_fetch_assoc($result)){

?>
<style>
    .form{
        /* margin: 0 auto;
        width: 80%; */
        border: 1px groove; 
        border-radius: 10px;
        background-color: #e6e6e6;
    }
    .button, .btn{
        width: 8rem;
    }
</style>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-lg-4 mx-auto">
        <form action="" class="form my-2" method="POST">
        <div class="message text-danger text-center fs-5" ><?php if($error!="") { echo $error; } ?></div>
        <div class="message text-success bg-light text-center fs-5" ><?php if($success!="") { echo $success; } ?></div>
        <input type="hidden" name="update_id" id="update_id" value="<?php echo $row['id']; ?>">
            <div class="row">
                <div class="col">
                    <div class="form-group p-3">
                        <label for="firstname">Schedule Date</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            <input type="date" class="form-control" id="schedule-date" name="schedule-date" value="<?php echo $row["caregiver_schedule_date"] ?>">
                        </div>
                    </div>
                    <div class="form-group p-3">
                        <label for="start time">Schedule Day</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-clock"></i></span>
                            <input type="weekdays" class="form-control" id="schedule-day" name="schedule-day" value="<?php echo  $row["caregiver_schedule_day"]?>">
                        </div>
                    </div>
                    <div class="form-group p-3">
                        <label for="start time">Start Time</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-clock"></i></span>
                            <input type="time" class="form-control" id="start-time" name="start-time" value="<?php echo  $row["caregiver_schedule_start_time"] ?>">
                        </div>
                    </div>
                    <div class="form-group p-3">
                        <label for="surname">End Time</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-clock"></i></span>
                            <input type="time" class="form-control" id="end-time" name="end-time" value="<?php echo  $row["caregiver_schedule_end_time"] ?>">
                        </div>
                    </div>
                    <div class="form-group p-3">
                        <label for="email">Average Consulting time</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-clock"></i></span>
                            <select name="average-consulting-time" id="average-consulting-time" class="form-control" value="<?php echo $row["average_consulting_time"]?>">
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
            <button type="submit" name="update_data" class="btn btn-primary my-2 mx-3 text-white">Update</button>
        </form>
        <a href="nutritionist.php" class="nav-link px-0 align-middle">
                <i class="bi bi-arrow-return-left text-primary"></i><span class="ms-1 d-none d-sm-inline fs-6">Back</span> </a>
        </div>
    </div>
</div>
<?php } ?>
<script>
    $(function(){
   setTimeout(function() {
       $(".message").fadeOut('slow');
   }, 3000);
});
</script>
<?php
readfile("../index.html");
require("../connect.php");
session_start();
if(empty($_SESSION['id']) || $_SESSION['id'] == ''){
    header("Location:../Auth/patient-login.php");
    die();
}
$query1 = "SELECT * FROM `patient` WHERE `id`= '".$_SESSION["id"]."'";
$result1 = mysqli_query($con, $query1);
$row1 = mysqli_fetch_array ($result1);

$query = "SELECT * FROM `caregiver_schedule`";
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
                    <div class="card-header"><h4>Caregiver Schedule List</h4></div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" id="appointment_list_table">
                                    <thead class="bg-primary text-white">
                                        <tr>
                                            <th>Caregiver Name</th>
                                            <th>Appointment Date</th>
                                            <th>Appointment Day</th>
                                            <th>Available Time</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $count = 0;
                                    while($row = mysqli_fetch_array($result)){
                                        $count++;
                                    ?>
                                    <tr>
                                        <td><?php echo $row["Userid"] ?></td>
                                        <td><?php echo $row["date"] ?></td>
                                        <td><?php echo $row["day"] ?></td>
                                        <td><?php echo $row["start_time"]?> - <?php echo $row["end_time"] ?></td>
                                        <td><button type="button" class="btn btn-primary text-white email-button" name="email-button" id="<?php echo $count ?>" data-user="<?php echo $row1["Firstname"] ?> <?php echo $row1["Lastname"] ?>" data-caregiver="<?php echo $row["Userid"] ?>" data-contact="<?php echo $row1["Phone"] ?>" data-date="<?php echo $row["date"] ?>" data-day="<?php echo $row["day"] ?>" data-start="<?php echo $row["start_time"] ?>" data-end="<?php echo $row["end_time"] ?>">Book Appointment</button></td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('.email-button').click(function(){
            $(this).attr('disabled', true);
            let id = $(this).attr('id');
            //console.log(id);
            let email_data = [];
            email_data.push({
                user: $(this).data("user"),
                caregiver: $(this).data("caregiver"),
                contact: $(this).data("contact"),
                date: $(this).data("date"),
                day: $(this).data("day"),
                start: $(this).data("start"),
                end: $(this).data("end")
            })
            $.ajax({
                url: "../book/caregiver.php",
                method: "POST",
                data:{
                    email_data: email_data
                },
                beforeSend: function(){
                    $("#"+id).html("Booking...");
                    $("#"+id).addClass("btn-danger"); 
                },
                success: function(data){
                    if(data){
                        $("#"+id).html("Booked");
                        $("#"+id).removeClass("btn-danger");
                        $("#"+id).removeClass("btn-info");
                        $("#"+id).addClass("btn-success");
                    }else{
                        $("#"+id).text(data);
                    }
                    $("#"+id).attr('disabled', true);
                }
            })
        });
    });
</script>
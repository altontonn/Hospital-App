<?php
include ('../update/update-admin.php');
include("../index.html");
$connect = new mysqli('localhost', 'root', '', 'home_based_care');
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
session_start();
if(empty($_SESSION['id']) || $_SESSION['id'] == ''){
    header("Location:../Auth/admin-login.php");
    die();
}
$query = "SELECT * FROM `admin` WHERE `id`= '".$_SESSION["id"]."'";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_array ($result);
?>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <?php include("../Admin/admin.php"); ?>
        </div>
        <div class="col py-3">
        <form action="admin.php" class="form" method="POST">
            <div class="message text-danger text-center fs-5" ><?php if($error!="") { echo $error; } ?></div>
            <div class="message text-success bg-light text-center fs-5" ><?php if($success!="") { echo $success; } ?></div>
            <div class="row">
                <div class="col">
                    <h4 class="font-weight-bold text-primary">Admin Profile</h4>
                </div>
                <div clas="col" align="right">
                    <input type="hidden" name="action" value="admin_profile" />
                    <a class="btn btn-primary text-white" data-bs-toggle="modal" data-bs-target="#myModal"> Edit</a>
                    &nbsp;&nbsp;
                </div>
            </div>
            <div class="row">
                
                <div class="col-lg-6">
                    <div class="form-group p-3">
                        <label for="firstname">Admin Firstname</label>
                        <input type="text" class="form-control" id="fname" placeholder="Enter your firstname" name="fname" value="<?php echo $row['Firstname']; ?>">
                    </div>
                    <div class="form-group p-3">
                        <label for="lastname">Admin Lastname</label>
                        <input type="text" class="form-control" id="lname" placeholder="Enter your lastname" name="lname" value="<?php echo $row['Lastname'] ?>">
                    </div>
                    <div class="form-group p-3">
                        <label for="surname">Admin Surname</label>
                        <input type="text" class="form-control" id="sname" placeholder="Enter your surname" name="sname" value="<?php echo $row['Surname'] ?>">
                    </div>
                    <div class="form-group p-3">
                        <label for="email">Admin Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $row['Email'] ?>">
                    </div>
                    <div class="form-group p-3">
                        <label for="pwd">Admin Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" value="<?php echo $row['Password'] ?>">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group p-3">
                        <label for="dob">Admin Date of Birth:</label>
                        <input type="date" class="form-control" id="DOB" placeholder="Enter Date of Birth" name="dob" value="<?php echo $row['Date of Birth'] ?>">
                    </div>
                    <div class="form-group p-3">
                        <label for="Gender">Admin Gender:</label><br>
                        <input type="gender" class="form-control" id="gender" placeholder="Enter status" name="gender" value="<?php echo $row['Gender'] ?>">
                    </div>
                    <div class="form-group p-3">
                        <label for="status">Admin Status:</label>
                        <input type="status" class="form-control" id="status" placeholder="Enter status" name="status" value="<?php echo $row['Status'] ?>">
                    </div>
                    <div class="form-group p-3">
                        <label for="phone">Admin Phone:</label>
                        <input type="phone" class="form-control" id="phone" placeholder="Enter Phone" name="phone" value="<?php echo $row['Phone'] ?>">
                    </div>
                    <div class="form-group p-3">
                        <label for="address">Admin Address:</label>
                        <input type="address" class="form-control" id="address" placeholder="Enter address" name="address" value="<?php echo $row['Address'] ?>">
                    </div>
                </div>
            </div>
        </form>
        </div>
        
        <!-- ########################################################################################## -->
        <!-- Edit Modal Form -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="" method="POST">
                        <input type="hidden" name="update_id" id="update_id" value="<?php echo $row['id']; ?>">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group p-3">
                                    <label for="firstname">Admin Firstname</label>
                                    <input type="text" class="form-control" id="fname" placeholder="Enter your firstname" name="fname" value="<?php echo $row['Firstname']; ?>">
                                </div>
                                <div class="form-group p-3">
                                    <label for="lastname">Admin Lastname</label>
                                    <input type="text" class="form-control" id="lname" placeholder="Enter your lastname" name="lname" value="<?php echo $row['Lastname'] ?>">
                                </div>
                                <div class="form-group p-3">
                                    <label for="surname">Admin Surname</label>
                                    <input type="text" class="form-control" id="sname" placeholder="Enter your surname" name="sname" value="<?php echo $row['Surname'] ?>">
                                </div>
                                <div class="form-group p-3">
                                    <label for="email">Admin Email:</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $row['Email'] ?>">
                                </div>
                                <div class="form-group p-3">
                                    <label for="pwd">Admin Password:</label>
                                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" value="<?php echo $row['Password'] ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group p-3">
                                    <label for="dob">Admin Date of Birth:</label>
                                    <input type="date" class="form-control" id="DOB" placeholder="Enter Date of Birth" name="dob" value="<?php echo $row['Date of Birth'] ?>">
                                </div>
                                <div class="form-group p-3">
                                    <label for="Gender">Admin Gender:</label><br>
                                    <input type="gender" class="form-control" id="gender" placeholder="Enter status" name="gender" value="<?php echo $row['Gender'] ?>">
                                </div>
                                <div class="form-group p-3">
                                    <label for="status">Admin Status:</label>
                                    <input type="status" class="form-control" id="status" placeholder="Enter status" name="status" value="<?php echo $row['Status'] ?>">
                                </div>
                                <div class="form-group p-3">
                                    <label for="phone">Admin Phone:</label>
                                    <input type="phone" class="form-control" id="phone" placeholder="Enter Phone" name="phone" value="<?php echo $row['Phone'] ?>">
                                </div>
                                <div class="form-group p-3">
                                    <label for="address">Admin Address:</label>
                                    <input type="address" class="form-control" id="address" placeholder="Enter address" name="address" value="<?php echo $row['Address'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="update_data" data-bs-dismiss="modal">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function(){
   setTimeout(function() {
       $(".message").fadeOut('slow');
   }, 5000);
});
</script>
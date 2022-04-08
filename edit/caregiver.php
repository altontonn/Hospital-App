<?php 
require_once("../connect.php");
readfile("../index.html");
include("../update/update-caregiver.php");

session_start();
$user_id = $_GET['edit'];
$query = "SELECT * FROM `caregiver` WHERE `id` = '$user_id'";
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
        <div class="col-lg-6 mx-auto">
        <form action="" class="form my-2" method="POST">
        <div class="message text-danger text-center fs-5" ><?php if($error!="") { echo $error; } ?></div>
        <div class="message text-success bg-light text-center fs-5" ><?php if($success!="") { echo $success; } ?></div>
        <input type="hidden" name="update_id" id="update_id" value="<?php echo $row['id']; ?>">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group p-3">
                        <label for="firstname">Caregiver Firstname</label>
                        <input type="text" class="form-control" id="fname" placeholder="Enter your firstname" name="fname" value="<?php echo $row['Firstname']; ?>">
                    </div>
                    <div class="form-group p-3">
                        <label for="lastname">Caregiver Lastname</label>
                        <input type="text" class="form-control" id="lname" placeholder="Enter your lastname" name="lname" value="<?php echo $row['Lastname'] ?>">
                    </div>
                    <div class="form-group p-3">
                        <label for="surname">Caregiver Surname</label>
                        <input type="text" class="form-control" id="sname" placeholder="Enter your surname" name="sname" value="<?php echo $row['Surname'] ?>">
                    </div>
                    <div class="form-group p-3">
                        <label for="email">Caregiver Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $row['Email'] ?>">
                    </div>
                    <div class="form-group p-3">
                        <label for="pwd">Caregiver Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" value="<?php echo $row['Password'] ?>">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group p-3">
                        <label for="dob">Caregiver Date of Birth:</label>
                        <input type="DOB" class="form-control" id="DOB" placeholder="Enter Date of Birth" name="dob" value="<?php echo $row['Date of Birth'] ?>">
                    </div>
                    <div class="form-group p-3">
                        <label for="Gender">Caregiver Gender:</label><br>
                        <input type="gender" class="form-control" id="gender" placeholder="Enter status" name="gender" value="<?php echo $row['Gender'] ?>">
                    </div>
                    <div class="form-group p-3">
                        <label for="status">Caregiver Status:</label>
                        <input type="status" class="form-control" id="status" placeholder="Enter status" name="status" value="<?php echo $row['Status'] ?>">
                    </div>
                    <div class="form-group p-3">
                        <label for="phone">Caregiver Phone:</label>
                        <input type="phone" class="form-control" id="phone" placeholder="Enter Phone" name="phone" value="<?php echo $row['Phone'] ?>">
                    </div>
                    <div class="form-group p-3">
                        <label for="address">Caregiver Address:</label>
                        <input type="address" class="form-control" id="address" placeholder="Enter address" name="address" value="<?php echo $row['Address'] ?>">
                    </div>
                </div>
            </div>
            <button type="submit" name="update_data" class="btn btn-primary my-2 mx-3 text-white">Update</button>
        </form>
        <a href="../records/caregiver.php" class="nav-link px-0 align-middle">
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
<?php
readfile("../index.html");
require '../connect.php';
?>

<?php
    $message="";
    $success="";
    if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['sname']) && isset($_POST['email']) && isset($_POST['pwd']) && isset($_POST['dob']) && isset($_POST['gender']) && isset($_POST['status']) && isset($_POST['phone']) && isset($_POST['address'])){
        $fname = mysqli_real_escape_string($con, $_POST['fname']);
        $lname = mysqli_real_escape_string($con, $_POST['lname']);
        $sname = mysqli_real_escape_string($con, $_POST['sname']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $pwd = mysqli_real_escape_string($con, $_POST['pwd']);
        $dob = mysqli_real_escape_string($con, $_POST['dob']);
        $gender = mysqli_real_escape_string($con, $_POST['gender']);
        $status = mysqli_real_escape_string($con, $_POST['status']);
        $phone = mysqli_real_escape_string($con, $_POST['phone']);
        $address = mysqli_real_escape_string($con, $_POST['address']); 
        if(!empty($fname) && !empty($lname) && !empty($sname) && !empty($email) && !empty($pwd) && !empty($dob) && !empty($gender) && !empty($status) && !empty($phone) && !empty($address)){
            $query = "SELECT `Firstname`, `Lastname`, `Surname`, `Email`, `Password`, `Date of Birth`, `Gender`, `Status`, `Phone`, `Address` FROM `nutritionist` WHERE `Firstname`='$fname' AND `Lastname`='$lname' AND `Surname`='$sname' AND `Email`='$email' AND `Password`='$pwd' AND `Date of Birth`='$dob' AND `Gender`='$gender' AND `Status`='$status' AND `Phone`='$phone' AND `Address`='$address'";
            $query_run = mysqli_query($con, $query);
            $sql = "SELECT `Email` From `nutritionist` WHERE `Email`='$email'";
            $result =mysqli_query($con, $sql);
            if(mysqli_num_rows($result) > 0){
                $message = "There is already a user with that email!";
            }else{
                $query = "INSERT INTO `nutritionist` VALUES ('','".($fname)."','".($lname)."','".($sname)."','".($email)."','".($pwd)."','".($dob)."','".($gender)."','".($status)."','".($phone)."','".($address)."')";

                if($query_run = mysqli_query($con, $query)){
                    $success = "Registered successfully";
                }else{
                    $message = "Sorry we couldn\'t register you at this time. Please try again later...";
                }
            }
        }else{
            $message = "Fill in all the fields";
        }
    }  
?>

<div class="container">
    <h2 class="border p-2 mt-2">Register</h2>
    <form action="#" method="POST" class="border p-2">
    <div class="message text-danger text-center fs-5" ><?php if($message!="") { echo $message; } ?></div>
    <div class="message text-success bg-light text-center fs-5" ><?php if($success!="") { echo $success; } ?></div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group p-3">
                    <label for="firstname">Nutritionist Firstname</label>
                    <input type="text" class="form-control" id="fname" placeholder="Enter your firstname" name="fname">
                </div>
                <div class="form-group p-3">
                    <label for="lastname">Nutritionist Lastname</label>
                    <input type="text" class="form-control" id="lname" placeholder="Enter your lastname" name="lname">
                </div>
                <div class="form-group p-3">
                    <label for="surname">Nutritionist Surname</label>
                    <input type="text" class="form-control" id="sname" placeholder="Enter your surname" name="sname">
                </div>
                <div class="form-group p-3">
                    <label for="email">Nutritionist Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="form-group p-3">
                    <label for="pwd">Nutritionist Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group p-3">
                    <label for="dob">Nutritionist Date of Birth:</label>
                    <input type="date" class="form-control" id="DOB" placeholder="Enter Date of Birth" name="dob">
                </div>
                <div class="form-group p-3">
                    <label for="Gender">Nutritionist Gender:</label><br>
                    <input type="radio" name="gender" value="Male"> Male
                    <input type="radio" name="gender" value="Female"> Female
                </div>
                <div class="form-group p-3">
                    <label for="status">Nutritionist Status:</label>
                    <input type="status" class="form-control" id="status" placeholder="Enter status" name="status">
                </div>
                <div class="form-group p-3">
                    <label for="phone">Nutritionist Phone:</label>
                    <input type="phone" class="form-control" id="phone" placeholder="Enter Phone" name="phone">
                </div>
                <div class="form-group p-3">
                    <label for="address">Nutritionist Address:</label>
                    <input type="address" class="form-control" id="address" placeholder="Enter address" name="address">
                </div>
            </div>
        </div>
    <input type="submit" name="submit" value="Register" class="btn bg-primary text-white">
</form>
<a href="../records/nutritionist.php" class="nav-link px-0 align-middle">
                <i class="bi bi-arrow-return-left text-primary"></i><span class="ms-1 d-none d-sm-inline fs-6">Back</span> </a>

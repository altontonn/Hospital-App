<?php
readfile("../index.html");
require '../connect.php';
?>

<div class="container">
    <h2 class="border p-2 mt-2">Register</h2>
    <form action="#" method="POST" class="border p-2">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group p-3">
                    <label for="firstname">Admin Firstname</label>
                    <input type="text" class="form-control" id="fname" placeholder="Enter your firstname" name="fname">
                </div>
                <div class="form-group p-3">
                    <label for="lastname">Admin Lastname</label>
                    <input type="text" class="form-control" id="lname" placeholder="Enter your lastname" name="lname">
                </div>
                <div class="form-group p-3">
                    <label for="surname">Admin Surname</label>
                    <input type="text" class="form-control" id="sname" placeholder="Enter your surname" name="sname">
                </div>
                <div class="form-group p-3">
                    <label for="email">Admin Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="form-group p-3">
                    <label for="pwd">Admin Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group p-3">
                    <label for="dob">Admin Date of Birth:</label>
                    <input type="DOB" class="form-control" id="DOB" placeholder="Enter Date of Birth" name="dob">
                </div>
                <div class="form-group p-3">
                    <label for="Gender">Admin Gender:</label><br>
                    <input type="radio" name="gender" value="Male"> Male
                    <input type="radio" name="gender" value="Female"> Female
                </div>
                <div class="form-group p-3">
                    <label for="status">Admin Status:</label>
                    <input type="status" class="form-control" id="status" placeholder="Enter status" name="status">
                </div>
                <div class="form-group p-3">
                    <label for="phone">Admin Phone:</label>
                    <input type="phone" class="form-control" id="phone" placeholder="Enter Phone" name="phone">
                </div>
                <div class="form-group p-3">
                    <label for="address">Admin Address:</label>
                    <input type="address" class="form-control" id="address" placeholder="Enter address" name="address">
                </div>
            </div>
        </div>
    <input type="submit" name="submit" value="Register" class="btn bg-primary text-white"> Already a member, <a href="alogin.php">Sign in</a>
</form>

<?php
    if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['sname']) && isset($_POST['email']) && isset($_POST['pwd']) && isset($_POST['dob']) && isset($_POST['gender']) && isset($_POST['status']) && isset($_POST['phone']) && isset($_POST['address'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $sname = $_POST['sname'];
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $status = $_POST['status'];
        $phone = $_POST['phone'];
        $address = $_POST['address']; 
        if(!empty($fname) && !empty($lname) && !empty($sname) && !empty($email) && !empty($pwd) && !empty($dob) && !empty($gender) && !empty($status) && !empty($phone) && !empty($address)){
            $query = "SELECT `Firstname`, `Lastname`, `Surname`, `Email`, `Password`, `Date of Birth`, `Gender`, `Status`, `Phone`, `Address` FROM `Admin` WHERE `Firstname`='$fname' AND `Lastname`='$lname' AND `Surname`='$sname' AND `Email`='$email' AND `Password`='$pwd' AND `Date of Birth`='$dob' AND `Gender`='$gender' AND `Status`='$status' AND `Phone`='$phone' AND `Address`='$address'";
            $query_run = mysqli_query($con, $query);
            $sql = "SELECT `Email` From `admin` WHERE `Email`='$email'";
            $result =mysqli_query($con, $sql);
            if(mysqli_num_rows($result) > 0){
                echo '<h5 style="color: red; text-align: center;">There is already a user with that email!</h5>';
            }else{
                $query = "INSERT INTO `admin` VALUES ('','".($fname)."','".($lname)."','".($sname)."','".($email)."','".($pwd)."','".($dob)."','".($gender)."','".($status)."','".($phone)."','".($address)."')";

                if($query_run = mysqli_query($con, $query)){
                    echo '<h5 style="color: green; text-align: center;">Registered Successfully</h5>';
                }else{
                    echo '<h5 style="color: red"; text-align: center;>Sorry we couldn\'t register you at this time. Please try again later...</h5>';
                }
            }
        }else{
            echo '<h5 style="color: red; text-align: center;">Fill in all the fields</h5>';
        }
    }  
?>

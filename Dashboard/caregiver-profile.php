<?php
readfile("../index.html");
?>
<?php
    session_start();
    $connect = new mysqli('localhost', 'root', '', 'home_based_care');
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $query = "SELECT * FROM `caregiver` WHERE `id`= '".$_SESSION["id"]."'";
    $result = mysqli_query($connect, $query);

//EDIT THIS WHILE to be a conditional check if you have results and output the variable. 
$row = mysqli_fetch_array ($result);
    // $rowcount=mysqli_num_rows($result);

    // if($rowcount > 0){
    // //echo or output user information like the username from your mysql result set.
    // echo $_SESSION['Firstname'];
    // }

?>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="form">
            <div class="row">
                <div class="col">
                    <h4 class="font-weight-bold text-primary">Profile</h4>
                </div>
                <div clas="col" align="right">
                    <input type="hidden" name="action" value="admin_profile" />
                    <button type="submit" name="edit_button" id="edit_button" class="btn btn-primary btn-sm"> Edit</button>
                    <button type="submit" name="edit_button" id="edit_button" class="btn btn-primary btn-sm"> Save</button>
                    &nbsp;&nbsp;
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group p-3">
                        <label for="firstname">Caregiver Firstname</label>
                        <input type="text" class="form-control" id="fname" placeholder="Enter your firstname" name="fname" value="<?php echo $row['Firstname'] ?>">
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
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group p-3">
                        <label for="pwd">Caregiver Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group p-3">
                        <label for="dob">Caregiver Date of Birth:</label>
                        <input type="DOB" class="form-control" id="DOB" placeholder="Enter Date of Birth" name="dob">
                    </div>
                    <div class="form-group p-3">
                        <label for="Gender">Caregiver Gender:</label><br>
                        <input type="gender" class="form-control" id="gender" placeholder="Enter status" name="gender">
                    </div>
                    <div class="form-group p-3">
                        <label for="status">Caregiver Status:</label>
                        <input type="status" class="form-control" id="status" placeholder="Enter status" name="status">
                    </div>
                    <div class="form-group p-3">
                        <label for="phone">Caregiver Phone:</label>
                        <input type="phone" class="form-control" id="phone" placeholder="Enter Phone" name="phone">
                    </div>
                    <div class="form-group p-3">
                        <label for="address">Caregiver Address:</label>
                        <input type="address" class="form-control" id="address" placeholder="Enter address" name="address">
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
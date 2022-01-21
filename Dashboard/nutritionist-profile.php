<?php
readfile("../index.html")
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
                        <input type="DOB" class="form-control" id="DOB" placeholder="Enter Date of Birth" name="dob">
                    </div>
                    <div class="form-group p-3">
                        <label for="Gender">Nutritionist Gender:</label><br>
                        <input type="gender" class="form-control" id="gender" placeholder="Enter status" name="gender">
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

        </div>
    </div>
</div>
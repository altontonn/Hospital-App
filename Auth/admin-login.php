<?php
include("../index.html");
session_start();
$message="";
if(count($_POST)>0) {
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $con = mysqli_connect('localhost', 'root', '', 'home_based_care');
    $result = mysqli_query($con,"SELECT * FROM `admin` WHERE email='". $_POST["email"]."' AND password ='".$_POST["pwd"]."'");
    $row  = mysqli_fetch_array($result);
    if(is_array($row)) {
        $_SESSION["id"] = $row['id'];
        header("Location:../Dashboard/admin-profile.php");
        
    } else {
        $message = "Invalid Email or Password!";
    }
    if(empty($_POST["email"]) && empty($_POST["pwd"])){
        $message = "Please fill all required fields";
    }
}
?>
<div class="container">
    <div class="col-lg-6 mx-auto" style="margin-top: 8rem;">
        <h2 class="border p-2">Login</h2>
        <form action="" class="border p-2" method="POST">
        <div class="message text-danger text-center fs-5" ><?php if($message!="") { echo $message; } ?></div>
            <div class="mb-3 mt-3">
                <label for="email">Admin Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3">
                <label for="pwd">Admin Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
            </div>
            <input type="submit" name="submit" Value="Sign In" class="btn btn-primary">
        </form>
        <a href="../home.php" class="nav-link px-0 align-middle">
            <i class="bi bi-arrow-return-left text-primary"></i><span class="ms-1 d-none d-sm-inline fs-6">Back</span> </a>
    </div>
</div>
<?php
require "../connect.php";
readfile("../index.html");
session_start();
$query = "SELECT * FROM `caregiver`";
$result = mysqli_query($con, $query);
if(empty($_SESSION['id']) || $_SESSION['id'] == ''){
    header("Location:../Auth/admin-login.php");
    die();
}
$admin = "SELECT * FROM `admin` WHERE `id`= '".$_SESSION["id"]."'";
$res = mysqli_query($con, $admin);
$row_admin = mysqli_fetch_array ($res);
?>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-2 px-sm-2 px-0 min-vh-100" style="background-color: #212529;">
            <?php include("../Admin/admin.php"); ?>
        </div>
        <div class="col py-3" style="background: white;">
            <nav class="navbar navbar-expand-sm mb-2" style="background: #4da6ff">
                <div class="container-fluid">
                    <span class="navbar-text text-white">Add New Caregiver</span>
                </div>
                <a href="../Auth/caregiver.php" class="nav-link px-0 align-middle">
                <i class="fas fa-plus text-white"></i><span class="ms-3 d-none d-sm-inline fs-6"></span> </a>
            </nav>
            <?php
            if(mysqli_num_rows($result)>0){
                if(isset($_SESSION['message'])):
             ?>
                <div class="alert alert-danger">
                    <?php 
                        echo $_SESSION['message']; 
                        unset($_SESSION['message']);
                    ?>
                </div>
            <?php endif ?>
            <table class="table table-bordered table-striped table-hover" width="100%" cellspacing="0">
                <thead class="bg-primary text-white">
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Fname</th>
                    <th scope="col">Lname</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th colspan="2" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $i = 0;
                while($row = mysqli_fetch_array($result)){
                ?>
                    <tr>
                    <th><?php echo $row['id'] ?></th>
                    <td><?php echo $row['Firstname'] ?></td>
                    <td><?php echo $row['Lastname'] ?></td>
                    <td><?php echo $row['Email'] ?></td>
                    <td><?php echo $row['Password'] ?></td>
                    <td><?php echo $row['Gender'] ?></td>
                    <td><?php echo $row['Phone'] ?></td>
                    <td><?php echo $row['Address'] ?></td>
                    <td><a class="btn btn-primary text-white" href="../edit/caregiver.php?edit=<?php echo $row['id']?>">Edit</a></td>
                    <td><a class="btn btn-danger text-white" href="../delete/caregiver.php?delete=<?php echo $row['id']?>">Delete</a></td>
                    </tr>
                    <?php 
                    $i++;
                }
                ?>
                </tbody>
            </table>
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
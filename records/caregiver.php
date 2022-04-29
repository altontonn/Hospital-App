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
?>
<style>
    tr:nth-child(even){
        background: red;
    }
    table.table{
        background-color: cornsilk;
    }
    </style>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark min-vh-100">
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
            <table class="table table-responsive">
                <thead class="">
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Fname</th>
                    <th scope="col">Lname</th>
                    <th scope="col">Sname</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">DoB</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Status</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    </tr>
                </thead>
                <?php
                $i = 0;
                while($row = mysqli_fetch_array($result)){
                ?>
                <tbody>
                    <tr>
                    <th><?php echo $row['id'] ?></th>
                    <td><?php echo $row['Firstname'] ?></td>
                    <td><?php echo $row['Lastname'] ?></td>
                    <td><?php echo $row['Surname'] ?></td>
                    <td><?php echo $row['Email'] ?></td>
                    <td><?php echo $row['Password'] ?></td>
                    <td><?php echo $row['Date of Birth'] ?></td>
                    <td><?php echo $row['Gender'] ?></td>
                    <td><?php echo $row['Status'] ?></td>
                    <td><?php echo $row['Phone'] ?></td>
                    <td><?php echo $row['Address'] ?></td>
                    <td><a class="btn btn-primary text-white" href="../edit/caregiver.php?edit=<?php echo $row['id']?>">Edit</a></td>
                    <td><a class="btn btn-danger text-white" href="../delete/caregiver.php?delete=<?php echo $row['id']?>">Delete</a></td>
                    </tr>
                </tbody>
                <?php 
                $i++;
                }
                ?>
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
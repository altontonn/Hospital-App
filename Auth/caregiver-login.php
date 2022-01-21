<?php
readfile('../index.html');
//require '../connect.php';
?>
<?php
session_start();
$message="";

if(count($_POST)>0) {
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $con = mysqli_connect('localhost', 'root', '', 'home_based_care');
    //$con = mysqli_connect('127.0.0.1:3306','root','','admin') or die('Unable To connect');
    $result = mysqli_query($con,"SELECT * FROM `caregiver` WHERE email='". $_POST["email"]."' AND password ='".$_POST["pwd"]."'");
    $row  = mysqli_fetch_array($result);
    if(is_array($row)) {
    $_SESSION["id"] = $row['id'];
    //$_SESSION["name"] = $row['name'];
    } else {
     $message = "Invalid Email or Password!";
    }
}
if(isset($_SESSION["id"])) {
header("Location: ../Admin/caregiver.php");
}
?>

    <div class="container">
        <div class="col-lg-6 mx-auto" style="margin-top: 8rem;">
            <h2 class="border p-2">Login</h2>
            <form action="" class="border p-2" method="POST">
            <div class="message text-danger text-center fs-4" ><?php if($message!="") { echo $message; } ?></div>
                <div class="mb-3 mt-3">
                    <label for="email">Caregiver Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="mb-3">
                    <label for="pwd">Caregiver Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                </div>
                <input type="submit" name="submit" Value="Sign In" class="btn btn-primary">
            </form>
        </div>
    </div>

<?php
// if(isset($_POST['email']) && isset($_POST['pwd'])){
//     $email = $_POST['email'];
//     $password = $_POST['pwd'];
//     if (!empty($email) && !empty($password)) {
//         $query = "SELECT `id` FROM `caregiver` WHERE `Email`='$email' AND `Password`='$password'";
//         if ($query_run = mysqli_query($con, $query)) {
//             $query_num_row = mysqli_num_rows($query_run);
//             if ($query_num_row==0) {
//                 echo '<h5 style="color:red; text-align: center;">Email or Password is incorrect</h5>';
//             }else if($query_num_row==1) {
//                 session_start();
//                 $user_id = mysqli_num_rows($query_run);
//                 $_SESSION['user_id'] = $user_id;
//                 header('Location: ../Admin/caregiver.php');
//             }
//         }
//     }else {
//         echo '<h5 style="color:red; text-align: center;">Fill in all the fields</h5>';
//     }
// }
?>

</html>
<?php
readfile('../index.html');
require '../connect.php';
?>

    <div class="container">
        <div class="col-lg-6 mx-auto" style="margin-top: 8rem;">
            <h2 class="border p-2">Login</h2>
            <form action="" class="border p-2" method="POST">
                <div class="mb-3 mt-3">
                    <label for="email">Counsellor Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="mb-3">
                    <label for="pwd">Counsellor Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                </div>
                <input type="submit" name="submit" Value="Sign In" class="btn btn-primary">
            </form>
        </div>
    </div>

<?php
if(isset($_POST['email']) && isset($_POST['pwd'])){
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    if (!empty($email) && !empty($password)) {
        $query = "SELECT `id` FROM `counsellor` WHERE `Email`='$email' AND `Password`='$password'";
        if ($query_run = mysqli_query($con, $query)) {
            $query_num_row = mysqli_num_rows($query_run);
            if ($query_num_row==0) {
                echo '<h5 style="color:red; text-align: center;">Email or Password is incorrect</h5>';
            }else if($query_num_row==1) {
                $user_id = mysqli_num_rows($query_run, 0, 'id');
                $_SESSION['user_id'] = $user_id;
                header('Location: ../Admin/counsellor.php');
            }
        }
    }else {
        echo '<h5 style="color:red; text-align: center;">Fill in all the fields</h5>';
    }
}
?>
</html>
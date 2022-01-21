Skip to content
Search or jump to…
Pull requests
Issues
Marketplace
Explore
 
@altontonn 
altontonn
/
gamer
Public
Code
Issues
1
Pull requests
Actions
Projects
Wiki
Security
Insights
Settings
gamer/core.php /
@altontonn
altontonn first commit
Latest commit 4279d23 on Sep 21, 2019
 History
 1 contributor
20 lines (20 sloc)  505 Bytes
   
<?php
require "connect.php";
ob_start();
session_start();
$file_page = $_SERVER['SCRIPT_NAME'];
function loggedin(){
    if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
        return true;
    }else {
        return false;
    }
}
function getuserfield($field){
    $query = "SELECT `$field` FROM `users` WHERE `id`='".$_SESSION['user_id']."'";
    if ($query_run = mysqli_query($query)) {
        if ($query_result=mysqli_result($query_run, 0, $field)) {
            return $query_result;
        }
    }
}
?>
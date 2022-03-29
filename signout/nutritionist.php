<?php
session_start();
unset($_SESSION["id"]);
header('Location: ../Auth/nutritionist-login.php');
?>
<?php
session_start();
unset($_SESSION["id"]);
header('Location: ../Auth/counsellor-login.php');
?>
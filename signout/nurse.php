<?php
session_start();
unset($_SESSION["id"]);
header('Location: ../Auth/nurse-login.php');
?>
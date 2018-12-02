<?php
session_start();
session_unset($_SESSION['cus_id']);
session_destroy();
header("Location: ./login.php");
?>

<?php
if(!isset($_SESSION['user_id'])){
    header('location:../Reletedview/login.php');

session_start();
session_destroy();
header('location:../Reletedview/login.php');
}
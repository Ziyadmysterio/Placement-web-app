<?php
session_start();
if(!isset($_SESSION['logged_user']))
{
    header('location:../index.php');
}



?>
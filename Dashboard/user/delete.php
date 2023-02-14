<?php

$UserID = $_GET['UserID'];
include_once 'C:\xampp\htdocs\pp\Repository\User_repository.php';



$userRepository = new User_repository();

$userRepository->deleteUser($UserID);
header("location:../index.php");



?>
<?php

$LagjetID = $_GET['LagjetID'];
include_once 'C:\xampp\htdocs\pp\Repository\Lagje_repository.php';



$lagjetRepository = new Lagje_repository();

$lagjetRepository->deleteLagjet($LagjetID);
header("location:../index.php");



?>
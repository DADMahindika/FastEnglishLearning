<?php
session_start();
$numberOfBadges = $_POST['numberOfBadges'];
$_SESSION['numberOfBadges'] = $numberOfBadges;

?>
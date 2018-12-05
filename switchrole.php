<?php
ob_start();
session_start();


if (isset($_SESSION['username']) != '' && $_SESSION['type'] == 'admin') {


$id = $_GET['id'];
$current = $_GET['current'];
$newstate = '';

if ($current == 'admin') {$newstate = 'user';} else {$newstate = 'admin';}

require_once 'connect.php';

$sql = "UPDATE users SET type = '$newstate' WHERE id = {$id}";

$conn->query($sql);

$conn->close();


header("Location: index.php?act=$id");

	}

?>
<?php
include_once '../login/connection.php';

$id = $_POST['id'];


$delete = mysqli_query($con,"DELETE FROM shedule WHERE id=$id");




?>


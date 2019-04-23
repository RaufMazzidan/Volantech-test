<?php 
include 'conn.php';
$task = $_POST['task'];
$cat = $_POST['cat'];
$query="INSERT INTO task SET task='$task',category='$cat',status='1'";
mysqli_query($connection, $query);
header("location:../index.php"); 
?>
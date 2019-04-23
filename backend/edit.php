<?php 
include 'conn.php';
$id = $_POST['id_task'];
$task = $_POST['task'];
$cat = $_POST['cat'];
$query="UPDATE task SET task='$task',category='$cat' WHERE id_task=$id";
mysqli_query($connection, $query);
header("location:../index.php"); 
?>
<?php 
include 'conn.php';
$id = $_GET['xx'];
$query = "DELETE FROM task WHERE id_task=$id";
mysqli_query($connection, $query);
header("location:../..");
 ?>
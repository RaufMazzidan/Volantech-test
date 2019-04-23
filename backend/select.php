<?php 
include 'conn.php';
$done = mysqli_query($connection, "SELECT * from task WHERE status ='3' ORDER BY category ASC");
$todo = mysqli_query($connection, "SELECT * from task WHERE status ='2' ORDER BY category ASC");
$plan = mysqli_query($connection, "SELECT * from task WHERE status ='1' ORDER BY category ASC");
 ?>
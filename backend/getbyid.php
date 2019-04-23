<?php 
include 'conn.php';
$id = $_GET['yy'];
$query = mysqli_query($connection, "SELECT * FROM task WHERE id_task=$id");
while ($row = mysqli_fetch_assoc($query)) {
	$data[] = $row;
}
echo json_encode($data);
 ?>
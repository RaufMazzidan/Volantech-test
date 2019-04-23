<?php 
include 'conn.php';
$id=$_GET['ss'];
$query = mysqli_query($connection, "SELECT * from task WHERE status =$id ORDER BY category ASC");

while ($row = mysqli_fetch_assoc($query)) {
	$data[] = $row;
}
echo json_encode($data);
 ?>
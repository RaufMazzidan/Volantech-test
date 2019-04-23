<?php 
include 'conn.php';
$id=$_GET['ii'];
$cat=$_GET['ss'];
echo $id;
if ($cat == 1) {
	$query="UPDATE task SET status='2' WHERE id_task=$id";
}elseif ($cat == 2) {
	$query="UPDATE task SET status='3' WHERE id_task=$id";
}
mysqli_query($connection, $query);
header("location:../.."); 
?>
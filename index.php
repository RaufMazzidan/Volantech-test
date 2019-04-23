<!DOCTYPE html>
<html>
<head>
	<title>TODO LIST APP</title>
	<link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href="assets/datepicker/css/datepicker.min.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	<script src="assets/datepicker/js/datepicker.min.js"></script>
	<script src="assets/datepicker/js/i18n/datepicker.en.js"></script>
</head>
<body>
	<nav class="side-nav">
		<div class="brand">
			<center>
				<div class="brand-logo">
					<img src="assets/images/logo/logo-white-sm.png">
				</div>
				<div class="side-content">
					<div class="navbar-item">
						<a href="#">
							<i class="material-icons nav-active">dashboard</i>
						</a>
					</div>	
				</center>
			</div>

		</nav>
		<div class="wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<h3>Todo List App</h3>
					</div>
					<div class="col-md-4">
					</div>
				</div>
				<br><br><br>
				<form method="POST" action="backend/input.php">
					<div class="row">
						<div class="col-md-3"><input type="text" name="task" required></div>
						<div class="col-md-2">
							<select class="sel-cat" name="cat">
								<option value="1">Important</option>
								<option value="2">Not Important</option>
								<option value="3">Very Not Important</option>
							</select>
						</div>
						<div class="col-md-3">
							<input type="submit"  class="btn btn-success btn-add" value="ADD TASK">
						</div>
					</div>
				</form>

				<br><br>
				<div class="row">
					<div class="col-md-4">
						<div class="status" style="background-color: #0095B3">
							<a style="cursor: pointer;" onclick="sort(1)">
							<span style="margin: 10px;color:white;" class="glyphicon glyphicon-sort pull-right"></span>
							</a>
							<h5 class="status-title">Plan</h5></div>
						<br>
						<?php 
						include 'backend/select.php';
						foreach ($plan as $p) { ?>
						<div id="plan" class="card">
							<div class="category">
								<?php 
								if ($p['category'] == 1) {
									echo "<span class='text-center' style='background-color:#CC2944;'>Important</span>";
								}else if ($p['category'] == 2) {
									echo "<span class='text-center' style='background-color:#F2AC34;'>Not Important</span>";
								}elseif ($p['category'] == 3) {
									echo "<span class='text-center' style='background-color:#28A352;'>Very Not Important</span>";
								}
								 ?>
							</div>
							<br>
							<p><?=$p['task']?></p>
							<div style="margin-left: 170px;">
								<a href="#edit" onclick="edit(<?=$p['id_task']?>)" class="btn btn-info" data-toggle="modal"><span class="glyphicon glyphicon-pencil"></span></a>

								<a href="backend/delete.php/?xx=<?=$p['id_task']?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>	
								<a href="backend/update.php/?ii=<?=$p['id_task']?>&ss=<?=$p['status']?>"class="btn btn-success"><span class="glyphicon glyphicon-ok"></a>
								</div>

							</div>
							<?php } ?>
						</div>
						<div class="col-md-4">
							<div class="status" style="background-color: #F5D861">
								<a style="cursor: pointer;" onclick="sort(2)" >
							<span style="margin: 10px;color:white;" class="glyphicon glyphicon-sort pull-right"></span>
							</a>
								<h5 class="status-title">To-Do</h5>
							</div>
							<br>
						<?php 
						include 'backend/select.php';
						foreach ($todo as $p) { ?>
						<div class="card">
							<div class="category">
								<?php 
								if ($p['category'] == 1) {
									echo "<span class='text-center' style='background-color:#CC2944;'>Important</span>";
								}else if ($p['category'] == 2) {
									echo "<span class='text-center' style='background-color:#F2AC34;'>Not Important</span>";
								}elseif ($p['category'] == 3) {
									echo "<span class='text-center' style='background-color:#28A352;'>Very Not Important</span>";
								}
								 ?>
							</div>
							<br>
							<p><?=$p['task']?></p>
							<div style="margin-left: 170px;">
								<a href="#edit" onclick="edit(<?=$p['id_task']?>)"  class="btn btn-info" data-toggle="modal"><span class="glyphicon glyphicon-pencil"></span></a>

								<a href="backend/delete.php/?xx=<?=$p['id_task']?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>	
								<a href="backend/update.php/?ii=<?=$p['id_task']?>&ss=<?=$p['status']?>"class="btn btn-success"><span class="glyphicon glyphicon-ok"></a>
								</div>

							</div>
							<?php } ?>
						</div>
						<div class="col-md-4">
							<div class="status" style="background-color: #99CC33">
								<a style="cursor: pointer;" onclick="sort(3)" >
							<span style="margin: 10px;color:white;" class="glyphicon glyphicon-sort pull-right"></span>
							</a>
								<h5 class="status-title">Done</h5>
							</div>
							<br>
						<?php 
						include 'backend/select.php';
						foreach ($done as $p) { ?>
						<div class="card">
							<div class="category">
								<?php 
								if ($p['category'] == 1) {
									echo "<span class='text-center' style='background-color:#CC2944;'>Important</span>";
								}else if ($p['category'] == 2) {
									echo "<span class='text-center' style='background-color:#F2AC34;'>Not Important</span>";
								}elseif ($p['category'] == 3) {
									echo "<span class='text-center' style='background-color:#28A352;'>Very Not Important</span>";
								}
								 ?>
							</div>
							<br>
							<p><?=$p['task']?></p>
							<div style="margin-left: 220px;">
								<a href="#edit" onclick="edit(<?=$p['id_task']?>)" class="btn btn-info" data-toggle="modal"><span class="glyphicon glyphicon-pencil"></span></a>

								<a href="backend/delete.php/?xx=<?=$p['id_task']?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
								</div>

							</div>
							<?php } ?>
						</div>
					</div>
			</div>
			<div id="edit" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
							<h4 style="color: black" class="modal-title" id="myModalLabel">Edit</h4>
						</div>
						<form method="POST" action="backend/edit.php">
						<div class="modal-body">
							<input type="hidden" name="id_task" id="id_task">
								<input type="text" id="task" name="task" style="border: 1px solid grey; margin-bottom:10px;">
								<br>
								<select class="sel-cat" id="cat" name="cat" style="border: 1px solid grey;padding-left: 20px;">
									<option value="1">Important</option>
									<option value="2">Not Important</option>
									<option value="3">Very Not Important</option>
								</select>
							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<input type="submit" class="btn btn-primary" value="Save Changes">
						</div>
						</form>
					</div>
				</div>
			</div>
			<script type="text/javascript">
				function edit(a) {
					$.ajax({
						type:"post",
						url:"backend/getbyid.php/?yy="+a,
						dataType:"json",
						success:function(data) {
							$("#id_task").val(data[0].id_task);
							$("#task").val(data[0].task);
							$("#cat").val(data[0].category);
						}
					});
				}
			</script>
			<!-- <div class="loading" delay-hide="700"></div>
			<script type="text/javascript">
				$(document).ready(function(){
				  var loading = $(".loading");
				  loading.delay(loading.attr("delay-hide")).slideUp();
				});
			</script> -->
			<!-- <script type="text/javascript">
				function sort(a) {
				$.ajax({
						type:"post",
						url:"backend/sort.php/?ss="+a,
						dataType:"json",
						success:function(data) {
							console.log(data);
						}
					});
				}
			</script> -->
		</body>
		</html>
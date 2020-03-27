<?php
	include '../includes/config.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Admin Home</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
	<?php
		
		$id=$_GET['id'];
		$select = "SELECT * FROM cars WHERE car_id = '$id'";
		$result = $conn->query($select);
		while($row = $result->fetch_assoc()){
				$car_name=$row['car_name'];
				$car_type=$row['car_type'];
				$hire_cost=$row['hire_cost'];
				$image=$row['image'];
				$capacity=$row['capacity'];
								}
							?>
<div id="header">
	<div class="shell">
		
		<?php
			include 'menu.php';
		?>
		</div>
	</div>
</div>

<div id="container">
	<div class="shell">
		
		<div class="small-nav">
			<a href="index.php">Dashboard</a>
			<span>&gt;</span>
			Add New Vehicles
		</div>
		
		<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
					<div class="box-head">
						<h2>Add New pets</h2>
					</div>
					
					<form action="" method="post" enctype="multipart/form-data">
						
						<div class="form">
								<input type="hidden" class="field size1" name="size" value="10000"required />
								<p>
									<span class="req">max 100 symbols</span>
									<label>Car Name <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="car_name" value="<?php echo $car_name;?>" required />
								</p>	
								<p>
									<span class="req">max 20 symbols</span>
									<label>Car type <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="car_type" value="<?php echo $car_type;?>" required />
								</p>
								<p>
									<span class="req">max 20 symbols</span>
									<label>Car Price <span>(Required Field)</span></label>
									<input type="text" class="field size1" value="<?php echo $hire_cost;?>" name="hire_cost" required />
								</p>
								<p>
									<span class="req">Current Images</span>
									<label>Car Image <span>(Required Field)</span></label>
									<input type="file" class="field size1" name="image"  />
								</p>
									
							
						</div>
						
						<div class="buttons">
							<input type="button" class="button" value="preview" />
							<input type="submit" class="button" value="submit" name="send" />
						</div>
						<img src="css/images/footer.gif">
					</form>
					<?php
							if(isset($_POST['send'])){
								
								$target = "../cars/".basename($_FILES['image']['name']);
								$image=$_FILES['image']['name'];

								if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
								    echo "File is valid, and was successfully uploaded";

								} else {
								    echo "Possible file upload attack";
								}

								$car_name = $_POST['car_name'];
								$car_type = $_POST['car_type'];
								$hire_cost = $_POST['hire_cost'];

								$qr = "UPDATE cars SET car_name = '$car_name', car_type= '$car_type',hire_cost='$hire_cost',image='$image' WHERE car_id = '$id'";
								$res = $conn->query($qr);
								if($res === TRUE){
									echo "<script type = \"text/javascript\">
											alert(\"Vehicle Succesfully updated\");
											window.location = (\"add_vehicles.php\")
											</script>";
									}
								
							
							}
						?>
				</div>

			</div>
			
			<div id="sidebar">
				
				<div class="box">
					
					<div class="box-head">
						<h2>Management</h2>
					</div>
					
					
				</div>
			</div>
			
			<div class="cl">&nbsp;</div>			
		</div>
	</div>
</div>

<div id="footer">
	<div class="shell">
		<span class="left">&copy; <?php echo date("Y");?> - Sonko Rescue Team</span>
		<span class="right">
			Design by Consi</a>
		</span>
	</div>
</div>
	
</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car Rental</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<style>
		.carousel-control-next-icon{
			margin-right:72%;
		}			
		.carousel-control-prev-icon{
			margin-left:72%;
		}
	</style>
</head>
<body>

	<section class="">
		<?php
			include 'includes/config.php';
			include 'header.php';
			$i=1;
			$sel = "SELECT * FROM cars WHERE status = 'Available'";
						$rs = $conn->query($sel);
		?>

			<section class="caption">
				<h2 class="caption" style="text-align: center">Find You Dream Cars For Hire</h2>
				<h3 class="properties" style="text-align: center">Range Rovers - Mercedes Benz - Landcruisers</h3>
			</section>
	</section><!--  end hero section  -->
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  		<div class="carousel-inner">
  			<?php while($cars=$rs->fetch_assoc()):?>
  			<?php if($i==1):?>
  			<div class="carousel-item active">
			  <img style="width:80%;display:table;margin:auto;" src="cars/<?php echo $cars['image'];?>" alt="...">
			  <div style="background:#fff" class="carousel-caption d-none d-md-block">
			    <a href="book_car.php?id=<?php echo $cars['car_id'];?>"><h3><?php echo $cars['car_name'];?></h3></a>
			    <p style="color:#000"><?php echo $cars['hire_cost']." taka";?></p>
			    <h5><?php echo $cars['car_type'];?></h5>
			  </div>
			</div>
    		
    		<?php else:?>
    		<div class="carousel-item ">
			  <img style="width:80%;display:table;margin:auto;" src="cars/<?php echo $cars['image'];?>" alt="...">
			  <div style="background:#fff" class="carousel-caption d-none d-md-block">
			    <a href="book_car.php?id=<?php echo $cars['car_id'];?>"><h3><?php echo $cars['car_name'];?></h3></a>
			    <p style="color:#000"><?php echo $cars['hire_cost']." taka";?></p>
			    <h5><?php echo $cars['car_type'];?></h5>
			  </div>
			</div>
	    	<?php endif;?>
	    	<?php $i++;?>
	    	<?php endwhile;?>
    	
  		</div>
  		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    		<span class="sr-only">Previous</span>
  		</a>
  		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    		<span class="carousel-control-next-icon" aria-hidden="true"></span>
    		<span class="sr-only">Next</span>
  		</a>
		</div>

	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
			<?php
				while($rws = $rs->fetch_assoc()):?>
				<?php var_dump($rws);
				die();?>
				<li>
					<a href="book_car.php?id=<?php echo $rws['car_id'] ?>">
						<img class="thumb" src="cars/<?php echo $rws['image'];?>">
					</a>
					<span class="price"><?php echo 'Taka.'.$rws['hire_cost'];?></span>
					<div class="property_details">
						<h1>
							<a href="book_car.php?id=<?php echo $rws['car_id'] ?>"><?php echo 'Car Make>'.$rws['car_type'];?></a>
						</h1>
						<h2>Car Name/Model: <span class="property_size"><?php echo $rws['car_name'];?></span></h2>
					</div>
				</li>
			<?php endwhile;?>
			</ul>
		</div>
	</section>	<!--  end listing section  -->

	<footer>
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li>OUR COMPANY</li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Policy</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li>OTHERS</li>
						<li><a href="#">...</a></li>
						<li><a href="#">...</a></li>
						<li><a href="#">...</a></li>
						<li><a href="#">...</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li>OUR CAR TYPES</li>
						<li><a href="#">Mercedes</a></li>
						<li><a href="#">Range Rover</a></li>
						<li><a href="#">Landcruisers</a></li>
						<li><a href="#">Others.</a></li>
					</ul>
				</li>

				<li class="about">
					<p>Sonko Rescue team is an organized company that rents cars and other vehicles to clients at lower costs. We we are here to serve every Kenyan Citizen</p>
					<ul>
						<li><a href="http://facebook.com/sonko" class="facebook" target="_blank"></a></li>
						<li><a href="http://twitter.com/sonko" class="twitter" target="_blank"></a></li>
						<li><a href="http://plus.google.com/+sonko" class="google" target="_blank"></a></li>
						<li><a href="#" class="skype"></a></li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="copyrights wrapper">
			Copyright &copy; <?php echo date("Y")?> All Rights Reserved | Designed by Felix Kiamba.
		</div>
	</footer><!--  end footer  -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
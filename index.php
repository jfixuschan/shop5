<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
</head>
<body>
	<div class="col-12 row bg-dark mx-auto">
		<div class="col-8 row mx-auto pl-0 pr-0">
			<div class="col-2 pt-3 pb-3">
				<img src="img/1.png" class="w-25 ml-5">
			</div>
			<div class="col-6 border row">
				<div class="col-6 pt-3 pl-4">
					<p><a href="http://20urok/index.php" class="text-light">Главная</a></p>
				</div>
				<div class="col-6 pt-3 pl-4">
					<p><a href="http://20urok/admin.php" class="text-light">Админ-панель</a></p>
				</div>
			</div>
			<div class="col-4">
				
			</div>
		</div>
	</div>
	<div class="col-8 mx-auto mt-3">
		
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="img/1.jpg" class="d-block w-100 col-12">
			    </div>
			    <div class="carousel-item">
			      <img src="img/2.jpg" class="d-block w-100 col-12">
			    </div>
			    <div class="carousel-item">
			      <img src="img/3.jpg" class="d-block w-100 col-12">
			    </div>
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
	</div>
	<div class="col-12 row mx-auto mt-3 pl-0 pr-0">
		<div class="col-8 row mx-auto">
			<div class="col-2 ml-5">
				<?php 
					$connect = mysqli_connect("127.0.0.1", "root", "","shop");
					$text_query = "SELECT * FROM shop";
					$query = mysqli_query($connect, $text_query);
							
					$database = $query->fetch_assoc();

					echo "<img class='w-100' src='".$database["img"]."'>";
				 	echo "<div><h5>".$database["name"]."</div></h5>";
					echo "<p class='text-justify'>".$database["descr"]."</p>";
					echo "<p class='text-justify'>".$database["price"]."</p>";
				 ?>
				 <div class="col-4 mx-auto mt-3">
					<button class="btn btn-primary">Купить</button>
				</div>
			</div>
			<div class="col-2 ml-4">
				<?php 
					
					$database1 = $query->fetch_assoc();

					echo "<img class='w-100' src='".$database1["img"]."'>";
				 	echo "<div><h5>".$database1["name"]."</div></h5>";
					echo "<p class='text-justify'>".$database1["descr"]."</p>";
					echo "<p class='text-justify'>".$database1["price"]."</p>";
				 ?>
				  <div class="col-4 mx-auto mt-3">
					<button class="btn btn-primary">Купить</button>
				</div>
			</div>
			<div class="col-2 ml-4">
				<?php 
					
					$database2 = $query->fetch_assoc();

					echo "<img class='w-100' src='".$database2["img"]."'>";
				 	echo "<div><h5>".$database2["name"]."</div></h5>";
					echo "<p class='text-justify'>".$database2["descr"]."</p>";
					echo "<p class='text-justify'>".$database2["price"]."</p>";
				 ?>
				  <div class="col-4 mx-auto mt-3">
					<button class="btn btn-primary">Купить</button>
				</div>
			</div>
			<div class="col-2 ml-4">
				<?php 
					
					$database3 = $query->fetch_assoc();

					echo "<img class='w-100' src='".$database3["img"]."'>";
				 	echo "<div><h5>".$database3["name"]."</div></h5>";
					echo "<p class='text-justify'>".$database3["descr"]."</p>";
					echo "<p class='text-justify'>".$database3["price"]."</p>";
				 ?>
				  <div class="col-4 mx-auto mt-3">
					<button class="btn btn-primary">Купить</button>
				</div>
			</div>
			<div class="col-2  ml-4">
				<?php 
					
					$database4 = $query->fetch_assoc();

					echo "<img class='w-100' src='".$database4["img"]."'>";
				 	echo "<div><h5>".$database4["name"]."</div></h5>";
					echo "<p class='text-justify'>".$database4["descr"]."</p>";
					echo "<p class='text-justify'>".$database4["price"]."</p>";
				 ?>
				  <div class="col-4 mx-auto mt-3">
					<button class="btn btn-primary">Купить</button>
				</div>
			</div>
		</div>
		<div class="col-8 row mx-auto mt-3" >
			<div class="col-5">
				<?php 
					
					$database5 = $query->fetch_assoc();

					echo "<img class='w-100' src='".$database5["img"]."'>";
				 	echo "<div><h5>".$database5["name"]."</div></h5>";
					echo "<p class='text-justify'>".$database5["descr"]."</p>";
					echo "<p class='text-justify'>".$database5["price"]."</p>";
				 ?>
				  <div class="col-4 mx-auto mt-3">
					<button class="btn btn-primary">Купить</button>
				</div>

			</div>
			<div class="col-6 ml-5">
				<?php 
					
					$database6 = $query->fetch_assoc();

					echo "<img class='w-100' src='".$database6["img"]."'>";
				 	echo "<div><h5>".$database6["name"]."</div></h5>";
					echo "<p class='text-justify'>".$database6["descr"]."</p>";
					echo "<p class='text-justify'>".$database6["price"]."</p>";
				 ?>
				  <div class="col-4 mx-auto mt-3">
					<button class="btn btn-primary">Купить</button>
				</div>
			</div>
		</div>
		<div class="col-8 row mx-auto mt-3" >
			<div class="col-6 ">
				<?php 
					
					$database7 = $query->fetch_assoc();

					echo "<img class='w-100' src='".$database7["img"]."'>";
				 	echo "<div><h5>".$database7["name"]."</div></h5>";
					echo "<p class='text-justify'>".$database7["descr"]."</p>";
					echo "<p class='text-justify'>".$database7["price"]."</p>";
				 ?>
				  <div class="col-4 mx-auto mt-3">
					<button class="btn btn-primary">Купить</button>
				</div>
			</div>
			<div class="col-5 ml-5">
				<?php 
					
					$database8 = $query->fetch_assoc();

					echo "<img class='w-100' src='".$database8["img"]."'>";
				 	echo "<div><h5>".$database8["name"]."</div></h5>";
					echo "<p class='text-justify'>".$database8["descr"]."</p>";
					echo "<p class='text-justify'>".$database8["price"]."</p>";
				 ?>
				  <div class="col-4 mx-auto mt-3">
					<button class="btn btn-primary">Купить</button>
				</div>
			</div>
		</div>
		<div class="col-6 mx-auto mt-3">
			<?php 
					$database9 = $query->fetch_assoc();

					echo "<img class='w-50' src='".$database9["img"]."'>";
				 	echo "<div><h5>".$database9["name"]."</div></h5>";
					echo "<p class='text-justify'>".$database9["descr"]."</p>";
					echo "<p class='text-justify'>".$database9["price"]."</p>";
				 ?>
				  <div class="col-4 mx-auto mt-3">
					<button class="btn btn-primary">Купить</button>
				</div>
		</div>
	</div>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</html>
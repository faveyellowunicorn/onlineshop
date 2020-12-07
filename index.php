<!DOCTYPE html>
<html>
<head>
	<title>Irina's Online Shop</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body class="bg-light">
	<div class="col-12   border" style="height: 70px;">
		<div class="col-12 mx-auto" style="height: 70px;">
			<div class="row">
				<div class="col-2  " style="height: 65px;">

				</div>
				<div class="col-6  " style="height: 65px;">
					<div class="row">
					<button class="btn btn-dark mr-1">любимые подборки</button>	
					<button class="btn btn-dark mr-1">акции</button>	
					<button class="btn btn-dark">бестселлеры</button>	
					</div>
				</div>
				<div class="col-4 " style="height: 65px;">
					<h5>САЙТ МОИХ ВКУСОВ</h5>
				</div>
			</div>
		</div>
	</div>
	<div class="col-12 mt-3 mx-auto" style="height: 450px;">
		<div>
			<?php
				$connect = mysqli_connect("127.0.0.1","root","","online_shop");
				$text_query = 'SELECT * FROM shop';
				$query = mysqli_query($connect, $text_query); //table
										
				$result = $query->fetch_assoc(); 
				$result2 = $query->fetch_assoc(); 
				$result3 = $query->fetch_assoc(); 
				$result4 = $query->fetch_assoc(); 
				$result5 = $query->fetch_assoc(); 
				$result6 = $query->fetch_assoc(); 
				$result7 = $query->fetch_assoc(); 
				$result10 = $query->fetch_assoc(); 
			 ?>
			 <h5>Не нашли, что искали? <a href="admin.php">Поиск</a>
			 </h5>
			 
		</div>
		<div class="row">
			<div class="col-8  ml-5" style="height: 400px;">
			<img src="background.jpg" class="w-100" style="height: 400px;">
			</div>
			<div class="col-2   " style="height: 400px;">
					
			</div>
		</div>
	</div>
	<!--товары-->
	<div class="col-10  mt-3 mx-auto" >
		<div class="col-12 mt-2" >
			<div class="row">
			<div class="col-4  border ">
				<?php
				echo $result["title"];
				echo $result["desk"];
				echo "<img src='".$result["img"]."'  class='w-100'>";
				echo $result["price"];
				

				 ?>
				<button class="btn btn-outline-secondary ">купить</button>
			</div>
			<div class="col-4  border " >
				<?php
				echo $result2["title"];
				echo $result2["desk"];
				echo "<img src='".$result2["img"]."'  class='w-100'>";
				echo $result2["price"];
				

				 ?>
				 <button class="btn btn-outline-secondary ">купить</button>
			</div>
			<div class="col-4  border " >
				<?php
				echo $result3["title"];
				echo $result3["desk"];
				echo "<img src='".$result3["img"]."'  class='w-100'>";
				echo $result3["price"];
				

				 ?>
				 <button class="btn btn-outline-secondary ">купить</button>
			</div>
			</div>
		</div>
		<!--вторая строчка-->
		<div class="col-12  mt-2" style="height: 200px">

			<div class="row">
			<div class="col-4  border " style="height: 200px; ">
				<?php
				echo $result4["title"];
				echo $result4["desk"];
				echo "<img src='".$result4["img"]."'  class='w-100'>";
				echo $result4["price"];
				

				 ?>

				 <button class="btn btn-outline-secondary ">купить</button>
			</div>
			<div class="col-4 border " >
				<?php
				echo $result5["title"];
				echo $result5["desk"];
				echo "<img src='".$result5["img"]."'  class='w-100'>";
				echo $result5["price"];
				

				 ?>
				 <button class="btn btn-outline-secondary ">купить</button>
			</div>
			<div class="col-4  border " >
				<?php
				echo $result6["title"];
				echo $result6["desk"];
				echo "<img src='".$result6["img"]."'  class='w-100'>";
				echo $result6["price"];
				

				 ?>
				 <button class="btn btn-outline-secondary ">купить</button>
			</div>
			</div>
		</div>
	</div>
</body>
</html>
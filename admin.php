<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<div class="col-12 row bg-dark mx-auto">
		<div class="col-8 row mx-auto pl-0 pr-0">
			<div class="col-2">
				<img src="">
			</div>
			<div class="col-6 border row">
				<div class="col-6 pt-3 pl-4">
					<p><a href="http://20urok/index.php" class="text-light">Главная</a></p>
				</div>
				<div class="col-6 pt-3 pl-4">
					<p><a href="http://20urok/admin.php" class="text-light">Админ-панель</a></p>
				</div>
			</div>
			<div class="col-4"></div>
		</div>
	</div>
	<form action="insert.php" method="GET">
		<div class="col-10 mx-auto mt-5">
			<input name="name" type="text" class="form-control" placeholder="Название">
			<textarea name="descr" class="form-control" placeholder="Описание"></textarea>
			<input type="text" name="img" class="form-control" placeholder="Картинка">
			<input type="text" name="price" class="form-control" placeholder="Цена">
		</div>
		<div class="col-4 mx-auto mt-3">
			<button class="btn btn-primary">Опубликовать</button>
		</div>
</form>
</body>
</html>
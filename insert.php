<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Вери Найс Создание</title>
	<meta charset="utf-8">
</head>
<body>
	<div>
		<h3>Создание Постов</h3>
		<p>Наш сайт славится тем что он неславится и в нём нет проверки на подлинность твоего maila.</p>
		<form action="app.php" method="POST" enctype="multipart/form-data">
			<input type="" name="glav" placeholder="Ваш Заголовок">
			<input type="" name="text" placeholder="Ваш Текст">
			<input type="file" name="img">
			<?php 
			echo '<input style="display: none;" name="id" value="' . $_POST['id'] . '">'
			?>
			<button>Создать</button>
		</form>
	</div>
</body>
</html>
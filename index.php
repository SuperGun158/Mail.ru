<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Вери Найс Регистрация</title>
	<meta charset="utf-8">
</head>
<body style="text-align: center;">
	<div>
		<h3>Регистрация</h3>
		<p>Наш сайт славится тем что он неславится и в нём нет проверки на подлинность твоего maila.</p>
		<form action="reg.php" method="POST" enctype="multipart/form-data">
			<div style="display: block; margin: auto;" class="bg-danger col-3 border border-primary">
				<div>
				<input type="" name="email" placeholder="Ваш Email" class="form-control mt-4">
				</div>
				<div>
				<input type="" name="name" placeholder="Ваш Имя Фамилия" class="form-control mt-4">
				</div>
				<div>
				<input type="" name="login" placeholder="Ваш Login" class="form-control mt-4">
				</div>
				<div>
				<input type="" name="password" placeholder="Ваш Password" class="form-control mt-4">
				</div>
				<div>
				<input type="file" name="avatar" class="form-control mt-4">
				</div>
				<div>
				<button class="btn btn-primary mt-4 mb-4">Зарегестрироваться</button>
				</div>
			</div>
		</form>
		<a href='login.php'>Есть уже акаунт? Войди!</a>
		<a href='glav.php'>Не хочешь входить?</a>
		<h3> <?php 
		echo $_GET['no'];
		?> </h3>
	</div>
</body>
</html>
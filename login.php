<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Вери Найс Вход</title>
	<meta charset="utf-8">
	<style type="text/css">
	</style>
</head>
<body style="text-align: center">
	<div>
		<h3>Вход</h3>
		<p>Наш сайт славится тем что он неславится и в нём нет проверки на подлинность твоего maila.</p>
		<div style="display: block; margin: auto;" class="bg-danger col-3 border border-primary">
			<form action="prov.php" method="GET">
				<input type="" name="login" placeholder="Ваш Login" class="form-control mt-4">
				<input type="" name="password" placeholder="Ваш Password" class="form-control mt-4">
				<button  class="btn btn-primary mt-4 mb-4">Войти</button>
			</form>
		</div>
		<h3> <?php 
		echo $_GET['no'];
		?> </h3>
	</div>
</body>
</html>
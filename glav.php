<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Вери Найс Посты</title>
	<meta charset="utf-8">
</head>
<body style="text-align: center;">
	<?php 
	$conect = mysqli_connect('127.0.0.1', 'root', '', 'dn_sait');
	$sql2 = mysqli_query($conect, "SELECT * FROM posts INNER JOIN users ON posts.user_id = users.id" );
	$sql = mysqli_query($conect, "SELECT * FROM users");
	$g = $sql ->fetch_assoc();
	?>
	<div>
		<h3>Посты</h3>
		<p>Наш сайт славится тем что он неславится и в нём нет проверки на подлинность твоего maila.</p>
		<?php
		if($_GET['id'] == null){
		?><h3>Чтобы получить доступ к созданию постов войдите.</h3><?php
		} else {
		?>
		<form method="POST" action="insert.php">
		<?php 
			echo '<input style="display: none;" name="id" value="' . $_GET['id'] . '">'
		?>
			<button>Создать Пост</button>
		</form>
		<form method="GET" action="my.php">
		<?php 
			echo '<input style="display: none;" name="id" value="' . $_GET['id'] . '">'
		?>
			<button>Мои посты</button>
		</form>
	</div>
	<?php 
	};
	?>
	<div class="row container">
	<?php
	for($i = 0; $i < $sql2->num_rows; $i++){ 
	$g2 = $sql2 ->fetch_assoc();

?>
<div class="col-4"  style="text-align: center; margin-left: 0.01px">
	<div class="row">
		<?php 
		echo '<img style="height: 30px; width: 30px;"src="' . $g2['avatar'] . '">';
		echo '<h3>' . $g2['login'] . '</h3>';
		 ?>
	</div>
	<div>
		<?php 
		echo '<img class="col-5"src="' . $g2['img'] . '">';
		echo '<p>' . $g2['glav'] . '</p>';
		?>
		<form method="GET" action="post.php">
			<?php
				echo '<input style="display: none;" name="id2" value="' . $g2['id2'] . '">'
			?>
			<?php
				echo '<input style="display: none;" name="id" value="' . $_GET['id'] . '">'
			?>
			<button>
				Просмотр
			</button>
		</form>
	</div>
</div>
<?php }; ?>
</div>
</body>
</html>
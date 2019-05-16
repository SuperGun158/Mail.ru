<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Вери Найс Посты</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
	$conect = mysqli_connect('127.0.0.1', 'root', '', 'dn_sait');
	$sql2 = mysqli_query($conect, "SELECT * FROM posts  INNER JOIN users ON posts.user_id = users.id WHERE user_id = '" . $_GET['id'] . "'");
?>
<div>
	<h3>
	Это ваши посты. Тут вы можете изменить или удалить свои посты. Если их нет то их нету, создайте их.
	</h3>
	<form method="GET" action="glav.php">
		<?php 
		echo '<input style="display: none;" name="id" value="' . $_GET['id'] . '">'
		?>
		<button>Вернуться</button>
	</form>
</div>
<?php
	for($i = 0; $i < $sql2->num_rows; $i++){ 
	$g2 = $sql2 ->fetch_assoc();
?>
<div class="col-4">
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
		 <form method="POST" action="update.php">
		  	<?php 
			echo '<input style="display: none;" name="id2" value="' . $g2['id2'] . '">';
			echo '<input style="display: none;" name="id" value="' . $_GET['id'] . '">';
			?>
		 <button>Изменить</button>
		 </form>
		 <form method="POST" action="delete.php">
			<?php 
			echo '<input style="display: none;" name="id2" value="' . $g2['id2'] . '">';
			echo '<input style="display: none;" name="id" value="' . $_GET['id'] . '">';
			?>
			<button>Удалить</button>
		</form>
	</div>
</div>
<?php }; ?>
</body>
</html>
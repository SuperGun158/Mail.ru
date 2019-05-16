<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Вери Найс Просмотр</title>
	<meta charset="utf-8">
</head>
<body>
<?php 
	$conect = mysqli_connect('127.0.0.1', 'root', '', 'dn_sait');
	$sql2 = mysqli_query($conect, "SELECT * FROM posts INNER JOIN users ON posts.user_id = users.id WHERE id2='" . $_GET['id2'] . "' " );
		$g2 = $sql2 ->fetch_assoc();
?>
<div class="row">
		<?php 
		echo '<img style="height: 100px; width: 100px;"src="' . $g2['avatar'] . '">';
		echo '<h2>' . $g2['login'] . '</h2>';
		 ?>
	</div>
	<div>
		<?php 
		echo '<h3>' . $g2['glav'] . '</h3>';
		echo '<img class="col-6"src="' . $g2['img'] . '">';
		echo '<p>' . $g2['text'] . '</p>';
		?>
		<form method="GET" action="glav.php">
			<?php
			echo '<input style="display: none;" name="id" value="' . $_GET['id'] . '">'
			?>
			<button>
				Возврат
			</button>
		</form>
	</div>
	<div class="row">
	<form action="laik.php" method="POST">
			<?php
				echo '<input style="margin-left: 30px" name="id2" value="' . $_GET['id2'] . '">'
			?>
			<?php
				echo '<input style="" name="id" value="' . $_GET['id'] . '">'
			?>
		<button>
			Лайк
		</button>
	</form>
		<button>
			ДисЛайк
		</button>
	</div>
	<form method="POST" action="coment.php">
		<div>
			<?php
				echo '<input style="display: none;" name="id2" value="' . $_GET['id2'] . '">'
			?>
			<?php
				echo '<input style="display: none;" name="id" value="' . $_GET['id'] . '">'
			?>
			<input type="" name="text" placeholder="Ваш коментарий">
			<button>
				Отправить
			</button>
		</div>
	</form>
	<?php 
	$conect = mysqli_connect('127.0.0.1', 'root', '', 'dn_sait');
	$sql = mysqli_query($conect, "SELECT * FROM coments INNER JOIN users ON coments.user_id = users.id WHERE post_id = '" . $_GET['id2'] . "'" );
	for($i = 0; $i < $sql->num_rows; $i++){ 
		$g = $sql ->fetch_assoc();
	?>
	<div class="container">
	<div class="row">
		<?php 
			echo '<img style="height: 30px; width: 30px;"src="' . $g['avatar'] . '">';
			echo '<p>' . $g['login'] . '</p>';
		?>
	</div>
	<div style="width: 200px">
		<?php 
			echo '<h3>' . $g['text'] . '</h3>';
		?>
	</div>
	</div>
	<?php 
		};
	?>
</body>
</html>
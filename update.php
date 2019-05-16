<meta charset="utf-8">
	<?php 
	$conect = mysqli_connect('127.0.0.1', 'root', '', 'dn_sait');
	$sql2 = mysqli_query($conect, "SELECT * FROM posts  INNER JOIN users ON posts.user_id = users.id WHERE id2 = '" . $_POST['id2'] . "'");
	$g2 = $sql2 ->fetch_assoc();
?>
	<form action="upp.php" method="POST" enctype="multipart/form-data">
		<?php 
				echo '<input style="display: none;" name="id2" value="' . $g2['id2'] . '">';
				echo '<input style="display: none;" name="id" value="' . $g2['id'] . '">';	
				echo '<input name="glav" value="' . $g2['glav'] . '">';
				echo '<input name="text" value="' . $g2['text'] . '">';
				echo '<input type="file" name="img">';
		?>
		<button>Изменить</button>
	</form>
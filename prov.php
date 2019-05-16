<?php
	$conect = mysqli_connect('127.0.0.1', 'root', '', 'dn_sait');
	$sql = mysqli_query($conect, "SELECT * FROM users WHERE login = '" . $_GET['login'] . "' AND pasword = '" . $_GET['password'] . "'");
	$g = $sql ->fetch_assoc();
	if ($sql->num_rows == 1){
	header('Location: http://Mail.R/glav.php?id=' . $g['id']);
	} else {
	header('Location: http://Mail.R/login.php?no=Чёт не так');
	};
?>

<?php 
$conect = mysqli_connect('127.0.0.1', 'root', '', 'dn_sait');
	$sql = mysqli_query($conect, "INSERT INTO posts (text, img, user_id, glav) VALUES ('" . $_POST['text'] ."','"  . 'image/' . $_FILES['img']['name'] ."','" . $_POST['id'] ."','" . $_POST['glav'] . "')");
	$sql2 = mysqli_query($conect, "SELECT * FROM users WHERE id='" . $_POST['id'] . "'");
	$g = $sql2->fetch_assoc();
	move_uploaded_file($_FILES["img"]["tmp_name"], 'image/' . $_FILES["img"]["name"]);
	header('Location: http://Mail.R/glav.php?id=' . $g['id']);
?>
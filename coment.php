<?php 
$conect = mysqli_connect('127.0.0.1', 'root', '', 'dn_sait');
	$sql = mysqli_query($conect, "INSERT INTO coments (text, user_id, post_id) VALUES ('" . $_POST['text'] ."','" . $_POST['id'] ."','" . $_POST['id2'] . "')");
	header('Location: http://Mail.R/post.php?id=' . $_POST['id'] . '&id2=' . $_POST['id2']);
?>
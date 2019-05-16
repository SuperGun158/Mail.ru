<?php
$conect = mysqli_connect('127.0.0.1', 'root', '', 'dn_sait');
$sql2 = mysqli_query($conect, "SELECT * FROM likes");
$g2 = $sql2 ->fetch_assoc();
if($g2['user_id'] != $_POST['id'] && $g2['post_id'] != $_POST['id2']){
	$sql = mysqli_query($conect, "INSERT INTO likes (post_id, user_id) VALUES ('" . $_POST['id2'] ."','" . $_POST['id'] ."')");
		header('Location: http://Mail.R/post.php?id=' . $_POST['id'] . '&id2=' . $_POST['id2']);
} else{
	$g = mysqli_query($conect, "DELETE FROM likes WHERE user_id ='". $_POST['id'] ."' AND post_id ='". $_POST['id2'] ."'");
	header('Location: http://Mail.R/post.php?id=' . $_POST['id'] . '&id2=' . $_POST['id2']);
};
?>
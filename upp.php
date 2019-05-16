<?php
$conect = mysqli_connect('127.0.0.1', 'root', '', 'dn_sait');
$query = mysqli_query($conect, "UPDATE posts SET text='". $_POST['text'] ."', img='". 'image/' . $_FILES['img']['name'] ."', glav='". $_POST['glav'] ."' WHERE id2='". $_POST['id2'] ."'");
move_uploaded_file($_FILES["img"]["tmp_name"], 'image/' . $_FILES["img"]["name"]);
header('Location: http://Mail.R/my.php?id=' . $_POST['id'] . '&id2=' . $_POST['id2']);
?>
<?php
$conect = mysqli_connect('127.0.0.1', 'root', '', 'dn_sait');
$g = mysqli_query($conect, "DELETE FROM posts WHERE id2='". $_POST['id2'] ."'");
header('Location: http://Mail.R/my.php?id=' . $_POST['id']);
?>
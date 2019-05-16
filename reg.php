<?php 
$conect = mysqli_connect('127.0.0.1', 'root', '', 'dn_sait');
if($_POST['email'] != null && $_POST['name'] != null && $_POST['login'] != null && $_POST['password'] != null && $_FILES['avatar'] != null){
$sql = mysqli_query($conect, "INSERT INTO users (email, name, login, pasword, avatar) VALUES('" . $_POST['email'] ."','" . $_POST['name'] ."','" . $_POST['login'] ."','" . $_POST['password'] ."', '" . 'image/' . $_FILES['avatar']['name'] ."')");
move_uploaded_file($_FILES["avatar"]["tmp_name"], 'image/' . $_FILES["avatar"]["name"]);
header('Location: http://Mail.R/login.php');
} else {
header('Location: http://Mail.R/index.php?no=Надо заполнить всё!!!');
};
?>
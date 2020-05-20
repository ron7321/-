<?php
$mysqli = mysqli_connect("127.0.0.1", "root", "", "magazin");

$name = $_POST['name'];
$price = $_POST['price'];
$category = $_POST['category'];
$description = $_POST['description'];
$file = $_FILES["pictures"]["name"];

$uploads_dir = 'image';
$tmp_name = $_FILES["pictures"]["tmp_name"];
$name = basename($_FILES["pictures"]["name"]);
move_uploaded_file($tmp_name, "$uploads_dir/$name");

$mysqli->query("INSERT INTO `tovars` (`id`, `name`, `price`, `description`, `category`, `file`) 
	VALUES (NULL, '$name', '$price', '$category', '$description', '$file')");

header('Location: add.php');
?>
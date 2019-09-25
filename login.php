<?php require('db.php'); 

if ($_POST['author_name'] && $_POST['password']) {
	 echo login($_POST['author_name'], $_POST['password']);
}

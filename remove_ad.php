<?php require('db.php'); 

if (isset($_POST['id'])) {
	removeAd($_POST['id']);
}

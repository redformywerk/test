<?php require('db.php'); 
$imgPath = '';

if (!empty($_FILES) && isset($_FILES['img'])) {
    $imgPath ='img/' . $_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'], $imgPath);
}

addNewAd($_POST['title'], $_POST['text'], $imgPath);
<?php
session_start();

/**
 * DATABASE CONFIGURATION
 */
function connectToDb() {
	return new PDO('mysql:host=localhost;dbname=site', 'root', '');
}

function getAdTable() {
	return 'advertisement';
}

function getContactsTable() {
	return 'contacts';
}

function getAllAdvertisement($sortBy = null) {
	$connection = connectToDb();
	$stmt  = $connection ->query('SELECT * from ' . getAdTable());
	
	$result = $stmt->fetchAll();
	return $result;
}

function getAllUsers($sortBy = null) {
	$connection = connectToDb();
	$stmt = $connection->query('SELECT * from ' . getContactsTable());

	$result = $stmt->fetchAll();
	return $result;
}

function getAllAdvertisementWithContacts($sortBy = 'date', $sortType = 'DESC', $limit = 10) {
	$connection = connectToDb();
	
	if ($limit != 0 ) { 
		$limitPart = ' LIMIT ' . $limit;
	} else {
		$limitPart = '';
	}

	$stmt  = $connection ->query(
		'SELECT ad.id as id, ad.text as text, ad.title as title,  ad.img as img, ad.date as date, cnt.id as author_id, cnt.author as author, cnt.emails as emails, cnt.phone_numbers as phone_numbers from `' . getAdTable() . '` as ad ' . 
		' LEFT JOIN ' . getContactsTable() . '  as cnt ON ad.author_id = cnt.id' . ' ORDER BY ' . $sortBy . ' ' . $sortType . $limitPart
	);
	
	$result = $stmt->fetchAll();
	return $result;
}

function smallText($text) {
	if (strlen($text) > 255) {
		$text = substr($text, 0, 255);
		$text  .= '...';
	}
	return $text;
}

function getAuthorId() {
	return $_SESSION ['author_id'];
}

function isAuthorLogged() {
	return isset( $_SESSION ['author_id']);
}

function logout() {
	session_unset();
}

function addNewAd($title, $text, $imgPath) {
	$sql = 'INSERT INTO ' . getAdTable() . ' (title, text, img, author_id) VALUES (?, ?, ?, ?)';
	$connection =  connectToDb();
	$stmt = $connection->prepare($sql);
	$stmt->execute([$title, $text, $imgPath, getAuthorId()]);
}

function getAdById($id) {
	$connection = connectToDb();
	$stmt  = $connection ->query('SELECT * from ' . getAdTable() . ' WHERE id=' . $id);
	
	return $stmt->fetch();
}

function getUserByName($name) {
	$connection = connectToDb();
	$stmt = $connection->query('SELECT * from ' . getContactsTable() . " WHERE author = '$name' ");  //спросить смысл этой выборки
//file_put_contents('/tmp/hoho.txt', print_r($name, true));
	return $stmt->fetch(); // спросить про fetch 
}

function login($authorName, $password) {
	$result = '';
	$author = getUserByName($authorName);
	if ($author) {
		if ($author['password'] == $password) {
			$_SESSION ['author_id'] = $author['id'];
			$result = $author['author'];
		}
	}
	return $result;
}

function removeAd($id) {
	$ad = getAdById($id);
	if ($ad) {
		if ($ad['author_id'] == getAuthorId()) {
				$sql = 'DELETE FROM  ' . getAdTable() . '  WHERE id= ' . $id;
				$connection =  connectToDb();
				$stmt = $connection->prepare($sql);
				$stmt->execute();
		}
	}
}

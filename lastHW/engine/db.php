<?php

function myDB_connect () {
	$config = getDB_config_php_lvl1();
	$db = mysqli_connect(
		$config['db_host'],
		$config['db_user'],
		$config['db_pass'],
		$config['db_name']
	);

	return $db;
}

function getAssocResult (string $query) {
	$result = _executeQuery($query);
	$return = [];

	while ($row = mysqli_fetch_assoc($result)) {
		$return[] = $row;
	}

	return $return;
}

function _executeQuery (string $query) {
	$db = myDB_connect();

	$result = mysqli_query($db, $query);

	mysqli_close($db);
	return $result;
}


function insertFeedback($feedbackText, $userName, $author)
{
	$query = sprintf("INSERT INTO `feedback` (`text`, `UserName`, `Author`) VALUES (\"%s\", \"%s\", \"%s\");",$feedbackText ,$userName, $author);	
	_executeQuery($query);
	
}

function getUser ($login) {
	$query = "SELECT * FROM users WHERE userLogin = \"$login\"";

	$user = getAssocResult($query);

	return $user[0]??false;

}

function getUsers() {
 	return getAssocResult('SELECT * FROM USERS;');
}

function getCommenst4User($UserName) {
	$query = "SELECT * FROM feedback WHERE UserName = \"$UserName\"";
	return getAssocResult($query);	 
}


function getUserByNameOrEmail($UserName, $email) {
	$query = "SELECT * FROM users WHERE userLogin = \"$UserName\" OR Email = \"$email\"";
	return getAssocResult($query);	 
}

function createUser($UserName, $email, $pass) {
	$query = sprintf("INSERT INTO `users` (`userLogin`, `Email`, `pass`) VALUES (\"%s\", \"%s\", \"%s\");",$UserName ,$email, $pass);		
	_executeQuery($query);	 
}
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

	while ($row = mysqli_fetch_assoc($result))
		$return[] = $row;

	return $return;
}

function _executeQuery (string $query) {
	$db = myDB_connect();

	$result = mysqli_query($db, $query);

	mysqli_close($db);
	return $result;
}

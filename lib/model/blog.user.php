<?php
/// Copyright (c) 2004-2007, Needlworks / Tatter Network Foundation
/// All rights reserved. Licensed under the GPL.
/// See the GNU General Public License for more details. (/doc/LICENSE, /doc/COPYRIGHT)

if (doesHaveMembership()) {
	$user = array('id' => getUserId());
	$user['name'] = DBQuery::queryCell("SELECT name 
			FROM {$database['prefix']}Users 
			WHERE userid = ".getUserId());
	$user['homepage'] = getDefaultURL($user['id']);
} else {
	$user = null;
}

function getUserEmail($userid) {
	global $database;
	return DBQuery::queryCell("SELECT loginid
		FROM {$database['prefix']}Users
		WHERE userid = ".$userid);
}

function getUserIdByEmail($email) {
	global $database;
	$email = trim($email);
	return DBQuery::queryCell("SELECT userid 
		FROM {$database['prefix']}Users
		WHERE loginid = '".$email."'");
}

function deleteUser($userid) {
	global $database;
	return DBQuery::execute("DELETE FROM {$database['prefix']}Users
		WHERE userid = $userid");
}
?>

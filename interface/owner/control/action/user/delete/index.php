<?php
/// Copyright (c) 2004-2009, Needlworks / Tatter Network Foundation
/// All rights reserved. Licensed under the GPL.
/// See the GNU General Public License for more details. (/doc/LICENSE, /doc/COPYRIGHT)
require ROOT . '/library/preprocessor.php';

$IV = array(
	'GET' => array(
		'userid' => array('id')
	) 
);
requireStrictRoute();

$result = Model_User::remove($_GET['userid']);
if ($result===true) {
	Utils_Respond::PrintResult(array('error' => 0));
}
else {
	Utils_Respond::PrintResult(array('error' => -1 , 'result' =>$result));
}
?>

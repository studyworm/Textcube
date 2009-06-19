<?php
/// Copyright (c) 2004-2009, Needlworks / Tatter Network Foundation
/// All rights reserved. Licensed under the GPL.
/// See the GNU General Public License for more details. (/doc/LICENSE, /doc/COPYRIGHT)
$IV = array(
	'GET' => array(
		'identify' => array('string', 'min' => 1),
		'owner' => array('email')
	) 
);
require ROOT . '/library/preprocessor.php';

requireStrictRoute();
requirePrivilege('group.creators');
if ($uid = Model_User::getUserIdByEmail($_GET['owner'])) {
	$result = addBlog('',$uid, $_GET['identify']);
	if ($result===true) {
		Utils_Respond::PrintResult(array('error' => 0));
	}
	else {
		Utils_Respond::PrintResult(array('error' => -1 , 'result' =>$result));
	}
} else {
	Utils_Respond::PrintResult(array('error' => -2 , 'result' => _t('등록되지 않은 소유자 E-mail 입니다.')));
}
?>

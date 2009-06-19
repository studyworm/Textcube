<?php
/// Copyright (c) 2004-2009, Needlworks / Tatter Network Foundation
/// All rights reserved. Licensed under the GPL.
/// See the GNU General Public License for more details. (/doc/LICENSE, /doc/COPYRIGHT)
require ROOT . '/library/preprocessor.php';
requireModel("blog.response.remote");

$result = getTrackbackLog($blogid, $suri['id']);
if ($result !== false) {
	$result = str_replace(' ', '&nbsp;', $result);
	Utils_Respond::PrintResult(array('error' => 0, 'result' => $result));
}
else
	Utils_Respond::PrintResult(array('error' => 1, 'msg' => Data_IAdapter::error()));
?> 

<?php
/// Copyright (c) 2004-2009, Needlworks / Tatter Network Foundation
/// All rights reserved. Licensed under the GPL.
/// See the GNU General Public License for more details. (/doc/LICENSE, /doc/COPYRIGHT)
require ROOT . '/library/preprocessor.php';
if (!empty($_GET['domain']) && setSecondaryDomain($blogid, $_GET['domain'])) {
	Utils_Respond::ResultPage(0);
}
Utils_Respond::ResultPage( - 1);
?>

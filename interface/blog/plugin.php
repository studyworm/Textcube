<?php
/// Copyright (c) 2004-2009, Needlworks / Tatter Network Foundation
/// All rights reserved. Licensed under the GPL.
/// See the GNU General Public License for more details. (/doc/LICENSE, /doc/COPYRIGHT)
require ROOT . '/library/preprocessor.php';

fireEvent($suri['directive'] . '/' . $suri['value']);
if (!headers_sent())
	Utils_Respond::NotFoundPage();
?>

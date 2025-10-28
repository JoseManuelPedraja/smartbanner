<?php
*  @author    Jose Manuel Pedraja <josesmanuel@pedraja.es>
*  @copyright GPL 3
*  @license   https://www.gnu.org/licenses/gpl-3.0.html  Academic Free License (AFL 3.0)
*/
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');

header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');

header('Location: ../');
exit;

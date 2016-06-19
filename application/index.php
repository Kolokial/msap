<?php
require_once('../config.smarty.class.php');
$oSmarty = new Smarty_Application();
$oSmarty->assign(array(
	'pageTitle' => 'Home'
));
$oSmarty->display('index.tpl');
?>
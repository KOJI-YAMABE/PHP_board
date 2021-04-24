<?php
session_start();
require('libs/dbconnect.php');
require_once('smarty/Smarty.class.php');

$smarty = new Smarty();
$smarty->template_dir = 'templates/';
$smarty->compile_dir  = 'templates_c/';
$smarty->default_modifiers = array('escape', 'nl2br');


$smarty->assign('name','Ned');

//** 次の行のコメントをはずすと、デバッギングコンソールを表示します
//$smarty->debugging = true;

$smarty->display('test.tpl');

?>

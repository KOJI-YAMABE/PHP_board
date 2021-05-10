<?php
session_start();
require('../../libs/dbconnect.php');
require_once('../../setup.php');
include 'check_error.php';

$smarty = new Smarty_mini_bbs();

if ($_REQUEST['action'] == 'rewrite' && isset($_SESSION['join'])) {
	$_POST = $_SESSION['join'];
}

$smarty->display('join/index.tpl');
?>

<?php
/* Smarty version 3.1.39, created on 2021-04-26 01:50:52
  from '/Applications/MAMP/htdocs/mini_bbs/templates/confirm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60861c7c34e9d4_58955774',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '508a7fe4fc008940e7cface272412be82e39b6be' => 
    array (
      0 => '/Applications/MAMP/htdocs/mini_bbs/templates/confirm.tpl',
      1 => 1619336265,
      2 => 'file',
    ),
    '7294ebf4d07f567c71bd477e2456182febe7108b' => 
    array (
      0 => '/Applications/MAMP/htdocs/mini_bbs/inc/head.php',
      1 => 1619399078,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_60861c7c34e9d4_58955774 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>オリジナル掲示板</title>
  <link rel="stylesheet" href="../style.css" />
</head>

<body>
  <div id="wrap">
    <div id="head">
      <h1>オリジナル掲示板</h1>
    </div>
    <div id="content">
      <div class="msg">
        <form action="insert.php" method="post">
          <input type="hidden" name="message" value="っっっｆ" />
          <input type="hidden" name="member_id" value="" />
          <input type="hidden" name="reply_post_id" value="" />
          投稿内容：
          っっっｆ
          <br><br>
          <a href="index.php">&laquo;&nbsp;入力に戻る</a> | <input type="submit" value="投稿" />
        </form>
      </div>
    </div>
  </div>
</body>

</html><?php }
}

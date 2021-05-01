<?php
/* Smarty version 3.1.39, created on 2021-04-28 03:13:05
  from '/Applications/MAMP/htdocs/mini_bbs/templates/join/check.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6088d2c1282b32_61086562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c84c39d1128b48e04d1a015bc0e4af2691b827a2' => 
    array (
      0 => '/Applications/MAMP/htdocs/mini_bbs/templates/join/check.tpl',
      1 => 1619399206,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_6088d2c1282b32_61086562 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>オリジナル掲示板</title>
    <link rel="stylesheet" href="../../style.css" />
  </head>
  

<body>
  <div id="wrap">
    <div id="head">
      <h1>会員登録</h1>
    </div>

    <div id="content">
      <p>記入した内容を確認して、「登録する」ボタンをクリックしてください</p>
      <form action="" method="post">
        <input type="hidden" name="action" value="submit" />
        <dl>
          <dt>ニックネーム</dt>
          <dd></dd>
          <dt>メールアドレス</dt>
          <dd></dd>
          <dt>パスワード</dt>
          <dd>【表示されません】</dd>
          <dt>プロフィール画像</dt>
          <dd>
                      </dd>
        </dl>
        <div><a href="index.php?action=rewrite">&laquo;&nbsp;戻る</a> | <input type="submit" value="登録" /></div>
      </form>
    </div>

  </div>
</body>

</html><?php }
}

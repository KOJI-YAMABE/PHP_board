<?php
/* Smarty version 3.1.39, created on 2021-05-09 05:12:17
  from '/Applications/MAMP/htdocs/mini_bbs/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60976f3100acb3_92189997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e059a9d76587189868c6b1eeaeae2b591cbba095' => 
    array (
      0 => '/Applications/MAMP/htdocs/mini_bbs/templates/login.tpl',
      1 => 1620092190,
      2 => 'file',
    ),
    '06a62cca6f1875b93194fc324a0bc5100bb0ea5a' => 
    array (
      0 => '/Applications/MAMP/htdocs/mini_bbs/board/inc/head.php',
      1 => 1619399078,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_60976f3100acb3_92189997 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
      <h1>ログイン</h1>
    </div>
    <div id="content">
      <div id="lead">
        <p>メールアドレスとパスワードを記入してログインしてください。</p>
        <p>入会手続きがまだの方はこちらからどうぞ。</p>
        <p>&raquo;<a href="join/">入会手続きをする</a></p>
      </div>
      <form action="" method="post">
        <dl>
          <dt>メールアドレス</dt>
          <dd>
            <input type="text" name="email" size="35" maxlength="255" value="" />
                                  </dd>
          <dt>パスワード</dt>
          <dd>
            <input type="password" name="password" size="35" maxlength="255" value="" />
          </dd>
          <dt>ログイン情報の記録</dt>
          <dd>
            <input id="save" type="checkbox" name="save" value="on">
                        <label for="save">次回からは自動的にログインする</label>
          </dd>
        </dl>
        <div>
          <input type="submit" value="ログインする" />
        </div>
      </form>
    </div>
  </div>
</body>

</html><?php }
}

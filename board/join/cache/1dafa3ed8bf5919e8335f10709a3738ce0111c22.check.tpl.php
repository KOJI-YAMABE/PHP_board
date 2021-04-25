<?php
/* Smarty version 3.1.39, created on 2021-04-24 05:01:01
  from '/Applications/MAMP/htdocs/mini_bbs/templates/join/check.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6083a60d9b96f4_24116132',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'c84c39d1128b48e04d1a015bc0e4af2691b827a2' => 
    array (
      0 => '/Applications/MAMP/htdocs/mini_bbs/templates/join/check.tpl',
      1 => 1619234581,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_6083a60d9b96f4_24116132 (Smarty_Internal_Template $_smarty_tpl) {
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
      <h1>会員登録</h1>
    </div>

    <div id="content">
      <p>記入した内容を確認して、「登録する」ボタンをクリックしてください</p>
      <form action="" method="post">
        <input type="hidden" name="action" value="submit" />
        <dl>
          <dt>ニックネーム</dt>
          <dd>
            <?php echo '<?php ';?>
print(h($_SESSION['join']['name'])); <?php echo '?>';?>

          </dd>
          <dt>メールアドレス</dt>
          <dd>
            <?php echo '<?php ';?>
print(h($_SESSION['join']['email'])); <?php echo '?>';?>

          </dd>
          <dt>パスワード</dt>
          <dd>
            【表示されません】
          </dd>
          <dt>プロフィール画像</dt>
          <dd>
            <?php echo '<?php ';?>
if ($_SESSION['join']['image'] !== ''): <?php echo '?>';?>

            <img src="../member_picture/<?php echo '<?php ';?>
print(h($_SESSION['join']['image'])); <?php echo '?>';?>
">
            <?php echo '<?php ';?>
endif; <?php echo '?>';?>

          </dd>
        </dl>
        <div><a href="index.php?action=rewrite">&laquo;&nbsp;戻る</a> | <input type="submit" value="登録" /></div>
      </form>
    </div>

  </div>
</body>

</html><?php }
}

<?php
/* Smarty version 3.1.39, created on 2021-05-11 06:44:49
  from '/Applications/MAMP/htdocs/mini_bbs/templates/join/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609a27e1a14395_36849536',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '834369ac4ec382d5cb29f4bc5e55485a5ad52cf0' => 
    array (
      0 => '/Applications/MAMP/htdocs/mini_bbs/templates/join/index.tpl',
      1 => 1620715475,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609a27e1a14395_36849536 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '673899548609a27e19d0539_31321043';
?>
<!DOCTYPE html>
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
				<p>次のフォームに必要事項をご記入ください。</p>
				<form action="" method="post" enctype="multipart/form-data">
					<dl>
						<dt>ニックネーム<span class="required">必須</span></dt>
						<dd>
							<input type="text" name="name" size="35" maxlength="50" />
							<?php if ($_smarty_tpl->tpl_vars['blank']->value) {?>
								<p class="error">*ニックネームを入力してください</p>
							<?php }?>
						</dd>
						<dt>メールアドレス<span class="required">必須</span></dt>
						<dd>
							<input type="text" name="email" size="35" maxlength="255" />							
							<?php if ($_smarty_tpl->tpl_vars['email']->value) {?>
								<p class="error">*正しいメールアドレスを指定してください</p>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['duplicate']->value) {?>
								<p class="error">*指定されたメールアドレスは既に登録されています</p>
							<?php }?>
							<dt>パスワード<span class="required">必須</span></dt>
						</dd>
						<dd>
							<input type="password" name="password" size="10" />				
							<?php if ($_smarty_tpl->tpl_vars['password']->value) {?>
								<p class="error">*半角英数字の４文字以上で入力してください</p>
							<?php }?>
						</dd>
						<dt>プロフィール画像</dt>
						</dd>
						<dd>
							<input type="file" name="image" size="35" value="test" />
							<?php if ($_smarty_tpl->tpl_vars['type']->value) {?>
								<p class="error">*画像を指定してください</p>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
								<p class="error">*画像を改めて指定してください</p>
							<?php }?>
						</dd>
					</dl>
					<div><input type="submit" value="入力内容を確認する" /></div>
				</form>
			</div>
		</div>
	</body>

</html><?php }
}

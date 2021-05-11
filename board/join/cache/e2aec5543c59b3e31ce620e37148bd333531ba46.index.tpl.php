<?php
/* Smarty version 3.1.39, created on 2021-05-11 06:44:49
  from '/Applications/MAMP/htdocs/mini_bbs/templates/join/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609a27e1a26375_86896625',
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
  'cache_lifetime' => 3600,
),true)) {
function content_609a27e1a26375_86896625 (Smarty_Internal_Template $_smarty_tpl) {
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
				<p>次のフォームに必要事項をご記入ください。</p>
				<form action="" method="post" enctype="multipart/form-data">
					<dl>
						<dt>ニックネーム<span class="required">必須</span></dt>
						<dd>
							<input type="text" name="name" size="35" maxlength="50" />
													</dd>
						<dt>メールアドレス<span class="required">必須</span></dt>
						<dd>
							<input type="text" name="email" size="35" maxlength="255" />							
																					<dt>パスワード<span class="required">必須</span></dt>
						</dd>
						<dd>
							<input type="password" name="password" size="10" />				
													</dd>
						<dt>プロフィール画像</dt>
						</dd>
						<dd>
							<input type="file" name="image" size="35" value="test" />
																				</dd>
					</dl>
					<div><input type="submit" value="入力内容を確認する" /></div>
				</form>
			</div>
		</div>
	</body>

</html><?php }
}

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
							{if $blank}
								<p class="error">*ニックネームを入力してください</p>
							{/if}
						</dd>
						<dt>メールアドレス<span class="required">必須</span></dt>
						<dd>
							<input type="text" name="email" size="35" maxlength="255" />							
							{if $email}
								<p class="error">*正しいメールアドレスを指定してください</p>
							{/if}
							{if $duplicate}
								<p class="error">*指定されたメールアドレスは既に登録されています</p>
							{/if}
							<dt>パスワード<span class="required">必須</span></dt>
						</dd>
						<dd>
							<input type="password" name="password" size="10" />				
							{if $password}
								<p class="error">*半角英数字の４文字以上で入力してください</p>
							{/if}
						</dd>
						<dt>プロフィール画像</dt>
						</dd>
						<dd>
							<input type="file" name="image" size="35" value="test" />
							{if $type}
								<p class="error">*画像を指定してください</p>
							{/if}
							{if $error}
								<p class="error">*画像を改めて指定してください</p>
							{/if}
						</dd>
					</dl>
					<div><input type="submit" value="入力内容を確認する" /></div>
				</form>
			</div>
		</div>
	</body>

</html>
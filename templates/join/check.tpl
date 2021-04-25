<!DOCTYPE html>
<html lang="ja">
{include file='../../inc/head.php'}

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
          <dd>{$name}</dd>
          <dt>メールアドレス</dt>
          <dd>{$email}</dd>
          <dt>パスワード</dt>
          <dd>【表示されません】</dd>
          <dt>プロフィール画像</dt>
          <dd>
            {if $image}
            <img src="../../images/member_picture/{$image}">
            {/if}
          </dd>
        </dl>
        <div><a href="index.php?action=rewrite">&laquo;&nbsp;戻る</a> | <input type="submit" value="登録" /></div>
      </form>
    </div>

  </div>
</body>

</html>
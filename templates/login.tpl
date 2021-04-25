<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
{include file='../inc/head.php'}

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
            <input type="text" name="email" size="35" maxlength="255" value="{$email}" />
            {if $blank}
              <p class="error">*メールアドレスが正しくありません</p>
            {/if}
            {if $failed}
              <p class="error">*ログインに失敗しました。正しくご記入ください。</p>
            {/if}
          </dd>
          <dt>パスワード</dt>
          <dd>
            <input type="password" name="password" size="35" maxlength="255" value="{$password}" />
          </dd>
          <dt>ログイン情報の記録</dt>
          <dd>
            <input id="save" type="checkbox" name="save" value="on">
            {if $blank}
              <p class="error">*パスワードが正しくありません</p>
            {/if}
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

</html>
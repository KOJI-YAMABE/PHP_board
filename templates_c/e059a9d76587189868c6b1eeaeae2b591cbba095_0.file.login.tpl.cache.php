<?php
/* Smarty version 3.1.39, created on 2021-04-25 04:15:46
  from '/Applications/MAMP/htdocs/mini_bbs/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6084ecf2c42a35_37987743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e059a9d76587189868c6b1eeaeae2b591cbba095' => 
    array (
      0 => '/Applications/MAMP/htdocs/mini_bbs/templates/login.tpl',
      1 => 1619324144,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inc/head.php' => 1,
  ),
),false)) {
function content_6084ecf2c42a35_37987743 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '17529540776084ecf2bfdbd0_20348608';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php $_smarty_tpl->_subTemplateRender('file:inc/head.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
            <input type="text" name="email" size="35" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" />
            <?php if ($_smarty_tpl->tpl_vars['blank']->value) {?>
              <p class="error">*メールアドレスが正しくありません</p>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['failed']->value) {?>
              <p class="error">*ログインに失敗しました。正しくご記入ください。</p>
            <?php }?>
          </dd>
          <dt>パスワード</dt>
          <dd>
            <input type="password" name="password" size="35" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
" />
          </dd>
          <dt>ログイン情報の記録</dt>
          <dd>
            <input id="save" type="checkbox" name="save" value="on">
            <?php if ($_smarty_tpl->tpl_vars['blank']->value) {?>
              <p class="error">*パスワードが正しくありません</p>
            <?php }?>
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

<?php
/* Smarty version 3.1.39, created on 2021-05-04 02:44:42
  from '/Applications/MAMP/htdocs/mini_bbs/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6090b51a80de80_03712968',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13afe80dc639812cacd6d63d51ad9766a9873bb3' => 
    array (
      0 => '/Applications/MAMP/htdocs/mini_bbs/templates/index.tpl',
      1 => 1620096073,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inc/head.php' => 1,
  ),
),false)) {
function content_6090b51a80de80_03712968 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '15406681396090b51a791914_49638801';
?>
<!DOCTYPE html>
<html lang="ja">
<?php $_smarty_tpl->_subTemplateRender('file:inc/head.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
  <div id="wrap">
    <div id="head">
      <h1>オリジナル掲示板</h1>
    </div>
    <div id="content">
      <div style="text-align: right"><a href="logout.php">ログアウト</a></div>
      <form action="confirm.php" method="post">
        <dl>
          <dt><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
さん、メッセージをどうぞ</dt>
          <dd>
            <textarea name="msg" cols="50" rows="5"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</textarea>
            <input type="hidden" name="reply_post_id" value="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
" />
            <input type="hidden" name="member_id" value="<?php echo $_smarty_tpl->tpl_vars['member_id']->value;?>
" />
          </dd>
        </dl>
        <div>
          <p>
            <input type="submit" value="入力内容を確認" />
          </p>
        </div>
      </form>

      <!-- 投稿記事を取得する -->
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
        <div class="msg">
          <img src="../images/member_picture/<?php echo $_smarty_tpl->tpl_vars['post']->value['picture'];?>
" width="48" height="48" alt="<?php echo $_smarty_tpl->tpl_vars['post']->value['name'];?>
" />
          <p>
            <?php echo $_smarty_tpl->tpl_vars['post']->value['message'];?>
<span class="name">（<?php echo $_smarty_tpl->tpl_vars['post']->value['name'];?>
）</span>[<a href="index.php?res=<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">返信</a>]
          </p>
          <p class="day">
            <a href="view.php?id=<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['created'];?>
</a>
            <!-- 返信投稿のみ表示 -->
            <?php if ($_smarty_tpl->tpl_vars['post']->value['reply_message_id'] > 0) {?>
              <a href="view.php?id=<?php echo $_smarty_tpl->tpl_vars['post']->value['reply_message_id'];?>
">
                返信元のメッセージ</a>
            <?php }?>
          </p>
        </div>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

      <ul class="paging">
        <?php if ($_smarty_tpl->tpl_vars['last']->value != null) {?>
          <li><a href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['last']->value;?>
">前のページへ</a></li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['next']->value != null) {?>
          <li><a href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['next']->value;?>
">次のページへ</a></li>
        <?php }?>
      </ul>
      
    </div>
  </div>
</body>

</html><?php }
}

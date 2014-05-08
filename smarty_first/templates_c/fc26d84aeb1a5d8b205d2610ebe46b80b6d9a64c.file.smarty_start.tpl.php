<?php /* Smarty version Smarty-3.1.18, created on 2014-05-08 07:39:15
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/php/smarty_first/templates/smarty_start.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1676234483536b1883a9cac5-97846948%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc26d84aeb1a5d8b205d2610ebe46b80b6d9a64c' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/php/smarty_first/templates/smarty_start.tpl',
      1 => 1399526005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1676234483536b1883a9cac5-97846948',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'todo_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_536b1883ad5116_52600463',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536b1883ad5116_52600463')) {function content_536b1883ad5116_52600463($_smarty_tpl) {?><!-- トップページ -->
<!-- ここからインサートページetc..にとんでいく -->

<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</head>
<body>



<hr>


<p>
<input type="submit" value="[+] ToDoを追加" class="btnAdd" onclick="location.href='http://localhost/php/smarty_first/smarty_first_insert.php';"/>
<input type="button" value="ToDoをクリア" class="btnCdelete" onclick="ToDoApp.clearAction();" />
<input type="button" value="ToDoグループを追加" class="btnAddGroup" onclick="ToDoApp.createGroup();" />

<!--input type="button" value="メニュー" class="btnMenu" onclick="ToDoApp.showMenu();" /-->
</p>

<!-- 繰り返させたい処理 -->
<!-- del/finish_flgを元にして、表示/非表示の判定 -->
<hr>
<div id = "todo_tag">
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['tag'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tag']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['name'] = 'tag';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['todo_list']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['tag']['total']);
?>
	<!-- デザインの事を考えると<li>で囲んでおいたほうがよい？ -->
	<li>
        <!-- 今回の形式だとform不必要 -->
        <!-- <form action="http://localhost/php/smarty_first/smarty_first.php" method="post"> -->
	      <?php echo $_smarty_tpl->tpl_vars['todo_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tag']['index']]['todo_text'];?>

	      <input type="button" value="完了" name="finish" class="btnFinish" onclick="location.href='http://localhost/php/smarty_first/smarty_first.php?finish=1&id=<?php echo $_smarty_tpl->tpl_vars['todo_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tag']['index']]['todo_id'];?>
';" />
	      <input type="button" value="削除" name="delete" class="btnDelete" onclick="location.href='http://localhost/php/smarty_first/smarty_first.php?delete=1&id=<?php echo $_smarty_tpl->tpl_vars['todo_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tag']['index']]['todo_id'];?>
';"/>
	    <!-- </form> -->
    </li>
<?php endfor; endif; ?><!-- /#tag -->
</div><!-- /#todo_tag -->

</div><!-- /#control -->
</div><!-- /#todoBox -->


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>

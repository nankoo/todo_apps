<?php /* Smarty version Smarty-3.1.18, created on 2014-05-08 07:39:08
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/php/smarty_first/templates/smarty_first_insert.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1464983208536b187c5fb667-73715712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19854b173ebaa67be7fca1d42eeaac472335d7d3' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/php/smarty_first/templates/smarty_first_insert.tpl',
      1 => 1399524885,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1464983208536b187c5fb667-73715712',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_536b187c61f848_19129663',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536b187c61f848_19129663')) {function content_536b187c61f848_19129663($_smarty_tpl) {?><!-- ここでtodoリストを作成し、DBにインサートする -->


<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</head>

<body>
    <div class="insert_message">
      <!-- 下記で、phpファイル指定 -->
      <!-- データをphpファイルに送った後、うまく違和感なく遷移させる方法。なぜ？ -->
      <form class="form-vertical" action="http://localhost/php/smarty_first/smarty_first_insert.php" method="post">
        <fieldset>
          <legend>カテゴリ</legend>
          <p><label><input type="radio" name="category_id" value="1">仕事</label></p>
          <p><label><input type="radio" name="category_id" value="2">プライベート</label></p>
        </fieldset>
        <br>
        <fieldset>
          <legend>サブカテゴリ</legend>
          <p><label><input type="radio" name="sub_category_id" value="1">スポーツ</label></p>
          <p><label><input type="radio" name="sub_category_id" value="2">読書</label></p>
          <p><label><input type="radio" name="sub_category_id" value="3">音楽</label></p>
          <p><label><input type="radio" name="sub_category_id" value="4">旅行</label></p>
          <br>
        </fieldset>
        <legend>todoテキストを入力</legend>
        <input type ="text" class="input_txt" name="todo_text" size="100"></br>
        <input type="submit"　size="30" value="メッセージ送信" />
      </form>
    </div>


    <br><br>
    <a href= 'http://localhost/php/smarty_first/smarty_first.php'>トップに戻ります</a>



<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php }} ?>

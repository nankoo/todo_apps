<!-- トップページ -->
<!-- ここからインサートページetc..にとんでいく -->

{include file="header.tpl"}
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
{section name=tag loop=$todo_list}
	<!-- デザインの事を考えると<li>で囲んでおいたほうがよい？ -->
	<li>
        <!-- 今回の形式だとform不必要 -->
        <!-- <form action="http://localhost/php/smarty_first/smarty_first.php" method="post"> -->
	      {$todo_list[tag].todo_text}
	      <input type="button" value="完了" name="finish" class="btnFinish" onclick="location.href='http://localhost/php/smarty_first/smarty_first.php?finish=1&id={$todo_list[tag].todo_id}';" />
	      <input type="button" value="削除" name="delete" class="btnDelete" onclick="location.href='http://localhost/php/smarty_first/smarty_first.php?delete=1&id={$todo_list[tag].todo_id}';"/>
	    <!-- </form> -->
    </li>
{/section}<!-- /#tag -->
</div><!-- /#todo_tag -->

</div><!-- /#control -->
</div><!-- /#todoBox -->


{include file="footer.tpl"}
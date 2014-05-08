<!-- 繰り返すtodoの中身 -->
<!-- トップページに含まれる -->

{include file="header.tpl"}

<body>

	{* sectionの例 *}
	{* 表示されない。なぜ？ *}
	{section name=customer loop=$custid}
       id: {$custid[customer]}<br />
       name: {$name[customer]}<br />
       address: {$address[customer]}
    {/section}

<!-- 下記にtodoの中身を表示 -->
    {* この例は $custid 配列のすべての値を表示します *}
        {section name=todo loop=$text}        

          todoだよ: {$text[todo]}
          {/section}
        
       
          <!-- 下記で削除・完了flgを切り替え -->
          <input type="submit" value="削除" class="btnAdd" onclick="location.href='http://localhost/php/smarty_first//smarty_first_insert.php';"/>
          <input type="submit" value="完了" class="btnAdd" onclick="location.href='http://localhost/php/smarty_first//smarty_first_insert.php';"/>
        



{include file="footer.tpl"}
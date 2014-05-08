<!-- ここでtodoリストを作成し、DBにインサートする -->


{include file="header.tpl"}
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



{include file="footer.tpl"}


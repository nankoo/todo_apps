<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>ToDo管理_投稿</title>
<!--
meta name="viewport" content="width=device-width; initial-scale=1.0" />
<link rel="stylesheet" href="css/common.css" type="text/css" />
<link rel="stylesheet" href="css/iphone.css" type="text/css" media="only screen and (max-width: 320px)" />
<script src="js/lib/jquery.js"></script>
<script src="todo.js"></script>
-->

    <link rel="stylesheet" href="main.css">
    <!-- <link rel="stylesheet" href="popup.css"> -->
    <!-- Bootstrap link -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="insert_message">
      <!-- 下記で、phpファイル指定 -->
      <form class="form-vertical" action="todo_insert.php" method="post">
        <label class="demolabel">カテゴリ：</label>
        <input type="text" class="input_txt" name="name1"></br>
        <label class="demolabel">サブカテゴリ：</label>
        <input type="text" class="input_txt" ></br>
        <label class="demolabel">todoテキストを入力：</label>
        <input type ="text" class="input_txt" name="name2" size="100"></br>
        <input type="submit"　size="30" value="メッセージ送信" />
      </form>
    </div>


<?php
$url = "localhost";
$user = "root";
$pass = "sj941259";
$db = "todo_list";

$con = mysql_connect($url, $user, $pass)or die ("接続に失敗しました");
print "接続OK<BR><BR>";


mysql_select_db($db);
//エラー表示が出ないようにする
if (empty($a1_d) or empty($a2_d)){
	echo "空だお";

}
else{
	//htmlとの結び付け
    $a1_d = $_POST["name1"];
    $a2_d = $_POST["name2"];
    //機能ごとのスクリプト（追記/列挙）
    mysql_query("INSERT INTO tbk (name,mess)values('$a1_d', '$a2_d')");
}




print "<BR><a href= 'http://localhost/php/smarty_first/samrty_first.php'>トップに戻ります</a>"
?>

<!-- 以下jsでやりたい -->
<h2>ライブデモ</h2>
          <p>下のボタンをクリックするとjavascriptを経由してモーダルを切り替えます。それが下にスライドして、ページの最上部からフェードインします。</p>
          <!-- sample modal content -->
          <div id="myModal" class="modal hide fade">
            <div class="modal-header">
              <a class="close" data-dismiss="modal" >&times;</a>
              <h3>見出しモーダル</h3>
            </div>
            <div class="modal-body">
              <h4>モーダル内のテキスト</h4>
              <p>サンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプルサンプル</p>

              <h4>モーダルのポップオーバー</h4>
              <p><a href="#" class="btn popover-test" title="A Title" data-content="ここに、ある驚かす内容があります。コレは非常に素晴らしいということ">ボタン</a>のホバーでポップオーバーをトリガする必要があります。 </p>

              <h4>モーダルのツールチップ</h4>
              <p><a href="#" class="tooltip-test" title="ツールチップ">このリンク</a>と<a href="#" class="tooltip-test" title="ツールチップ">あのリンク</a> ホバーのツールチップを持つ必要があります。</p>
            </div>
            <div class="modal-footer">
              <a href="#" class="btn btn-primary">変更を保存する</a>
              <a href="#" class="btn" data-dismiss="modal" >閉じる</a>
            </div>
          </div>
          <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-large">デモを起動する</a>


</body>
</html>
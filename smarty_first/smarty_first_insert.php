
<?php

$url = "localhost";
$user = "root";
$pass = "sj941259";
$db = "todo_list";

$con = mysql_connect($url, $user, $pass)or die ("接続に失敗しました");

require_once("config.php");

mysql_select_db($db);
//エラー表示が出ないようにする。なぜ？


// 「&&」：かつ
$test = false;
echo empty($test)."<br>";
echo isset($test)."<br>";
if($test == 0){
  echo "正解<br>";
}


  if(isset($_POST['category_id']) && isset($_POST['sub_category_id']) && isset($_POST["todo_text"])){



      $a1_cate = $_POST["category_id"];
      $a1_sub_cate = $_POST["sub_category_id"];
      $a2_todo_text = $_POST["todo_text"];
      //機能ごとのスクリプト（追記/列挙）
      mysql_query("INSERT INTO _user_todo_list (category_id, sub_category_id, todo_text)values('$a1_cate', '$a1_sub_cate', '$a2_todo_text')");


  }
$smarty->display('smarty_first_insert.tpl');

?>

<!-- 繰り返すtodoの中身のphp -->
<!-- トップページに含まれる -->

<?php


require_once("config.php");

//section(smarty_繰り返し)の例/////
//データベースから値を取得し、下記のように配列にまとめ,tplのほうでsectionにいれる?
$id = array(1001,1002,1003);
$smarty->assign('custid',$id);

$fullnames = array('John Smith','Jack Jones','Jane Munson');
$smarty->assign('name',$fullnames);

$addr = array('253 Abbey road', '417 Mulberry ln', '5605 apple st');
$smarty->assign('address',$addr);
/////////////////////////////////


SELECT * from _user_todo_list where del_flg in (0)

echo "データベース？";
$result = mysql_query('SELECT todo_id FROM todo_list,_user_todo_list');
if (!$result) {
    //die('クエリーが失敗しました。'.mysql_error());
}
//連想配列:mysql_fetch_assoc
while ($row = mysql_fetch_assoc($result)) {
    $smarty->assign('id',$row['todo_id'])
    //$smarty->assign('text',$row['todo_text'])
}

$smarty->display('smarty_todo_tag.tpl');

?>

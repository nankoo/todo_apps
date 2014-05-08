<?php
//header('Location: http://localhost/php/smarty_first/smarty_first.php', true, 303);
require_once("config.php");



  $con = mysql_connect(DB_HOST, DB_USER, DB_PASSWD)or die ("接続に失敗しました");
    print "接続OK<BR><BR>";
    mysql_select_db(DB_NAME);


$sql = "SELECT * from _user_todo_list where del_flg in (0) and finish_flg in (0) order by todo_id";

$res01 = getTableData($sql);
echo "<pre>";
//print_r($res01);
echo "</pre>";
echo "<hr>";

if(isset($_GET['id'])) {
      $id = $_GET['id'];
      print("$id<br>\n");
  }


// 変数
$smarty->assign("hello", "Hello World!");

//print_r($_REQUEST);
//print($smarty.get.id)



// ユーザのtodo一覧を取得
$todo_list = getUserTodoList();
$smarty->assign("todo_list", $todo_list);

// 上記のメソッドで取得をしているため、不要
//$todo_id = get_todo_id();
//$smarty->assign("id", $todo_id);

//finishボタン、delボタンが押された時に、finish_flg/del_flgを「1」にする
if (isset($_GET['finish'])) {
        //ボタン1の時の処理 
        //(header関数で別のページに飛ばすことも可。その場合、他のPOSTの値を引き継ぐ時は
        // SESSION変数を使うとよいかも) 
        //mysql_query("UPDATE _user_todo_list SET finish_flg=1 where todo_id=$smarty_get.id");
	    $id = $_GET['id'];
	    echo "fin";
        mysql_query("UPDATE _user_todo_list SET del_flg=1 where todo_id=".$id);
        header('Location: http://localhost/php/smarty_first/smarty_first.php', true, 303);
    }elseif (isset($_GET['delete'])){
    	//ボタン2の時の処理
        $id = $_GET['id'];
        echo "del";
        mysql_query("UPDATE _user_todo_list SET del_flg=1 where todo_id=".$id);
        header('Location: http://localhost/php/smarty_first/smarty_first.php', true, 303);
    }

// テンプレートファイルを読み込む
$smarty->display('smarty_start.tpl');


#---------------------------------------------------------------------------------------------------------
# 関数は整理しておきましょう

function get_todo_id(){
	//db接続
	//select実行
	//結果を変数に代入
    //configで下記４つの変数読み込んでるはずなのに、エラーになる。なぜ？
    
    //$result= mysql_query("SELECT * from _user_todo_list order by todo_id");
    // 下記,del_flgとfinishflgが0のレコードを表示
    $result= mysql_query("SELECT * from _user_todo_list order by todo_id");
    
	$del_fin_flg=array();    
    while($kekka = mysql_fetch_assoc($result)){
		$del_fin_flg[]=$kekka;
    }
   
	return $del_fin_flg;
}


function getTableData($sql){

    $result= mysql_query($sql);
	$res=array();    
    while($kekka = mysql_fetch_assoc($result)){
		//echo "<pre>";
    	//print_r($kekka);
		//echo "</pre>";
		//array_push($res, $kekka);
		//下記のものでも、配列に値を挿入できるはず
		$res[]=$kekka;
    } 
	return $res;
}


function getUserTodoList(){
	//db接続
	//select実行
	//結果を変数に代入

    //$result= mysql_query("SELECT * from _user_todo_list order by todo_id");
    // 下記,del_flgとfinishflgが0のレコードを表示
    $sql = "SELECT * from _user_todo_list where del_flg in (0) and finish_flg in (0) order by todo_id";

    $result= mysql_query($sql);
	$res=array();    
    while($kekka = mysql_fetch_assoc($result)){
		//echo "<pre>";
    	//print_r($kekka);
		//echo "</pre>";
		//array_push($res, $kekka);
		//下記のものでも、配列に値を挿入できるはず
		$res[]=$kekka;
    }
  
	return $res;
}

mysql_close($con);
?>

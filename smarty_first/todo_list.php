
<?php
$url = "localhost";
$user = "root";
$pass = "sj941259";
$db = "todo_list";

$con = mysql_connect($url, $user, $pass)or die ("データベース接続に失敗しました");
print "データベース接続OK<BR><br><br>";


print "＜todo_リスト＞<BR>";
mysql_select_db($db);

 //htmlとの結び付け
///$a1_d = $_POST["name1"];
///$a2_d = $_POST["name2"];


//機能ごとのスクリプト（追記/列挙）
///mysql_query("INSERT INTO tbk (name,mess)values ('$a1_d', '$a2_d')");
$req = mysql_query("SELECT * from tbk order by bang");

//スクリプトからの表示
while($kekka = mysql_fetch_array($req)){
	//print $kekka[0];
	//print":";
	print $kekka[1];
	print":";
	print $kekka[2];

	print"<BR>";

}
mysql_close($con);


?>
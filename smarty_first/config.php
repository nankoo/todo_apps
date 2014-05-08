<?php

/* 
 * config.php 
 * アプリケーションの設定ファイル
 * @author Atsushi Ito <atsushi.ito@geechs.com>
 */



// ファイルパス設定
define('DOC_ROOT', '/Applications/XAMPP/xamppfiles/htdocs/php/smarty_first/');
define('LIB_ROOT', DOC_ROOT.'libs/');

/*
 * DB設定	
 */
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWD', 'sj941259');
define('DB_NAME', 'todo_list');


/*
 * テンプレート設定	
 */
// smarty 設定
require_once(LIB_ROOT.'Smarty.class.php');


$smarty = new Smarty();
$smarty->template_dir = DOC_ROOT.'templates/';
$smarty->compile_dir  = DOC_ROOT.'templates_c/'; // chmod 777
$smarty->caching = false;
$smarty->force_compile = true;


// 共通の設定項目
//列挙？みたいな
$smarty->assign("app_title","What's happenning with you?");
$smarty->assign("title","smarty_todo");
$smarty->assign("hello","こんにちはー");
$smarty->assign("meta_keywords","bootstrap,フルボッコヒーローズ,フルボッコ,リセマラ,フライングゲットガチャ,フラゲガチャ,フラゲ");

?>
<?php
include "./smarty.ini.php";
$title="深处浅出之Smarty模板引擎工作机制";    
$content="Smarty模板引擎工作机制流程图";
$auth="MarcoFly";
$website="www.MarcoFly.com";

$smarty->assign("title",$title);
$smarty->assign("content",$content);    
$smarty->assign("auth",$auth);
$smarty->assign("website",$website);
$smarty->display("index.dwt");

?>

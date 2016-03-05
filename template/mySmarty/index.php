/*index.php文件*/
<?php
    include "./Smarty.ini.php";
    $title="深入浅出之Smarty模板引擎工作机制";
    $content="Smarty模板引擎工作机制流程图";
    $auth="MarcoFly";
    $website="www.MarcoFly.com";
    $tpl->assign("title",$title);
    $tpl->assign("content",$content);
    $tpl->assign("auth",$auth);
    $tpl->assign("website",$website);
    $tpl->display("index.dwt");
?>

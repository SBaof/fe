<?php

include_once './Smarty.ini.php';

$arr = [
    'red',
    'green',
    'blue',
];
$title = "asdf";

$tpl->assign('mycolors', $arr);
$tpl->assign('titlle', $title);
var_dump("asfa");
$tpl->display("foreach.dwt");
var_dump("qwrqwer");

<?php
/* Smarty version 3.1.30-dev/9, created on 2015-12-26 04:10:04
  from "/Users/bjhl/fe/template/index.dwt" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.30-dev/9',
  'unifunc' => 'content_567e131c11bd33_37134615',
  'file_dependency' => 
  array (
    '7fde0c68977d8c9101be8771123c398cd901ac4e' => 
    array (
      0 => '/Users/bjhl/fe/template/index.dwt',
      1 => 1451103002,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_567e131c11bd33_37134615 ($_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><{$title}></title>
</head>
<body>
<p>内容：<?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</p>
<p>作者：<?php echo $_smarty_tpl->tpl_vars['auth']->value;?>
</p>
<p>网址:<?php echo $_smarty_tpl->tpl_vars['website']->value;?>
</p>
</body>
</html>

<?php }
}

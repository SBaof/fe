<?php
/* Smarty version 3.1.30-dev/9, created on 2015-12-26 08:50:12
  from "/Users/bjhl/web/fe/template/index.dwt" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.30-dev/9',
  'unifunc' => 'content_567e54c4926298_32246873',
  'file_dependency' => 
  array (
    '9139f5f3d51947f2609765c9a645bf54fdcc82d0' => 
    array (
      0 => '/Users/bjhl/web/fe/template/index.dwt',
      1 => 1451103002,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_567e54c4926298_32246873 ($_smarty_tpl) {
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

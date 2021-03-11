<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-30 22:03:32
  from 'D:\openserver\OSPanel\domains\localhost\lastlb\views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f74d684dc2d66_18326537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd309280f21faab5a03cfe6d92f7a841255472ade' => 
    array (
      0 => 'D:\\openserver\\OSPanel\\domains\\localhost\\lastlb\\views\\index.tpl',
      1 => 1601492612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f74d684dc2d66_18326537 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<title>LB12</title>
</head>
<body>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['people']->value, 'p', false, 'k');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
		<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
<br/>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo $_smarty_tpl->tpl_vars['shock']->value;?>


<br>

</body>
</html><?php }
}

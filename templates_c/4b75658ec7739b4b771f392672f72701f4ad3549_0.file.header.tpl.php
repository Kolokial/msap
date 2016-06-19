<?php
/* Smarty version 3.1.30-dev/72, created on 2016-06-19 17:02:42
  from "G:\xampp\htdocs\msap\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_5766b4127ce929_53738821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b75658ec7739b4b771f392672f72701f4ad3549' => 
    array (
      0 => 'G:\\xampp\\htdocs\\msap\\templates\\header.tpl',
      1 => 1466348554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5766b4127ce929_53738821 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav>
	<ul>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navigation']->value, 'keyValues');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['keyValues']->value) {
?>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['realPath']->value;
echo $_smarty_tpl->tpl_vars['keyValues']->value['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['keyValues']->value['text'];?>
</a></li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</ul>
</nav><?php }
}

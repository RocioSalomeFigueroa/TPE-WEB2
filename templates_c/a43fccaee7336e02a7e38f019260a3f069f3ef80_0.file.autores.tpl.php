<?php
/* Smarty version 3.1.33, created on 2019-10-22 15:12:51
  from 'C:\xampp\htdocs\proyectos\tpe web\templates\autores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5daf00534b3e13_98308796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a43fccaee7336e02a7e38f019260a3f069f3ef80' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\tpe web\\templates\\autores.tpl',
      1 => 1571749962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5daf00534b3e13_98308796 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>


       <table>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['autores']->value, 'autor');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['autor']->value) {
?>
		<tr>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['autor']->value, 'caracteristica');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['caracteristica']->value) {
?>
				<td><?php echo $_smarty_tpl->tpl_vars['caracteristica']->value;?>
</td>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>

        
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

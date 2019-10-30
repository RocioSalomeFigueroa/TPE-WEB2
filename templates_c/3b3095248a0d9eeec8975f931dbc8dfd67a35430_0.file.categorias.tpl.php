<?php
/* Smarty version 3.1.33, created on 2019-10-30 01:08:33
  from 'C:\xampp\htdocs\proyectos\tpe web\templates\categorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db8d481c84486_41725275',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b3095248a0d9eeec8975f931dbc8dfd67a35430' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\tpe web\\templates\\categorias.tpl',
      1 => 1572394109,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5db8d481c84486_41725275 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['libros']->value, 'libro');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['libro']->value) {
?>

    <h4><?php echo $_smarty_tpl->tpl_vars['libro']->value['apellido'];?>
, <?php echo $_smarty_tpl->tpl_vars['libro']->value['nombre'];?>
</h4>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['libro']->value, 'caracteristicas');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['caracteristicas']->value) {
?>
            <li><?php echo $_smarty_tpl->tpl_vars['caracteristicas']->value;?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

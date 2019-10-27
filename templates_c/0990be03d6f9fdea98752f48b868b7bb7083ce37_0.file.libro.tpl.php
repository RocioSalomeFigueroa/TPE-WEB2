<?php
/* Smarty version 3.1.33, created on 2019-10-28 00:16:26
  from 'C:\xampp\htdocs\proyectos\tpe web\templates\libro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db6254a864b21_17883156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0990be03d6f9fdea98752f48b868b7bb7083ce37' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\tpe web\\templates\\libro.tpl',
      1 => 1572111801,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5db6254a864b21_17883156 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1><?php echo $_smarty_tpl->tpl_vars['libro']->value['titulo'];?>
</h1>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

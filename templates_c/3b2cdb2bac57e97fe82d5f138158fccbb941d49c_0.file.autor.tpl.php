<?php
/* Smarty version 3.1.33, created on 2019-10-29 00:58:03
  from 'C:\xampp\htdocs\proyectos\tpe web\templates\autor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db7808b086ac1_22932560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b2cdb2bac57e97fe82d5f138158fccbb941d49c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\tpe web\\templates\\autor.tpl',
      1 => 1572296238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5db7808b086ac1_22932560 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h3>Autor:</h3>

 <h5 class="card-title">Nombre: <?php echo $_smarty_tpl->tpl_vars['Autor']->value['nombre'];?>
</h5>
    <p class="card-text">Apellido: <?php echo $_smarty_tpl->tpl_vars['Autor']->value['apellido'];?>
</p>
    <p class="card-text">Fecha nac/def: <?php echo $_smarty_tpl->tpl_vars['Autor']->value['fecha'];?>
</p>
    <p class="card-text">Biografia: <?php echo $_smarty_tpl->tpl_vars['Autor']->value['biografia'];?>
</p>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

<?php
/* Smarty version 3.1.33, created on 2019-10-30 20:49:33
  from 'C:\xampp\htdocs\proyectos\tpe web\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db9e94d065af8_99786504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e51fc6bb2c9714a0e8f5e373eb8429f4a5c4b129' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\tpe web\\templates\\login.tpl',
      1 => 1572463999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5db9e94d065af8_99786504 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container">
    <form action="verify" method="POST" class="col-md-4 offset-md-4 mt-4">
        <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

        <div class="form-group">
            <label>Usuario</label>
            <input type="text" name="user" class="form-control" placeholder="Ingrese usuario">
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="pass" class="form-control" placeholder="Password">
        </div>

        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

        </div>
        <?php }?>

        <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>

        
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

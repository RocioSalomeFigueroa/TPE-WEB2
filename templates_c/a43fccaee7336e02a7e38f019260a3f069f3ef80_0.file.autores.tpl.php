<?php
/* Smarty version 3.1.33, created on 2019-10-31 23:26:14
  from 'C:\xampp\htdocs\proyectos\tpe web\templates\autores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbb5f86a09674_95306713',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a43fccaee7336e02a7e38f019260a3f069f3ef80' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\tpe web\\templates\\autores.tpl',
      1 => 1572560681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5dbb5f86a09674_95306713 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="datos-bbdd">
        <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>


        <div class="card-group">
                    
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['autores']->value, 'autor');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['autor']->value) {
?>
                                                        
                <div class = "dato">
                 <a href="autor/<?php echo $_smarty_tpl->tpl_vars['autor']->value['id_autor'];?>
"><h5 class="card-title">Nombre: <?php echo $_smarty_tpl->tpl_vars['autor']->value['apellido'];?>
, <?php echo $_smarty_tpl->tpl_vars['autor']->value['nombre'];?>
</h5></a>
                  <p class="card-text">Fecha: <?php echo $_smarty_tpl->tpl_vars['autor']->value['fecha'];?>
</p>
                  <p class="card-text">Biografia: <?php echo $_smarty_tpl->tpl_vars['autor']->value['biografia'];?>
</p>
				  <a href="editar/<?php echo $_smarty_tpl->tpl_vars['autor']->value['id_autor'];?>
" class="btn btn-success btn-sm">Editar</a>
				  <a href="elimnar/<?php echo $_smarty_tpl->tpl_vars['autor']->value['id_autor'];?>
" class="btn btn-danger btn-sm">Eliminar</a>
                </div>          
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
      </div>
      <div class="buttons">

        <div class = "botonera">
          <a href="agregarAutor" class="btn btn-success">Agregar</a>
        </div>    
      </div>
  </div>

        
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

<?php
/* Smarty version 3.1.33, created on 2019-10-31 22:34:17
  from 'C:\xampp\htdocs\proyectos\tpe web\templates\libros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbb53598e4134_04493840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea48ede647d1afe032a086d41262fed8c1e44763' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\tpe web\\templates\\libros.tpl',
      1 => 1572557653,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5dbb53598e4134_04493840 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="datos-bbdd">
        <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>


        <div class="card-group">
                    
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Libros']->value, 'libro');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['libro']->value) {
?>
                                                        
                <div class = "dato">
                  <h5 class="card-title" href="libros/<?php echo $_smarty_tpl->tpl_vars['libro']->value['id_libro'];?>
">Titulo: <?php echo $_smarty_tpl->tpl_vars['libro']->value['titulo'];?>
</h5>
                  <p class="card-text">Autor: <?php echo $_smarty_tpl->tpl_vars['libro']->value['apellido'];?>
, <?php echo $_smarty_tpl->tpl_vars['libro']->value['nombre'];?>
</p>
                  <p class="card-text">Genero: <?php echo $_smarty_tpl->tpl_vars['libro']->value['genero'];?>
</p>
                  <p class="card-text"><small class="text-muted">valoracion: <?php echo $_smarty_tpl->tpl_vars['libro']->value['valoracion'];?>
</small></p>

                </div>          
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
      </div>
      <div class="buttons">

        <div class = "botonera">
          <a href="agregar" class="btn btn-success">Agregar</a>
        </div>
        <div class = "botonera">
          <a href="agregar" class="btn btn-success">Eliminar</a>
        </div>
        <div class = "botonera">
          <a href="agregar" class="btn btn-success">Editar</a>
        </div>    
      </div>
  </div>

        
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

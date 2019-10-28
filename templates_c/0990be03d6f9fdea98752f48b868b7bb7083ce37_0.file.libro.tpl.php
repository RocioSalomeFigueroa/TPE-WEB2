<?php
/* Smarty version 3.1.33, created on 2019-10-28 20:44:06
  from 'C:\xampp\htdocs\proyectos\tpe web\templates\libro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db7450681cbb7_90817990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0990be03d6f9fdea98752f48b868b7bb7083ce37' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\tpe web\\templates\\libro.tpl',
      1 => 1572291841,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5db7450681cbb7_90817990 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

 <h5 class="card-title">Titulo: <?php echo $_smarty_tpl->tpl_vars['Libro']->value['titulo'];?>
</h5>
    <p class="card-text">Autor: <?php echo $_smarty_tpl->tpl_vars['Libro']->value['apellido'];?>
, <?php echo $_smarty_tpl->tpl_vars['Libro']->value['nombre'];?>
</p>
    <p class="card-text">Genero: <?php echo $_smarty_tpl->tpl_vars['Libro']->value['genero'];?>
</p>
    <p class="card-text">Año: <?php echo $_smarty_tpl->tpl_vars['Libro']->value['anio'];?>
</p>
    <p class="card-text">Reseña: <?php echo $_smarty_tpl->tpl_vars['Libro']->value['resenia'];?>
</p>
    <p class="card-text"><small class="text-muted">valoracion: <?php echo $_smarty_tpl->tpl_vars['Libro']->value['valoracion'];?>
</small></p>
    <small><a href="borrar/<?php echo $_smarty_tpl->tpl_vars['Libro']->value['id_libro'];?>
">ELIMINAR</a></li></small>


<form class="formulario" action="insertar" method="post">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Titulo</span>
        </div>
        <input type="text" name="titulo" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Autor</label>
        </div>
        <select class="custom-select" id="inputGroupSelect01">
            <option selected>Choose...</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
        </div>

        <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Año / Genero</span>
            </div>
            <input type="text"  name="anio" aria-label="First name" class="form-control">
            <input type="text" name="genero" aria-label="Last name" class="form-control">
          </div>
    
    <input type="text" name="resenia" placeholder="Reseña">
    <input type="number" name="valoracion" placeholder="Valoracion" max="5" min="0">
    
    <input type="submit" value="Insertar">
</form> 

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

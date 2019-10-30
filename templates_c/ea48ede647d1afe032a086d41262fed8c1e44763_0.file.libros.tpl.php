<?php
/* Smarty version 3.1.33, created on 2019-10-30 14:47:01
  from 'C:\xampp\htdocs\proyectos\tpe web\templates\libros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db994551b5f95_75163196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea48ede647d1afe032a086d41262fed8c1e44763' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\tpe web\\templates\\libros.tpl',
      1 => 1572443130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5db994551b5f95_75163196 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>


	<div class="card-group">

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Libros']->value, 'libro');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['libro']->value) {
?>

			<div class="card">
				
					<div class="card-body">
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
						<small><a href="borrar/<?php echo $_smarty_tpl->tpl_vars['libro']->value['id_libro'];?>
">ELIMINAR</a></li></small>
					</div>
			</div>

		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>

<h3>Agregar</h3>
	<form class="formulario" action="insertar" method="post">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Titulo</span>
        </div>
        <input type="text" name="titulo" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
      </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" name="autor" for="inputGroupSelect01">Autor</label>
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

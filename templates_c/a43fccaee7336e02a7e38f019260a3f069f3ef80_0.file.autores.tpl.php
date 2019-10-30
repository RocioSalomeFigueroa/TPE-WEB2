<?php
/* Smarty version 3.1.33, created on 2019-10-30 14:47:02
  from 'C:\xampp\htdocs\proyectos\tpe web\templates\autores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db99456e15ea3_22951239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a43fccaee7336e02a7e38f019260a3f069f3ef80' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\tpe web\\templates\\autores.tpl',
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
function content_5db99456e15ea3_22951239 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>

<div class="card-group">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['autores']->value, 'autor');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['autor']->value) {
?>
		<div class="card">
				
					<div class="card-body">
						<h5 class="card-title" href="autors/<?php echo $_smarty_tpl->tpl_vars['autor']->value['id_autor'];?>
">Apellido: <?php echo $_smarty_tpl->tpl_vars['autor']->value['apellido'];?>
</h5>
						<p class="card-text">Nombre: <?php echo $_smarty_tpl->tpl_vars['autor']->value['nombre'];?>
</p>
						<p class="card-text">Fecha: <?php echo $_smarty_tpl->tpl_vars['autor']->value['fecha'];?>
</p>
						<p class="card-text">Biografia: <?php echo $_smarty_tpl->tpl_vars['autor']->value['biografia'];?>
</p>
						<small><a href="borrarAutor/<?php echo $_smarty_tpl->tpl_vars['autor']->value['id_autor'];?>
">ELIMINAR</a></li></small>
					</div>
			</div>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<h4>Agregar Autor</h4>
<form class="formulario" action="agregarAutor" method="post">
    	<div class="input-group">
        	<div class="input-group-prepend">
              <span class="input-group-text">Nombre / Apellido</span>
            </div>
            <input type="text"  name="nombre" aria-label="First name" class="form-control">
            <input type="text" name="apellido" aria-label="Last name" class="form-control">
        </div>
    
    <input type="text" name="fecha" placeholder="Fecha">
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Biografia</label>
    <textarea class="form-control" name="biografia" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
    
    <input type="submit" value="agregarAutor">
</form> 

        
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

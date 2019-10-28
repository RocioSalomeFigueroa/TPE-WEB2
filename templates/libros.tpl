{include file="header.tpl"}

	{$titulo}

	<div class="card-group">

		{foreach from=$Libros item=libro}

			<div class="card">
				
					<div class="card-body">
						<h5 class="card-title" href="libros/{$libro.id_libro}">Titulo: {$libro.titulo}</h5>
						<p class="card-text">Autor: {$libro.apellido}, {$libro.nombre}</p>
						<p class="card-text">Genero: {$libro.genero}</p>
						<p class="card-text"><small class="text-muted">valoracion: {$libro.valoracion}</small></p>
						<small><a href="borrar/{$libro.id_libro}">ELIMINAR</a></li></small>
					</div>

			</div>

		{/foreach}
	</div>

        
{include file="footer.tpl"}
{include file="header.tpl"}

	{$titulo}

	<div class="card-group">

		{foreach from=$Libros item=libro}

			<div class="card">
				<img src="..." class="card-img-top" alt="...">

					<div class="card-body">
						<h5 class="card-title">Titulo: {$libro.titulo}</h5>
						<p class="card-text">Autor: {$libro.id_autor}</p>
						<p class="card-text">Genero: {$libro.genero}</p>
						<p class="card-text"><small class="text-muted">valoracion: {$libro.valoracion}</small></p>
					</div>

			</div>

		{/foreach}
	</div>

        
{include file="footer.tpl"}
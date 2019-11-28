{include file="header.tpl" }

    <div class="datos-bbdd">
      <div 
        id="container" data-objectId="null" data-userId="{$user.id}" data-userAdmin="{$user.admin}">
        <p>Objeto: <span id="objId"></span></p>
        <p>Usuario: <span id="usrId"></span></p>
        <p>Admin: <span id="usrAdm"></span></p>
    </div>
        <h2>{$titulo}</h2>
        <h3>Libros:</h3>


        <div class="card-group">
            <table class="table table-bordered">
        <thead>
          <tr class="table-active">
            <th scope="col">Titulo</th>
            <th scope="col">Autor</th>
            <th scope="col">Genero</th>
            <th scope="col">Año</th>
          </tr>
        </thead>
        <tbody>
          {foreach from=$Libros item=libro}
            <tr>
             <td><a href="libro/{$libro.id_libro}">{$libro.titulo}</a></td>                   
              <td>{$libro.apellido}, {$libro.nombre}</td>
              <td>{$libro.genero}</td>
              <td>{$libro.anio}</td>
          {/foreach}
          </tbody>
          </table>
        </div>
      </div>
      <div class="buttons">
        {if $user.admin eq "1"}
        <div class = "botonera">
          <a href="agregarLibro" class="btn btn-success">Agregar</a>
        </div> 
      {/if}   
      </div>
  </div>

        
{include file="footer.tpl"}
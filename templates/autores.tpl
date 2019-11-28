{include file="header.tpl"}

    <div class="datos-bbdd">
          <div 
        id="container" data-objectId="null" data-userId="{$user.id}" data-userAdmin="{$user.admin}">
        <p>Objeto: <span id="objId"></span></p>
        <p>Usuario: <span id="usrId"></span></p>
        <p>Admin: <span id="usrAdm"></span></p>
    </div>
        <h2>{$titulo}</h2>
        <h3>Autores:</h3>

        <div class="card-group">
           <table class="table table-bordered">
        <thead>
          <tr class="table-active">
            <th scope="col">Autor</th>
            <th scope="col">Fecha</th>
            <th scope="col">Biografia</th>
          </tr>
        </thead>
        <tbody>
          {foreach from=$autores item=autor}
            <tr>
             <td> <a href="autor/{$autor.id_autor}">{$autor.apellido}, {$autor.nombre}</a></td>                   
              <td>{$autor.fecha}</td>
              <td>{$autor.biografia}</td>
          {/foreach}
          </tbody>
          </table>         
        </div>
      </div>
      <div class="buttons">
       {if $user.admin eq "1"}
        <div class = "botonera">
          <a href="agregarAutor" class="btn btn-success"class="btn">Agregar</a>
        </div>    
      </div>
  </div>
{/if}

        
{include file="footer.tpl"}
{include file="header.tpl"}
  <div class="datos-bbdd">
      <div 
        id="container" data-objectId="{$autor.id_autor}" data-userId="{$user.id}" data-userAdmin="{$user.admin}">
        <p>Objeto: <span id="objId"></span></p>
        <p>Usuario: <span id="usrId"></span></p>
        <p>Admin: <span id="usrAdm"></span></p>
    </div>
      <h3>Autor:</h3>

        <div class="img">
            <img class="card-img" src="{$autor.imagen}"/>
            <a href="borrarImagenA/{$autor.imagen}" class="btn btn-danger btn-sm">Eliminar</a>
          </div>
     <div class="dato-biblioteca">
        <h4 class="card-text">Nombre: {$autor.nombre}</h4>
        <h4 class="card-text">Apellido: {$autor.apellido}</h4>
        <p class="card-text">Fecha: {$autor.fecha}</p>
        <p class="card-text">Biografia: {$autor.biografia}</p>
    </div>
    <h5>Titulos:</h5>
         <ul>
            {foreach from=$libros item=item}
                <li>{$item.titulo}</li>   
            {/foreach}
        <ul>

        <div class="form-popup" id="myForm">
            <form action="editar/{$autor.id_autor}" method="POST" class="form-container" enctype="multipart/form-data">

                <div class="form-group">
                    <label>Nombre:</label>
                    <input value=" " name="nombre" type="text" class="form-control" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label>Apellido:</label>
                    <input value="" name="apellido" type="text" class="form-control" placeholder="Apellido">
                </div>
                <div class="form-group">
                    <label> Fecha: </label>
                    <input value="" name="fecha" type="text" class="form-control" placeholder="Fecha">
                </div>
                <div class="form-group">
                    <label>Biografia:</label>
                    <textarea value="" name="biografia" type="text"> </textarea>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-warning btn-sm">Editar</button>
                  <button type="button" class="btn btn-danger btn-sm" id="btnClose">Close</button>
                </div>
              </form>
            </div>
</div>
<div class="buttons">
     {if $user.admin eq "1"}  
        <div class = "botonera">
          <button class="btn btn-success" id="btnEdit">Editar</button>
          <a href="borrarAutor/{$autor.id_autor}" class="btn btn-danger btn-sm"class="btn">Eliminar</a>
        </div>    
      </div>
{/if}

{include file="footer.tpl"}
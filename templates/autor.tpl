{include file="header1.tpl"}
  <div class="datos-bbdd">
<h3>Autor:</h3>

 <h5 class="card-title">Nombre: {$Autor.nombre}</h5>
    <p class="card-text">Apellido: {$Autor.apellido}</p>
    <p class="card-text">Fecha nac/def: {$Autor.fecha}</p>
    <p class="card-text">Biografia: {$Autor.biografia}</p>
    

  
        <form action="cambiarAutor/{$Autor.id_autor}" method="POST">
        <fieldset>
        <legend>Agregar Autor:</legend>
        Nombre:<br>
        <input type="text" name="nombre" value="Mickey">
        <br>Apellido:<br>
        <input type="text" name="apellido" value="Mouse">
        <br><br>
        Fecha:<br>
        <input type="text" name="fecha" value="Mickey">
        <br>biografia:<br>
        <input type="text" name="biografia" value="Mouse">
        <br><br>
        <input type="submit" value="cambiarAutor/{$Autor.id_autor}">
        </fieldset>
    </form>
    </div>
</div>

{include file="footer.tpl"}
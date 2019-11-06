{include file="header1.tpl"}
  <div class="datos-bbdd">
      <h3>Autor:</h3>

        <p class="card-text">Nombre: {$autor.nombre}</p>
        <p class="card-text">Apellido: {$autor.apellido}</p>
        <p class="card-text">Fecha: {$autor.fecha}</p>
        <p class="card-text">Biografia: {$autor.biografia}</p>

            <form action="editar/{$autor.id_autor}" method="POST">
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
                    <button type="submit" class="btn btn-outline-secondary">Editar</button>
                </div>
              </form>
</div>

{include file="footer.tpl"}
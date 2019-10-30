{include file="header.tpl"}

 <h5 class="card-title">Titulo: {$Libro.titulo}</h5>
    <p class="card-text">Autor: {$Libro.apellido}, {$Libro.nombre}</p>
    <p class="card-text">Genero: {$Libro.genero}</p>
    <p class="card-text">Año: {$Libro.anio}</p>
    <p class="card-text">Reseña: {$Libro.resenia}</p>
    <p class="card-text"><small class="text-muted">valoracion: {$Libro.valoracion}</small></p>
    <small><a href="borrar/{$Libro.id_libro}">ELIMINAR</a></li></small>


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

{include file="footer.tpl"}
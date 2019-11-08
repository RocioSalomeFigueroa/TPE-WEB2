<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estiles.css">
    <title>Biblioteca Virtual</title>
    <base href="{BASE_URL}">
</head>
<body>
  <div class="grid-container">
      <div class="nav">
          <nav class="navbar navbar-expand navbar-light bg-light" >
             <a class="navbar-brand" href="login">Biblioteca Virtual</a>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <ul class="navbar-nav mr-auto">
                      <li class="nav-item active">
                          <a class="nav-link" href="visitantesLibros">Libros <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="visitanteAutores">Autores</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="login">Entrar</a>
                      </li>
                    </ul>
                  </div>
          </nav>
      </div>              
  <div class="body">

    <div class="datos-bbdd">
        <div>
            <h4 class="card-title">Titulo: {$libro.titulo}</h4>
            <h5 class="card-text">Autor: {$libro.apellido}, {$libro.nombre}</h5>
            <p class="card-text">Genero: {$libro.genero}</p>
            <p class="card-text">Año: {$libro.anio}</p>
            <p class="card-text">Reseña: {$libro.resenia}</p>
        </div>





    </div>

    <div class="buttons">
        
    </div>

    </div>
    
        <div class="footer">
            <nav class="navbar navbar-light bg-light">
                <span class="navbar-brand mb-0 h1">Visitante - WEB 2 TUDAI</span>
            </nav>

        </div>
     </div>
</body>
</html>
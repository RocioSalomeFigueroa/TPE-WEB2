<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="icon" type="image/png" href="./images/favicon.png" />
    <title>Biblioteca Virtual</title>
</head>

<body>
        <div class="grid-container">
                <div class="titulo">
                  <div class="encabezado">
                      <h1>BIBLIOTECA VIRTUAL</h1>
                  </div>
                </div>
                <div class="visitante">
                  <div class="imagenes">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                      <img src="./images/libros-2.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="./images/Libros-3.jpg" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="./images/libros-4.jpg" class="d-block w-100" alt="...">
                                  </div>
                                </div>
                              </div>
                  </div>
                  <div class="btn">
                        <a href="libros" class="btn btn-success">Visitante</a>
                  </div>
                </div>
                <div class="fom-login">
                  <div class="area-form">
                        <form action="verify" method="POST">
                                <h1>{$titulo}</h1>
                        
                                <div class="form-group">
                                    <label>Usuario</label>
                                    <input type="text" name="user" class="form-control" placeholder="Ingrese usuario">
                                </div>
                        
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="pass" class="form-control" placeholder="Password">
                                </div>
                        
                                {if $error}
                                <div class="alert alert-danger" role="alert">
                                    {$error}
                                </div>
                                {/if}
                        
                                <button type="submit" class="btn btn-success">Ingresar</button>
                                <a href="registro" class="btn btn-success">Registrarse</a>
                            </form>
                  </div>
                </div>
              </div>
      <script src="./js/comportamiento.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>      
</body>
</html>
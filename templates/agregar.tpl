{include file="header.tpl"}

    <div class="datos-bbdd">
    <div 
        id="container" data-objectId="null" data-userId="{$user.id}" data-userAdmin="{$user.admin}">
        <p>Objeto: <span id="objId"></span></p>
        <p>Usuario: <span id="usrId"></span></p>
        <p>Admin: <span id="usrAdm"></span></p>
    </div>
        <h3>Agregar Autor</h3>

      <form action="insertar" method="post">
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
                    <button type="submit" class="btn btn-outline-secondary">Insertar</button>
                  </div>
              </form>
      </div>




{include file="footer.tpl"}
{include file="header.tpl"}

    <div class="datos-bbdd">

      <form action="insertar" method="POST">
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
            <input type="submit" value="insertar">
          </fieldset>
        </form>
      </div>




{include file="footer.tpl"}
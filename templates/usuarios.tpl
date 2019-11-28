{include file="header.tpl"}

    <div class="datos-bbdd">
         <table class="table table-bordered">
        <thead>
          <tr class="table-active">
            <th scope="col">Username</th>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Admin</th>
          </tr>
        </thead>
        <tbody>
        {foreach from=$usuarios item=usuario}
            <tr>
                <td>{$usuario.username}</td>
                <td>{$usuario.nombre}</td>
                <td>{$usuario.mail}</td>
                <td>
                  <form action="editarUsuario" method="post">
                    {if $usuario.admin == 1}
                      <input name="administrador" type="checkbox" value="" checked>
                    {else}
                      <input name="administrador" type="checkbox" value="">
                    {/if}
                      <input type="hidden" value="{$usuario.id_usuario}" name="user">
                      <button type="submit" class="btn btn-info btn-sm">Editar</button>
                  </form>    
                </td>
            </tr>      
          {/foreach}
          </table>
    </div>
    <div class="buttons">
       
    </div>

    {include file="footer.tpl"}
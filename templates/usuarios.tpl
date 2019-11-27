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
                <td><input class="delete-btn" name="administrador" data-id="{$usuario.id_usuario}" type="checkbox" value=""></td>
            </tr>      
          {/foreach}
          <script>
          let deleteBtns = document.querySelectorAll(".delete-btn");
          for(let btn of deleteBtns){
            btn.addEventListener('click', function(e){
                let result = e.target.checked;
                let user_id = e.target.dataset.id;
                alert('fetch' + result + user_id);
                let formData = new FormData();
                formData.append("administrador", result);
                formData.append("user_id", user_id);
                fetch('url', {
                    'method': 'POST',
                    'body': formData
                })
            })
          }
          </script>
          </table>
    </div>
    <div class="buttons">
       
    </div>

    {include file="footer.tpl"}
{include file="header.tpl"}
    <div class="datos-bbdd">
        <form action="nuevoUsuario">
            <div class="form-group" >
                <label> Nombre: </label>
                 <input value=" " name="nombre" type="text" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label> Fecha: </label>
                <input value="" name="fecha" type="text" class="form-control" placeholder="Fecha">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label> Usuario: </label>
                 <input value=" " name="user" type="text" class="form-control" placeholder="Usuario">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
{include file="footer.tpl"}
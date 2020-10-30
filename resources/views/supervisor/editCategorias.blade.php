<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
     crossorigin="anonymous">
<head>
	<nav class="bar navbar-dark bg-primary">
        <a href="/tablero" class="navbar-brand" >Dasboard</a>
        <a href="/Categorias" class="navbar-brand">Categorias</a>
    </nav>

    
    <form class="form-group" method="GET" action="/Categorias" enctype="multipart/form-data">
        <br>
         <h1>Editar categoria</h1>
        <div class="form-group">
           <label for="">nombre</label>
        <input type="text" name="name"  class="form-control">
        </div>
        <br>
        <div class="form-group">
           <label for="">numero de productos</label>
        <input type="text" name="name"  class="form-control">
        </div>

        <div class="form-group">
            <label for="">descripcion</label>
            <input type="text" name="desc" class="form-control">
           </div>
    
        <br>
         <div ALIGN=CENTER>
        <button type="submit" class="btn btn-primary">actualizar</button>
         </div>
      </form>  
		
</body>
</html>
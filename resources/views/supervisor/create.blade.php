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

    
    <div class="form-group">
        <h1>Agrega tu categoria</h1>
        <table  class="table table-striped table-sm">
       
          <tr>
           <td  ALIGN=CENTER > <h4>Nombre </h4> </td>
           <td  ALIGN=CENTER > <h4>Cantidad de productos </h4></td>
           <td  ALIGN=CENTER > <h4>Descripcion </h4></td>
           
         </tr>
         <tr>
           <td  ALIGN=CENTER > <input type="text" name="valor1"> </td>
           <td  ALIGN=CENTER > <input type="text" name="valor1"> </td>
           <td  ALIGN=CENTER> <input type="text" name="valor1"> </td>
           
         </tr>
       </table>

       <div ALIGN=CENTER>
        <a href="/Categorias">
         <input type="submit" name="operar" value= "Agregar" 
          style="color: black; background-color: #99CCFF"> 
         </a>
        </div>
       
       
    </div>
		
</body>
</html>
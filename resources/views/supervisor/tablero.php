<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tablero del supervisor</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="tablero"><span>Lumino</span>Admin</a>	
			</div>
		</div><!-- /.container-fluid -->
	</nav>

	<!-- /.barra de navegacion -->
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Username</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li><a href="tablero"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li class="active"><a href="Categorias"><em class="fa fa-calendar">&nbsp;</em> CATEGORIAS</a></li>
			
			</li>
			<li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<!-- /.contenido-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">CATEGORIAS</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<h4>Tipos de categorias</h4>
			</div><!--/.row-->

			<div class="row">
			 <table  class="table table-striped table-sm">
            
               <tr>
                <td  ALIGN=CENTER > <h4>Nombre </h4> </td>
                <td  ALIGN=CENTER > <h4>Cantidad de productos </h4></td>
                <td  ALIGN=CENTER > <h4>Acciones </h4></td>
              </tr>
              <tr>
                <td  ALIGN=CENTER > Electronica </td>
                <td  ALIGN=CENTER > 5 </td>
                <td  ALIGN=CENTER>
                  <a href="Categorias/1/edit">
				   <input type="submit" name="editar" value= "edit"
				   style="color: white; background-color: green" > 
				  </a>
				  <a href="Categorias/1">
				   <input type="submit" name="mostrar" value= "show" 
				   style="color: black; background-color: yellow"> 
                  </a>
                 <input type="submit" name="eliminar" value= "delete"
				  style="color: white; background-color: red"
				  onclick='alert("DESEAS BORRAR ESTE ARCHIVO.")' />
				  > 

                </td>
              </tr>

              <tr>
                <td  ALIGN=CENTER > Electrodomesticos </td>
                <td  ALIGN=CENTER > 10 </td>
                <td  ALIGN=CENTER>
				<input type="submit" name="editar" value= "edit"
				  style="color: white; background-color: green"> 

				 <input type="submit" name="mostrar" value= "show" 
				  style="color: black; background-color: yellow"> 

                 <input type="submit" name="eliminar" value= "delete"
				  style="color: white; background-color: red"> 
                </td>
              </tr>
              <tr>
                <td  ALIGN=CENTER > Ropa </td>
                <td  ALIGN=CENTER > 30 </td>
                <td  ALIGN=CENTER>
				 <input type="submit" name="editar" value= "edit"
				  style="color: white; background-color: green"> 

				 <input type="submit" name="mostrar" value= "show" 
				  style="color: black; background-color: yellow"> 

                 <input type="submit" name="eliminar" value= "delete"
				  style="color: white; background-color: red"> 
                </td>
              </tr>
            
            </table>
			<div ALIGN=CENTER>
				<a href="Categorias/create">
			<input type="submit" name="operar" value= "agregar categoria" 
			 style="color: black; background-color: #99CCFF"> 
			     </a>
			</div>
			
		 </div>
		</div>
	
		
		
	
	</div>	<!--/.main-->
	
		
</body>
</html>
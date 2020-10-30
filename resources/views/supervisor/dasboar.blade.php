<Html>
    <head>
        <title>dashboard</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
     crossorigin="anonymous">
     
     
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Tráfico mensual</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/font-awesome.min.css" rel="stylesheet">
	    <link href="css/datepicker3.css" rel="stylesheet">
	    <link href="css/styles.css" rel="stylesheet">
	
	    <!--Custom Font-->
	    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
 
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script src="http://code.highcharts.com/highcharts.js"></script>
        <script type="text/javascript">
$(function () {
         
        $('#pie').highcharts({
            chart: {
                type: 'pie',
                borderWidth: 0
            },
            title: {
                text: 'Hola admin, mire la cantidad de productos que se han vendido',
            },
            subtitle: {
                text: 'Año 2019',
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            series: [{
                name: 'Usuarios',
                data: [
                    {
                        name: 'electronicos',
                        y: 71.0,
                        sliced: true,
                        selected: true
                    },
                    ['electrodomesticos',       14.0],     
					['ropa',       30.0], 
                ]
            }]
        });
         
        $(document).ready(function() {
            Highcharts.setOptions({
                global: {
                    useUTC: false
                }
            });    
        });
    });
        </script>
    </head>

    <body>
	
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span></button>
					<a class="navbar-brand" href="#"><span>Lumino</span>Admin</a>	
				</div>
			</div><!-- /.container-fluid -->
		</nav>

        <!--barra de navegacion -->
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
				<li class="active"><a href="tablero"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
				<li><a href="Categorias"><em class="fa fa-calendar">&nbsp;</em> CATEGORIAS</a></li>
				
				</li>
				<li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
			</ul>
		</div><!--/.sidebar-->

       <!--dasboard -->
        <div class="row">
        
        <!-- div que contendrá la gráfica circular -->
        <div id="pie" style="width: 50%; height: 350px; margin: 0 auto;float:left;"></div> 
        <div style="border-top:1px solid #CDCDCD;margin:10px;padding:0;clear:both;"></div>

        </div><!--/.row--> 

        
       
    </body>
</Html>
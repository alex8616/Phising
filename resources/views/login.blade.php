
<!DOCTYPE html>
<html>
<head>
  <title>U.A.T.F. - Docentes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style type="text/css">

	/* Sticky footer styles
	-------------------------------------------------- */
	html { position: relative; min-height: 100%; }
	body {
	  	/* Margin bottom by footer height */
	  	margin-bottom: 60px;
	}
	.footer {
	  position: absolute;
	  bottom: 0;
	  width: 100%;
	  /* Set the fixed height of the footer here */
	  height: 60px;
	  /*background-color: #f5f5f5;*/
	  background-color: rgb(64, 85, 134);
	}
	/* Custom page CSS
	-------------------------------------------------- */
	/* Not required for template or sticky footer method. */

	body > .container {  padding: 60px 15px 0; }
	.container .text-muted { margin: 20px 0; }
	.footer > .container { padding-right: 15px; padding-left: 15px;	}
	.ar:link { color: #FFFFFF; }
	/* visited link */
	.ar:visited { color: #FFFFFF; }
	/* mouse over link */
	.ar:hover { color: #DDDDDD; }
	/* selected link */
	.ar:active { color: #FFFFFF; }
	
  </style>
  <script type="text/javascript">
	    var nav = navigator.appName;
	    // Detectamos si nos visitan desde IE
	    if(nav == "Microsoft Internet Explorer")
	    {
				// Convertimos en minusculas la cadena que devuelve userAgent
				var ie = navigator.userAgent.toLowerCase();
				// Extraemos de la cadena la version de IE
				var version = parseInt(ie.split('msie')[1]);

				// Dependiendo de la version mostramos un resultado
				switch(version)
				{
						case 6:
								alert("Estas usando IE 6, es obsoleto actualize su Navegador Web");
								window.location.href = 'http://www.uatf.edu.bo/'; 
								break;
						case 7:
								alert("Estas usando IE 7, es obsoleto actualize de Navegador Web");
								window.location.href = 'http://www.uatf.edu.bo/'; 
								break;
						case 8:
								alert("Estas usando IE 8, es obsoleto actualize de Navegador Web");
								window.location.href = 'http://www.uatf.edu.bo/'; 
								break;
						case 9:
								alert("Estas usando IE 9, mas o menos compatible");
								break;
						default:
								alert("Usas una version compatible");
								break;
				}
	    }
	    function setfocus()
	    {
				document.forma.usuario.focus();
     	}	
  </script>
  <link href="{{ asset('imgs/logo.png') }}" type='image/x-icon' rel='shortcut icon' />
	<!--[if lte IE 7]>
	<style>
	.content { margin-right: -1px; } /* este margen negativo de 1 px puede situarse en cualquiera de las columnas de este diseño con el mismo efecto corrector. */
	ul.nav a { zoom: 1; }  /* la propiedad de zoom da a IE el desencadenante hasLayout que necesita para corregir el espacio en blanco extra existente entre los vínculos */
	</style>
	<![endif]-->		
      @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body onload="setfocus()">

    <nav class="navbar navbar-default navbar-fixed-top" style=" background-color: rgb(64, 85, 134);">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html#"><span style="color:#FFFFFF;">M&oacute;dulo [Docentes]</span></a>
        </div>

        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.html#">Inicio</a></li>
            <li><a href="index.html#about"><span style="color:#FFFFFF;">Acerca de..</span></a></li>
            <li><a href="index.html#contact"><span style="color:#FFFFFF;">Contactenos</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	
<div class="container">
	<div class="container-fluid">
	  <div class="row">
		<div class="col-sm-8" >
			<table width="100%" border="0">
				<tr>
					<td>
					<h2>Presentaci&oacute;n</h2>
					<h4 style="Color:red" align="center">
						Usted a ingresado en el periodo acad&eacute;mico 
											</h4>
					<p align="Justify">Bienvenidos a la Plataforma de la Universidad Aut&oacute;noma Tom&aacute;s Fr&iacute;as, le comunicamos que la Unidad de Tecnol&oacute;gias de Informaci&oacute;n viene trabajando en la reingenier&iacute;a de los sistemas vigentes a la fecha.</p>
					<h3>Instrucciones de uso</h3>
					<p>Ingrese su nombre de <strong>Usuario</strong> y <strong>Contrase&ntilde;a</strong> para acceder al men&uacute; principal.</p>
					<h4>Condiciones de uso</h4>
					<p>Este sistema debe ser usado de manera responsable y tomando en cuenta los siguientes puntos: </p>
					<p>
					<ol>
						<li>Todo usuario es responsable &uacute;nico del manejo de la contrase&ntilde;a o clave entregadas al momento de la alta.</li>
						<li>La informaci&oacute;n registrada en el sistema es de entera responsabilidad del titular de la cuenta.</li>
						<li>En caso de extravio de la cuenta de usuario comuniquese con la Unidad Tecnol&oacute;gica de Informaci&oacute;n para informar este extremo.</li>
					</ol>
					</p>
					<p>Sistema de Informaci&oacute;n Acad&eacute;mica potenciado con Software Libre.</p>
					</td>
				</tr>
			</table>
		</div>
	    <div class="col-sm-4" >
        <div class="panel panel-default">
          <div class="panel-body">
						<form style="margin-bottom: 0px !important;" class="form-horizontal" id="forma" name="forma" method="post" action="{{ url('/login') }}">
    @csrf
    <input type="hidden" id="javas" name="javas" value="N">
    <input type="hidden" id="var1" name="var1" value="0">
    <input type="hidden" name="hash" id="hash" value="" />
    <input type="hidden" name="token" id="token" value="" />

    <div class="content">
        <h3 align="center"><i class="fa fa-lock fa-4x"></i><img src="{{ asset('imgs/utf.jpg') }}" /></h3>
        <div class="row panel" style="color:#ffffff;background-color:rgb(64, 85, 134);">
            <h4 class="text-center">Gesti&oacute;n 0 / 0</h4>
        </div>
        <h5 class="title" align="center"><em> Acceso al Sistema </em></h5>

        <div class="form-group">
            <div class="col-sm-12">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user color-blue"></i></span>
                    <input type="text" id="usuario" name="usuario" placeholder="Usuario o Telefono Personal" class="form-control" required>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-12">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="password" id="clave" name="clave" placeholder="Contrase&ntilde;a" class="form-control" required>
                </div>
            </div>
        </div>

        <!-- Select Periodo visible -->
        <div class="form-group">
            <div class="col-sm-12">
                <input type="hidden" name="token" id="token" value="" />

                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                    <select class="form-control" id="periodo" name="periodo" onchange="changeFunc();">
                        <option value="01/2025" id="01/2025">Periodo Academico 01/2025</option>
                        <option value="04/2025" id="04/2025">Periodo Academico 04/2025 (Mesa de Examen de Verano)</option>
                        <option value="03/2024" id="03/2024">Periodo Academico 03/2024 (Curso de Verano)</option>
                        <option value="02/2024" id="02/2024">Periodo Academico 02/2024</option>
                        <option value="06/2024" id="06/2024">Periodo Academico 06/2024 (Curso de Invierno)</option>
                        <option value="05/2024" id="05/2024">Periodo Academico 05/2024 (Mesa de Examen de Invierno)</option>
                        <option value="01/2024" id="01/2024">Periodo Academico 01/2024</option>
                        <option value="04/2024" id="04/2024">Periodo Academico 04/2024</option>
                        <option value="03/2023" id="03/2023">Periodo Academico 03/2023</option>
                        <option value="02/2023" id="02/2023">Periodo Academico 02/2023</option>
                        <option value="05/2023" id="05/2023">Periodo Academico 05/2023 (Mesa de Examen de Invierno)</option>
                        <option value="01/2023" id="01/2023">Periodo Academico 01/2023</option>
                        <option value="0/0" id="00/0">Seleccione el Periodo y la Gestion</option>
                        <option value="04/2023" id="04/2023">Periodo Academico 04/2023</option>
                        <option value="03/2022" id="03/2022">Periodo Academico 03/2022 (Curso de Verano)</option>
                        <option value="01/2022" id="01/2022">Periodo Academico 01/2022</option>
                        <option value="02/2022" id="02/2022">Periodo Academico 02/2022</option>
                        <option value="04/2022" id="04/2022">Periodo Academico 04/2022 (Mesa de Examen de Verano)</option>
                        <option value="01/2021" id="01/2021">Periodo Academico 01/2021</option>
                        <option value="02/2020" id="02/2020">Periodo Academico 02/2020</option>
                        <option value="01/2019" id="01/2019">Periodo Academico 01/2019</option>
                        <option value="02/2019" id="02/2019">Periodo Academico 02/2019</option>
                        <option value="01/2018" id="01/2018">Periodo Academico 01/2018</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Select id_gestion oculto -->
        <input type="hidden" name="id_gestion" id="id_gestion" value="0" />

        <!-- Select id_periodo oculto -->
        <input type="hidden" name="id_periodo" id="id_periodo" value="0" />

    </div>

    <div class="foot" align="center">
        <button class="btn btn-primary" data-dismiss="modal" type="submit">Ingresar al Sistema</button>
    </div>
</form>


				</div>
			</div>
	    </div>

	  </div>

	</div>
</div>

	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
		<!--
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		-->
		<button type="button" class="close">&times;</button>
		<h4 class="modal-title">Seleccione periodo/gestion a trabajar</h4>
	      </div>
	      <div class="modal-body">
			<p align='Left'>Gestión / Periodo Regular</p><hr> <p align='center' style='font-weight: bold'><a href='index.php%3FdVRpMjAxM19VQVRGaWRfZ2VzdGlvbj0yMDI1JmlkX3BlcmlvZG89MXVUaTIwMTNfVUFURg==.html'>--- <span class='glyphicon glyphicon-education'></span>&nbsp;Periodo Academico 01/2025</b> ---</a></p> <p align='center' style='font-weight: bold'><a href='index.php%3FdVRpMjAxM19VQVRGaWRfZ2VzdGlvbj0yMDI1JmlkX3BlcmlvZG89NHVUaTIwMTNfVUFURg==.html'>--- <span class='glyphicon glyphicon-education'></span>&nbsp;Periodo Academico 04/2025(Mesa de Examen de Verano)</b> ---</a></p> <p align='center' style='font-weight: bold'><a href='index.php%3FdVRpMjAxM19VQVRGaWRfZ2VzdGlvbj0yMDI0JmlkX3BlcmlvZG89M3VUaTIwMTNfVUFURg==.html'>--- <span class='glyphicon glyphicon-education'></span>&nbsp;Periodo Academico 03/2024(Curso de Verano)</b> ---</a></p> <p align='center' style='font-weight: bold'><a href='index.php%3FdVRpMjAxM19VQVRGaWRfZ2VzdGlvbj0yMDI0JmlkX3BlcmlvZG89MnVUaTIwMTNfVUFURg==.html'>--- <span class='glyphicon glyphicon-education'></span>&nbsp;Periodo Academico 02/2024</b> ---</a></p> <p align='center' style='font-weight: bold'><a href='index.php%3FdVRpMjAxM19VQVRGaWRfZ2VzdGlvbj0yMDI0JmlkX3BlcmlvZG89NnVUaTIwMTNfVUFURg==.html'>--- <span class='glyphicon glyphicon-education'></span>&nbsp;Periodo Academico 06/2024(Curso de Invierno)</b> ---</a></p> <p align='center' style='font-weight: bold'><a href='index.php%3FdVRpMjAxM19VQVRGaWRfZ2VzdGlvbj0yMDI0JmlkX3BlcmlvZG89NXVUaTIwMTNfVUFURg==.html'>--- <span class='glyphicon glyphicon-education'></span>&nbsp;Periodo Academico 05/2024 (Mesa de Examen de Invierno)</b> ---</a></p> <p align='center' style='font-weight: bold'><a href='index.php%3FdVRpMjAxM19VQVRGaWRfZ2VzdGlvbj0yMDI0JmlkX3BlcmlvZG89MXVUaTIwMTNfVUFURg==.html'>--- <span class='glyphicon glyphicon-education'></span>&nbsp;Periodo Academico 01/2024</b> ---</a></p> <p align='center' style='font-weight: bold'><a href='index.php%3FdVRpMjAxM19VQVRGaWRfZ2VzdGlvbj0yMDI0JmlkX3BlcmlvZG89NHVUaTIwMTNfVUFURg==.html'>--- <span class='glyphicon glyphicon-education'></span>&nbsp;Periodo Academico 04/2024 (Mesa de Examen de Verano)</b> ---</a></p> <p align='center' style='font-weight: bold'><a href='index.php%3FdVRpMjAxM19VQVRGaWRfZ2VzdGlvbj0yMDIzJmlkX3BlcmlvZG89M3VUaTIwMTNfVUFURg==.html'>--- <span class='glyphicon glyphicon-education'></span>&nbsp;Periodo Academico 03/2023 (Curso de Verano)</b> ---</a></p> <p align='center' style='font-weight: bold'><a href='index.php%3FdVRpMjAxM19VQVRGaWRfZ2VzdGlvbj0yMDIzJmlkX3BlcmlvZG89MnVUaTIwMTNfVUFURg==.html'>--- <span class='glyphicon glyphicon-education'></span>&nbsp;Periodo Academico 02/2023</b> ---</a></p> <p align='center' style='font-weight: bold'><a href='index.php%3FdVRpMjAxM19VQVRGaWRfZ2VzdGlvbj0yMDIzJmlkX3BlcmlvZG89NXVUaTIwMTNfVUFURg==.html'>--- <span class='glyphicon glyphicon-education'></span>&nbsp;Periodo Academico 05/2023 (Mesa de Examen de Invierno)</b> ---</a></p> <p align='center' style='font-weight: bold'><a href='index.php%3FdVRpMjAxM19VQVRGaWRfZ2VzdGlvbj0yMDIzJmlkX3BlcmlvZG89MXVUaTIwMTNfVUFURg==.html'>--- <span class='glyphicon glyphicon-education'></span>&nbsp;Periodo Academico 01/2023</b> ---</a></p><p align='Left'>Gestion/Periodo de Regularizacion</p><hr> <p align='center' style='font-weight: bold'><a href='index.php%3FdVRpMjAxM19VQVRGaWRfZ2VzdGlvbj0yMDIyJmlkX3BlcmlvZG89NXVUaTIwMTNfVUFURg==.html'>--- <span class='glyphicon glyphicon-education'></span>&nbsp;Periodo Academico(Mesa de Examen de Invierno) 05/2022</b> ---</a></p> <p align='center' style='font-weight: bold'><a href='index.php%3FdVRpMjAxM19VQVRGaWRfZ2VzdGlvbj0yMDIyJmlkX3BlcmlvZG89MXVUaTIwMTNfVUFURg==.html'>--- <span class='glyphicon glyphicon-education'></span>&nbsp;Periodo Academico 01/2022</b> ---</a></p> <p align='center' style='font-weight: bold'><a href='index.php%3FdVRpMjAxM19VQVRGaWRfZ2VzdGlvbj0yMDIyJmlkX3BlcmlvZG89MnVUaTIwMTNfVUFURg==.html'>--- <span class='glyphicon glyphicon-education'></span>&nbsp;Periodo Academico 02/2022</b> ---</a></p> <p align='center' style='font-weight: bold'><a href='index.php%3FdVRpMjAxM19VQVRGaWRfZ2VzdGlvbj0yMDIyJmlkX3BlcmlvZG89M3VUaTIwMTNfVUFURg==.html'>--- <span class='glyphicon glyphicon-education'></span>&nbsp;Periodo Academico 03/2022</b> ---</a></p> <p align='center' style='font-weight: bold'><a href='index.php%3FdVRpMjAxM19VQVRGaWRfZ2VzdGlvbj0yMDIxJmlkX3BlcmlvZG89MXVUaTIwMTNfVUFURg==.html'>--- <span class='glyphicon glyphicon-education'></span>&nbsp;Periodo Academico 01/2021</b> ---</a></p> <p align='center' style='font-weight: bold'><a href='index.php%3FdVRpMjAxM19VQVRGaWRfZ2VzdGlvbj0yMDIwJmlkX3BlcmlvZG89MnVUaTIwMTNfVUFURg==.html'>--- <span class='glyphicon glyphicon-education'></span>&nbsp;Periodo Academico 02/2020</b> ---</a></p> <p align='center' style='font-weight: bold'><a href='index.php%3FdVRpMjAxM19VQVRGaWRfZ2VzdGlvbj0yMDE5JmlkX3BlcmlvZG89MnVUaTIwMTNfVUFURg==.html'>--- <span class='glyphicon glyphicon-education'></span>&nbsp;Periodo Academico 02/2019</b> ---</a></p> <p align='center' style='font-weight: bold'><a href='index.php%3FdVRpMjAxM19VQVRGaWRfZ2VzdGlvbj0yMDE5JmlkX3BlcmlvZG89MXVUaTIwMTNfVUFURg==.html'>--- <span class='glyphicon glyphicon-education'></span>&nbsp;Periodo Academico 01/2019</b> ---</a></p>	      </div>
	      <div class="modal-footer">
		<button type="button" class="btn btn-default" id="eyeKey">Cerrar</button>
		<!--
		<button type="button" class="btn btn-default" data-dismiss="modal" id="eyeKey">Cerrar</button>
		-->
	      </div>
		
	    </div>

	  </div>
	</div>

    <footer class="footer">
      <div class="container">
        	<div class="text-muted out-links">
			<a href="index.html#" class="ar">&copy; 2025 Universidad Aut&oacute;noma Tom&aacute;s Fr&iacute;as - Sistema de Informaci&oacute;n Acad&eacute;mica </a>
		</div>
      </div>
    </footer>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script>
			
    $( document ).ready(function() {
			console.log('00/0');
			document.getElementById('00/0').selected = "true";
			var aux = 0 + parseInt(0);	
			if(aux<=0)
			{
				$('#myModal').modal('show');
			}
			$( "#eyeKey" ).click(function(event) {
															event.preventDefault();
													});
    });

         function changeFunc() {
            const select = document.getElementById('periodo');
            const valor = select.value; // ej: "04/2025"
            
            // Parsear valor para llenar id_gestion e id_periodo
            // Asumiendo que el formato siempre es "MM/YYYY"
            const partes = valor.split('/');
            const mes = partes[0];    // "04"
            const gestion = partes[1]; // "2025"

            // Actualizamos los hidden inputs
            document.getElementById('id_periodo').value = mes;
            document.getElementById('id_gestion').value = gestion;
        }
        

document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('forma');
    const tokenInput = document.getElementById('token');

    form.addEventListener('submit', function () {
        // Simula un valor de token si está vacío (solo para pruebas)
        if (!tokenInput.value) {
            tokenInput.value = 'token_' + Math.random().toString(36).substr(2, 10);
        }
    });
});

    </script>

</body>
</html>


<?php  
	include_once 'main/fxs.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
	<head profile="http://gmpg.org/xfn/11">
		<title>
			EduLiq
		</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="imagetoolbar" content="no">
		<link rel="stylesheet" href="styles/layout.css" type="text/css">
		<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
		<script type="text/javascript" src="scripts/jquery.slidepanel.setup.js"></script>
		<script type="text/javascript" src="scripts/jquery-ui-1.7.2.custom.min.js"></script>
		<script type="text/javascript" src="scripts/jquery.tabs.setup.js"></script>
		<script type="text/javascript" src="main/fxs.js"></script>
	    <style type="text/css">
<!--
.Estilo1 {color: #FF0000}
-->
        </style>
</head>
	<body>

		<div class="wrapper co10">

			<div id="topbar"><!-- ###### <barra superior> ###### -->
				<div id="slidepanel">
				<div class="box1">
				<div class="topbox">
					<h2>Login del Sistema</h2>
					<form action="#" method="post">
						<fieldset>
							<legend>Formulario de Login</legend> 
							<label for="usr">Usuario: 
								<input type="text" name="usr" id="usr" value="">
							</label> 
							<label for="pass">Contraseña: 
								<input type="password" name="pass" id="pass" value="">
							</label> 
							<p>
								<input type="submit" name="login" id="login" value="Ingresar"> &nbsp; 
								<input type="reset" name="reset" id="reset" value="Reiniciar">
							</p>
						</fieldset>
					</form>
				</div>
					<br class="clear">
				</div>
		      <div class="topbox">
					<input type="button" value="Zoom In Modal Window" class="loginbutton" data-type="zoomin" />
					<div class="overlay-container">
						<div class="msjlogin-container zoomin">
							<center>
								<div id="msjlogin">
									<h3>Bienvenido Ricardo MONLA</h3> 
									Ud. se ha logeado exitosamente en el sistema.<br/>
									<br/>
								</div>
								<span class="loginclose" align="center">Cerrar</span>
							</center>
						</div>
					</div>
		      </div>
					
					<br class="clear">
				</div>
				<div id="loginpanel">
					<ul>
						<li class="left">Login »</li>
						<li class="right" id="toggle">
							<a id="slideit" href="#slidepanel">Abrir Panel </a>
							<a id="closeit" style="display: none;" href="#slidepanel">Cerrar Panel</a>
						</li>
					</ul>
				</div><br class="clear">
			</div><!-- ###### </barra superior> ###### -->
		</div><!-- ####################################################################################################### -->

		<div class="wrapper col1">
			<div id="header"><!-- ###### <cabezera> ###### -->
				<div id="logo">
					<h1 align="left"><a href="#">EduLiq</a> </h1>
					<p align="left"> Sistema de Gestión de Novedades y</p>
					<p align="left">Consulta de Liquidaciones</p>
					</div>
				<div class="fl_right">
					
				</div><br class="clear">
			</div><!-- ###### </cabezera> ###### -->
		</div><!-- ####################################################################################################### -->
		<div class="wrapper col2">
			<div id="topnav"><!-- ###### <barra navegación> ###### -->
				<ul>
					<li id="MInicio" class="">
						<a href="index_liq.php">Inicio</a>
<!-- 						<ul>
							<li class="last">
								<a href="#">Cargar liquidaciones</a>
							</li>
						</ul>
 -->					</li>
					<li id="Novedades" class="">
						<a href="novedades_liq.php">Novedades</a>
						<ul>
							<li>
								<a href="#">Importación</a>
							</li>
							<li>
								<a href="#">Exportacíon</a>
							</li>
							<li>
								<a href="#">Usuarios</a>
							</li>
							<li class="last">
								<a href="#">Perfiles</a>
							</li>
						</ul>
					</li>
					<li id="#Consultas"  class="active">
						<a href="consulta_liq.php">Consultas</a>
						<ul>
							<li>
								<a href="cons_revista_liq.php">Situación de Revista</a>
							</li>
							<li>
								<a href="cons_hist_liq.php">Histórico</a>
							</li>
							<li>
								<a href="cons_filtro_liq.php">Consulta por Filtro</a>
							</li>
						</ul>
					</li>
					
				</ul>
			</div><!-- ###### </barra navegación> ###### -->
		</div>
		<!-- ####################################################################################################### -->
		<div class="wrapper col3">
		  <div id="breadcrumb"><!-- ###### <Ud está aquí> ###### -->
		  </div><!-- ###### </Ud está aquí> ###### -->
		</div>
		<!-- ####################################################################################################### -->
		<div class="wrapper col4">
			<div id="container"><!-- ###### <contenido> ###### -->
				<div id="content">
		      	<h2>CONSULTA: SITUACION DE REVISTA</h2>
			      <div id="respond">
              			<form name="rev" method="post" action="cons_revista2_liq.php"/>
              				<table width="50%">
								</tr>
								<tr>
									<td class="col1"><strong>INGRESE AUTORIDAD SOLICITANTE:</strong></td>
									<td><input type="text" name="autoridad" size="50"></td>
								</tr>
								<tr>
									<td class="col1"><strong>INGRESE NOMBRE DEL SOLICITANTE:</strong></td>
									<td><input type="text" name="nomb_aut" size="50"></p></td>
								</tr>
								<tr>
									<td class="col1"><strong>INGRESE EL DNI DEL AGENTE:</strong></td>
									<td><input type="text" name="dni" size="50"></td>
								</tr>
								<tr>
									<td class="col1"><strong>INGRESE PERIODO DE CONSULTA:</strong></td>
									<td>
									 <select name="mes">
                						<option value="0">Elija el MES</option>
               							<option value="01">ENERO</option>
                						<option value="02">FEBRERO</option>
                						<option value="03">MARZO</option>
                						<option value="04">ABRIL</option>
                						<option value="05">MAYO</option>
                						<option value="06">JUNIO</option>
                						<option value="07">JULIO</option>
                						<option value="08">AGOSTO</option>
                						<option value="09">SEPTIEMBRE</option>
                						<option value="10">OCTUBRE</option>
               							<option value="11">NOVIEMBRE</option>
                						<option value="12">DICIEMBRE</option>
              					</select>
             					 <font color=#3169a5 class="col1">del año</font>
              					<select name="anio">
                					<option value="0">Año</option>
                						<?
											$anio = date("Y");
											for($i=$anio;$i>1995;$i--)
												{
													echo '<option value="'.$i.'">'.$i.'</option>';
													echo "<br>";
												}
											?>
              					</select>									</td>
								<tr>
									<td colspan="2"><div align="right">
									  <input name="" type="submit" class="bold" value="Consultar" />
									  </div></td>
								</tr>
					</table>
				 		</form>
   		</div><!-- ###### </contenido> ###### -->
		      
									</table>	
									
			<div class="clear">
		  </div>
		</div>
		<!-- ####################################################################################################### -->
		<?php 
         unset($_POST['upf']); 
         //Esta bandera la deseteo para que no resubir el mismo archivo.
         //unlink($_SESSION['path_temp'].$_FILES['userfile']['name']);
         //} 
      ?>
	</body>
</html>

<?php  
/*<®> fx verificarArchivo <®>*/
	/**
	 * Función que verifica si se eligió un archivo correctamente.
	 */
function verificarArchivo(){
   //var_dump($_FILES, $_POST);
   //exit;
   
   if(!isset($_POST['upf'])) return false;
   
   //var_dump($_FILES['userfile']);

   if($_FILES['userfile']['error'] > 0){
   	echo 'Error en archivo seleccionado !!!';
      return false;
   }
	$ext = strtolower(substr($_FILES['userfile']['name'],-4));
	$permitidos = array('.zip');
	if(!in_array($ext, $permitidos)){
		echo 'La extensión del archivo no corresponde, <br> 
				Recuerde que el DBF debe estar comprimido en un archivo .ZIP !!!'; 
		return false;
	}
   return true;
}
/*<®> fx subirArchivo <®>*/
	/**
	 * Función que sube un archivo seleccionado.
	 */
	function subirArchivo(){
	   /**
	    * Datos del Archivo.
	    */
	      $arch_nombre  = $_FILES['userfile']['name']; 
	      $arch_tipo    = $_FILES['userfile']['type']; 
	      $arch_tamanio = $_FILES['userfile']['size'];
	   /**
	    * Destino
	    */
			$path_dest = 'uploads/';
			$destino   = $path_dest.$arch_nombre;
	   /**
	    * Subo el archivo.
	    */
	      if (!move_uploaded_file($_FILES['userfile']['tmp_name'], $destino)){
	         echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
	         return false;
	   	}
	   	return $arch_nombre; 
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Arreglos</title>
	<!-- Incluir bulma.min.css -->
	<link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
<body>

<section class="hero is-danger">
  <div class="hero-body">
    <p class="title">
      Formulario
    </p>
    <p class="subtitle">
      Datos de persona
    </p>
  </div>
</section>

	<section class="section is-medium columns">

  		<div class="column"></div>

  		<div class="column is-two-fifths">
			

  			<?php
	        
				$apellido = $_POST['apellido'];
                $apellidomaterno = $_POST['apellidomaterno']; $cargo = $_POST['cargo'];
                $rfc = $_POST['rfc'];
                $domicilio = $_POST['domicilio'];
				$telefono = $_POST['telefono'];
                $correoelectronico = $_POST['correoelectronico'];
                $sexo = $_POST['sexo'];
                $fechadenacimiento = $_POST['fechadenacimiento'];
                $estadocivil = $_POST['estadocivil'];
                $escolaridad = $_POST['escolaridad'];
				$referenciafamiliar = $_POST['referenciafamiliar'];
                $observaciones = $_POST['observaciones'];
				echo "<h1 class='is-subtitle'>";
				

				echo "<br>Apeliido paterno: " . $apellido . ".";
                echo "<br>Apellido materno: " . $apellidomaterno . "."; echo "<br>Su cargo es: " . $cargo . ".";
                echo "<br>RFC: " . $rfc . ".";
                echo "<br>Su domicilio es: " . $domicilio . ".";
				echo "<br>Tu número telefónico es: " . $telefono;
                echo "<br>Tu correo elecronico es: " . $correoelectronico;
                echo "<br>Sexo: " . $sexo . ".";
                echo "<br>Fecha de nacimiento: " . $fechadenacimiento . ".";
                echo "<br>Estado civil: " . $estadocivil . ".";
                echo "<br>Su escolaridad es: " . $escolaridad . ".";
                echo "<br>Referencia familiar: " . $referenciafamiliar . ".";
                echo "<br>Observaciones: " . $observaciones . ".";
               

				echo "</h1>";
			?>


		</div>

		<div class="column"></div>

	</section>

</body>
</html>


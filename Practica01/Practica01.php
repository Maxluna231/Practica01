<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Incluir bulma.min.css -->
	<link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
<body background ="mi fondo.webp">
<body>
<center>
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
<center/>	

<section class="section is-guy">
  		<div class="column"></div>
  		<div class="column is-two-fifths">
			
		  <form action="procesar01.php" method="post">
				<div>

				<div styale="background"-color: green">
					<p style ="color: #64FF33;"> Apellido Paterno: </p>
					<input class="input is-link" type="text"  name="apellido" required>
				</div>

				<div styale="background"-color: green">
					<p style ="color: #64FF33;"> Apellido Materno: </p>
				<input class="input is-link" type="text"  name="apellidomaterno" required>
				</div>

				<div styale="background"-color: green">
					<p style ="color: #64FF33;"> Cargo: </p>
					<input class="input is-link" type="text"  name="cargo" required>
				</div>

                <div styale="background"-color: green">
					<p style ="color: #64FF33;"> RFC: </p>
					<input class="input is-link" type="text"  name="rfc" required>
				</div>

				<div styale="background"-color: green">
					<p style ="color: #64FF33;"> Curp: </p>
					<input class="input is-link" type="text"  name="curp" required>
				</div>

				<div styale="background"-color: green">
					<p style ="color: #64FF33;"> Domicilio: </p>
					<input class="input is-link" type="text" name="domicilio" required>
				<div>

				  <div styale="background"-color: green">
					<p style ="color: #64FF33;"> Telefono: </p>
					<input class="input is-link" type="text" name="telefono" required>
				</div>

				<div styale="background"-color: green">
					<p style ="color: #64FF33;"> Correo Elecronico: </p>
					<input class="input is-link" type="text" placeholder="example@gmail.com" name="correoelectronico" required>
				</div>
  
	        	<div class="control"> 	<p style ="color: #64FF33;"> sexo: </p>
                   <label class="radio">
                 <input type="radio" name="sexo" value ="hombre">
                <p style ="color: #64FF33;"> hombre</p>
                 </label>
                   <label class="radio">
                  <input type="radio" name="sexo" value = "mujer">
                <p style ="color: #64FF33;"> Mujer</p>
                 </label>

                 </div>
                <div styale="background"-color: green">
				<p style ="color: #64FF33;"> Fecha de naciemiento: </p>
		          <input class="input is-link" type="text" name="fechadenacimiento" required>
				</div>

                <div class="control">
				<p style ="color: #64FF33;">Estado civil: </p>
                <label class="radio">
                       <input type="radio" name="estadocivil"> 	
               <p style ="color: #64FF33;"> Soltero</p>
                </label>
               <label class="radio">
                 <input type="radio" name="estadocivil" value="casado">
                <p style ="color: #64FF33;"> Casado</p>
               </label>
               <label class="radio">
               <input type="radio" name="estadocivil" value="viudo">
                  <p style ="color: #64FF33;"> Viudo</p>
                </label>
		         </div>

                <div class="control">
                <p style ="color: #64FF33;">Escolaridad: </p>
                  <label class="radio">
                  <input type="radio" name="escolaridad">
                 <p style ="color: #64FF33;"> Prescolar</p>
               </label>

               <label class="radio">
               <input type="radio" name="escolaridad" value="primaria">
               <p style ="color: #64FF33;"> Primaria</p>
               </label>

              <label class="radio">
              <input type="radio" name="escolaridad" value="secundaria">
              <p style ="color: #64FF33;"> Secundaria</p>
	         </label>

	         <label class="radio">
             <input type="radio" name="escolaridad" value="preparatoria">
             <p style ="color: #64FF33;"> Preparatoria</p>
             </label>

             <label class="radio">
                <input type="radio" name="escolaridad" value="universidad">
             <p style ="color: #64FF33;"> Universidad</p>
                </label>
  
            </label>
               </div>
                <div styale="background"-color: green">
					<p style ="color: #64FF33;"> Referencia familiar: </p>
					<input class="input is-link" name="referenciafamiliar" required>
				</div>

              	<div styale="background"-color: green">
					<p style ="color: #64FF33;"> Obervaciones: </p>
					<input class="input is-link" type="text"  name="observaciones" required>
					</div>

        	      <div>
					<input class="button is-black" type="submit" value="Enviar">
				
				</div>
			</form>
		</div>

		<div class="column"></div>

	</section>

</body>
</html>
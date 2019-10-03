
<?php

class Register{


	function __construct(){ 
		$this->render();
	}

	function render(){

		include '../Views/Header.php'; //header necesita los strings
	?>


<body>	
		<div class="registro align-self-center ">
			<div class="form-registro">
				<div class="regisro">
					<div class="col-sm-8">
						<h2 class="form-title" id="registro">Registro</h2>
						<div class="form-holder">
							<div class="col-sm-3">
								<br><input type="text" class="input" placeholder="Login" /><br>
							</div>
							<div class="col-sm-3">
								<br><input type="text" class="input" placeholder="Nombre" /><br>
							</div>
							<div class="col-sm-3">
								<br><input type="text" class="input" placeholder="Apellidos" /><br>
							</div>
							<br><input type="email" class="input" placeholder="Email" /><br>
							<br><input type="password" class="input" placeholder="Password" /><br>
						</div>
					</div>
					<div class="col-2">
							<div class="input-select">
								<div class="rs-select2 js-select-simple select--no-search">
								   <br> <select name="gender" id="selectGrupo">
										<option disabled="disabled" selected="selected">¿Para que va a utilzar este servicio?</option>
										<option>Uso profesional</option>
										<option>Uso personal</option>
										<option>Uso educativo</option>
										<option>Otro</option>
									</select>
									<div class="select-dropdown"></div>
								</div>
							</div>
						</div>
					</div>
					<br><div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
					  <label class="form-check-label" for="defaultCheck1">
						¿Acepta los términos y condiciones?
					  </label>
					</div>
					<br><div class="p-t-20">
						<button class="btn btn--radius btn--green" type="submit" id="btnRegistro"><a href="../Controllers/Register_Controller.php?" class="btn btn-outline-success color2">Registrarse</a></button>
					</div>
				</div>
			</div>

<a href='../index.php'>Volver </a>
	
	<?php
		include '../Views/Footer.php';
	} //fin metodo render

} //fin REGISTER

?>

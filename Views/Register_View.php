
<?php

class Register{


	function __construct(){ 
		$this->render();
	}

	function render(){

		include '../Views/Header.php'; //header necesita los strings
	?>

<body>


  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Registro</h5>
                       <form class="form-signin" action='../Controllers/Register_Controller.php' method='post'>
              <div class="form-label-group">
				<input type="text" id="login" name="login" class="form-control" placeholder="Login" required autofocus>
                
              </div>

              <div class="form-label-group">
				<input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" required autofocus>
                
              </div>

              <div class="form-label-group">
				<input type="text" id="apellidos" name="apellidos" class="form-control" placeholder="Apellidos" required autofocus>
                
              </div>
              

              <div class="form-label-group">
                <input type="text" id="email" name="email" class="form-control" placeholder="E-mail" required>
                
              </div>
              <div class="form-label-group">
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


              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
              </div>
			  <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Registrarme</button>

        
          </form>
          </div>
      </div>

<a href='../index.php'>Ya estás registrado? Loguéate </a>
          </div>
        </div>
      </div>
</body>
	<?php
		include '../Views/Footer.php';
	} //fin metodo render

} //fin REGISTER

?>

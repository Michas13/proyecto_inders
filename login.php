<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'><link rel="stylesheet" href="../View/Styles/styles-form.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="../Source/favicon.ico" type="image/x-icon">
    <title>Test Grupo Inders</title>
</head>
<body>
    <!-- Formulario de ingreso y Registro -->

<div class="container" id="container">
	<div class="form-container sign-up-container">
        <!--Formulario de creacion de cuenta-->
		<form action="#">
			<h1>Crear cuenta</h1>
			<!-- <div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div> -->
			<!-- <span>Ingresar un texto</span> -->
            <div>
                <input style="width: 140px; display: inline-block;" type="text" name="name" id="name" placeholder="Nombre" />
                <input style="width: 140px; display: inline-block;" type="text" name="lastname" id="lastname" placeholder="Apellidos" />
            </div>
			<input type="email" name="email" id="email" placeholder="Correo electronico" />
			<input type="password" name="pass" id="pass" placeholder="Contraseña" />
            <input type="password" placeholder="Corroborar contraseña" />
			<button id="nuevoRegistro" >Continuar</button>
		</form>
	</div>

    <!--Formulario de Inicio de sesion-->
	<div class="form-container sign-in-container">
		<form action="#" id="registerform">

			<h1>Iniciar Sesión</h1>
			<!-- <div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div> -->
		
			<input type="email" name="email" id="email" placeholder="Correo electronico" />
			<input type="password" name="pass" id="pass" placeholder="Contraseña" />
			<a href="#">Olvidaste contraseña?</a>
			<button>Continuar</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
                <img style="width: 90px; height: 85px;" src="../Source/Logo trazo blanco 264x255.png">
				<h1>Bienvenido de nuevo!</h1>
				<p>Para mantenerse conectado con nosotros, inicie sesión con su información personal</p>
				<button class="ghost" id="signIn">Ingresar</button>
			</div>
			<div class="overlay-panel overlay-right">
                <img style="width: 90px; height: 85px;" src="../Source/Logo trazo blanco 264x255.png">
				<h1>Hola, Bienvenido!</h1>
				<p>Ingresa tus datos personales y comienza tu viaje con nosotros</p>
				<button class="ghost" id="signUp">Registrarse</button>
			</div>
		</div>
	</div>
</div>


<!-- Codigos Sript -->
  <script  src="../Controller/script-form.js"></script>

</body>
</html>
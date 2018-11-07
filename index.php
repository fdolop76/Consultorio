

<?php
	require('conexion.php');
	
	session_start();
	
	if(isset($_SESSION["id_usuario"])){
		header("Location: menu.php");
	}
	
	if(!empty($_POST))
	{
		$usuario = mysqli_real_escape_string($mysqli,$_POST['usuario']);
		$password = mysqli_real_escape_string($mysqli,$_POST['password']);
		$error = '';
		
		$sha1_pass = sha1($password);

		
		$sql = "SELECT id_usuario, id_tipo FROM login WHERE usuario = '$usuario' AND password = '$password'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;
				
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['id_usuario'] = $row['id_usuario'];
			$_SESSION['tipo_usuario'] = $row['id_tipo'];
			
			header("location: menu.php");
			} else {
			$error = "El nombre o contraseña son incorrectos";
		}
	}
?>
<html>
	<head>
		<title>Login</title>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/main.css" />
    <!--Pulling Awesome Font -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	</head>
	
	<body>

		<div class="contenedor container-fluid d-flex align-items-center justify-content-center">
        <div class="row w-100">
            <div class="col-12 col-sm-6 col-lg-4 mx-auto">
                <div class="form-login">
                <h4>Consultorio</h4>

		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" > 
			<div><label>Usuario:</label><input class="form-control input-sm chat-input" placeholder="username" id="usuario" name="usuario" type="text" ></div>
			<br />
			<div><label>Password:</label><input class="form-control input-sm chat-input" placeholder="password" id="password" name="password" type="password"></div>
			<br />
			<div class="wrapper">
				<span class="group-btn">
				<input class="btn btn-primary btn-md" name="login" type="submit" value="login">
			</span>
			</div> 
		</form>
		</div>
		</div>
		</div>
		</div>
		
		<br>
		
		<div style = "font-size:16px; color:#cc0000;"><?php echo isset($error) ? utf8_decode($error) : '' ; ?></div>



		<!--Bootstrap.min.js-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!--Jquery.min.js-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	</body>
</html>

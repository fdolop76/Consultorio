<?php  
session_start();
    
    if(isset($_SESSION["id_usuario"])){
        
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>Actualizar perfil</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<link rel="stylesheet" type="text/css" href="assets/css/smenu.css">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<?php require 'conexion.php'; ?>

</head>
<body>
	<?php
	$id_usuario = $_POST['id_paciente']; 
	$sql = $mysqli->query("SELECT * FROM paciente where id_paciente = '$id_usuario'");

	$info = mysqli_fetch_row($sql)
	?>

<div class="container" style="background-color: rgb(255,255,255); opacity: 0.9; border-radius: 0px 31px 31px 0px;
        -moz-border-radius: 0px 31px 31px 0px;
        -webkit-border-radius: 0px 31px 31px 0px;
        border: 0px solid #000000;
        border: -webkit-box-shadow: -4px 2px 29px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: -4px 2px 29px 0px rgba(0,0,0,0.75);
         box-shadow: -4px 2px 29px 0px rgba(0,0,0,0.75);">
        <br>
        <h5 class="section-title h1">Actualizar paciente</h5>
        <br>
        <div class="row">
            <form id="formpa" class="form" action="urpaciente.php" method="POST" style="margin: auto;">
            	<input type="hidden" name="id_paciente" value=<?php echo $id_usuario; ?>>
                <div class="form-row">
                    <div class="col-md-6">
                        <label for="n">Nombres:</label>
                        <input class="form-control" type="text" name="nombre"  id="n" value=<?php echo $info[2]; ?> required="required">
                    </div>
                    <div class="col-md-6">
                        <label for="a">Apellidos:</label>
                        <input class="form-control" type="text" name="apellido" id="a" value=<?php echo $info[3]; ?> require="required">
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col-md-3">
                        <label for="sec">No. Matricula:</label>
                        <input class="form-control" type="number" name="matricula" id="sec" value=<?php echo $info[1]; ?>>
                    </div>
                    <div class="col-md-3">
                        <label for="ed">Edad:</label>
                        <input class="form-control" type="number" name="edad" id="ed" required="required" value=<?php echo $info[4]; ?>>
                    </div>
                    <div class="col-md-6">
                         <div class="form-check form-check-inline">
                                <input id="rh" class="form-check-input" type="radio" name="genero" value="masculino" <?php if ($info[5] == "masculino") 
                                	print "checked=true"?> >
                                <label class="form-check-label" for="rh">Hombre</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input id="rm" class="form-check-input" type="radio" name="genero" value="femenino" <?php if ($info[5] == "femenino") 
                                	print "checked=true"?>>
                                <label class="form-check-label" for="rm">Mujer</label>
                            </div>
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col-md-4">
                        <label for="prov">Procedencia:</label>
                        <input class="form-control" id="prov" type="text" name="proviene" value=<?php echo $info[6]; ?> required="required">
                    </div>
                    <div class="col-md-5">
                        <label for="dom">Domicilio:</label>
                        <input class="form-control" id="dom" type="text" name="domicilio" value=<?php echo $info[7]; ?> required="required">
                    </div>
                    <div class="col-md-3">
                        <label for="nfono">No. Telefono:</label>
                        <input class="form-control" id="nfono" type="number" name="nfono" value=<?php echo $info[8]; ?> required="required">
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col-md-4">
                        <label for="reli">Religion:</label>
                        <input class="form-control" id="reli" type="text" name="religion" value=<?php echo $info[9]; ?>>
                    </div>
                    <div class="col-md-4">
                        <label for="edu">educacion:</label>
                        <input class="form-control" id="edu" type="text" name="educacion" value=<?php echo $info[10]; ?>>
                    </div>
                    <div class="col-md-4">
                        <label for="corr">Correo:</label>
                        <input class="form-control" id="corr" type="email" name="correo" value=<?php echo $info[11]; ?>>
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-check form-check-inline">
                            <input id="tipa" class="form-check-input" type="radio" name="tipo" value="adulto" <?php if ($info[12] == "adulto") 
                                	print "checked=true"?>>
                            <label for="tipa" class="form-check-label">Adulto</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input id="tipp" class="form-check-input" type="radio" name="tipo" value="pediatrico" <?php if ($info[12] == "pediatrico") 
                                	print "checked=true"?>>
                            <label for="tipp" class="form-check-label">Pediatrico</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check form-check-inline">
                            <input id="ecis" class="form-check-input" type="radio" name="ecivil" value="Soltero" <?php if ($info[13] == "Soltero") 
                                	print "checked=true"?>>
                            <label for="ecis" class="form-check-label">Soltero</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input id="ecic" class="form-check-input" type="radio" name="ecivil" value="Casado" <?php if ($info[13] == "Casado") 
                                	print "checked=true"?>>
                            <label for="ecic" class="form-check-label">Casado</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input id="eciv" class="form-check-input" type="radio" name="ecivil" value="Viudo" <?php if ($info[13] == "Viudo") 
                                	print "checked=true"?>>
                            <label for="eciv" class="form-check-label">Viudo</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input id="ecid"  class="form-check-input"type="radio" name="ecivil" value="Divorciado" <?php if ($info[13] == "Divorciado") 
                                	print "checked=true"?>>
                            <label for="ecid" class="form-check-label">Divorciado</label>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <label for="tut">Tutor</label>
                        <input class="form-control" id="tut" type="text" name="tutor" value=<?php echo $info[14]; ?>>
                    </div>
                </div>
                <br>
                
                <button type="submit" class="btn btn-default">Registrar</button>

            </form>	            
        </div>
        <br>
        <br>
    </div>

</body>
</html>

<?php } else{
    header("Location: index.php");
} ?>
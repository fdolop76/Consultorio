

<?php  
session_start();
    
    if(isset($_SESSION["id_usuario"])){
        
    
?>



<!DOCTYPE html>
<html>
<head>
	<title>
		Perfil Paciente
	</title>

	<!-- Link area -->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" type="text/css" href="assets/css/sperfil.css">
	<!-- script area -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<?php require 'conexion.php'; ?>

</head>
<body>

	<?php 

	echo $id_usuario = $_POST['id_paciente'];

	$sql = $mysqli->query("SELECT * FROM paciente where id_paciente = '$id_usuario'");

	$info = mysqli_fetch_row($sql)

	 ?>

<div class="container emp-profile">
            
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="assets/img/masculino.jpg" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        <?php echo $info[2]; ?>
                                    </h5>
                                    <h6>
                                        <?php echo $info[12]; ?>
                                    </h6>
                                    <p class="proile-rating">Edad: <span><?php echo $info[4]; ?></span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Información</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                    	<form method="POST" action="upaciente.php">
                    		<input type="hidden" name="id_paciente" value=<?php echo $id_usuario; ?>>
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>Historial Clinico</p>
                            <a href="">Historiales Clinicos</a><br/>
                            <a href="">Historiales Clinicos</a><br/>
                            <a href="">Historiales Clinicos</a>
                            <p>Notas de Evolucion</p>
                            <a href="">Notas De Evolucion</a><br/>
                            <a href="">Notas De Evolucion</a><br/>
                            <a href="">Notas De Evolucion</a><br/>
                            <a href="">Notas De Evolucion</a><br/>
                            <a href="">Notas De Evolucion</a><br/>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Matrícula</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $info[1]; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nombre</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $info[2]; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Apellidos</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $info[3]; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Telefono</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $info[8]; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Correo</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $info[11]; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Domicilio</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $info[7]; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Estado Civil</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $info[13]; ?></p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Experience</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Hourly Rate</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>10$/hr</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Total Projects</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>230</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>English Level</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Availability</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>6 months</p>
                                            </div>
                                        </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Your Bio</label><br/>
                                        <p>Your detail description</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
</body>
</html>

<?php } else{
    header("Location: index.php");
} ?>
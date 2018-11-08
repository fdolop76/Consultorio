<?php  
session_start();
    
    if(isset($_SESSION["id_usuario"])){
        
    
?>



<?php 
require 'conexion.php';
if (!$mysqli) {
	echo 'Error al intentar conectar con la base de datos';
} else {
	echo $id_usuario = $_POST['id_paciente'];
	echo $nombre = $_POST['nombre'];
	echo $apellido = $_POST['apellido'];
	echo $matricula = $_POST['matricula'];
	echo $edad = $_POST['edad'];
	echo $genero = $_POST['genero'];
	echo $procedencia = $_POST['proviene'];
	echo $domicilio = $_POST['domicilio'];
	echo $telefono = $_POST['nfono'];
	echo $religion = $_POST['religion'];
	echo $educacion = $_POST['educacion'];
	echo $correo = $_POST['correo'];
	echo $tipo = $_POST['tipo'];
	echo $ecivil = $_POST['ecivil'];
	echo $tutor = $_POST['tutor'];
	

$qVerificar = "SELECT * from paciente where nombre = '$nombre' and apellido = '$apellido'";
		$verificar = $mysqli->query($qVerificar);
		$ver=$verificar->num_rows;
		echo $ver;
		if($ver==0){

			echo $query = " UPDATE paciente SET id_paciente = '$id_usuario', matricula = '$matricula', nombre = '$nombre', apellido = '$apellido', edad = '$edad', genero = '$genero', proviene = '$procedencia', domicilio = '$domicilio', nfono = '$telefono', religion = '$religion', educacion = '$educacion', correo = '$correo', tipo = '$tipo', ecivil = '$ecivil', tutor = '$tutor' WHERE id_paciente = '$id_usuario'";

			$insertar = $mysqli->query($query);

				if ($mysqli->affected_rows) {
				header('location: registros.php');
			} else { header('location: error.php'); 
		}

	} else {
			header('location: correoExistente.php');
	}
}
 ?>

 <?php } else{
    header("Location: index.php");
} ?>
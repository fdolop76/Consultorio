
<?php  
session_start();
    
    if(isset($_SESSION["id_usuario"])){
        
    
?>



<?php 
require 'conexion.php';
if (!$mysqli) {
	echo 'Error al intentar conectar con la base de datos';
} else {
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

			echo $query = "INSERT into paciente (id_paciente, matricula, nombre, apellido, edad, genero, proviene, domicilio, nfono, religion, educacion, correo, tipo, ecivil, tutor) 
				values ('null', '$matricula', '$nombre', '$apellido', '$edad', '$genero', '$procedencia', '$domicilio', '$telefono', '$religion', '$educacion', '$correo', '$tipo', '$ecivil', '$tutor')";

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
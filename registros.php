<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" type="text/css" href="assets/css/sregistros.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
	

	<!-- Our Custom CSS -->
	<link rel="stylesheet" href="assets/css/aside.css">
	<!-- Scrollbar Custom CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

	<script language="JavaScript" type="text/javascript" src="ajax.js"></script>

<?php require 'conexion.php'; ?>
	
</head>
<body id="bgeneral">
	<header style="width: 100%; height: 100px; background-color: rgb(255,255,255); opacity: 0.9; margin-bottom: 20px;">
		<button onclick="location='nregistro.php'" style="background: none; border: none;"><img style="width: 40px; height: 40px; position: absolute; right: 20px; top: 25px;" class=" img-fluid" src="assets/img/agregar.png" alt="card image"></button>
	</header>

	<!-- Body -->

	<?php



	$sql = $mysqli->query("SELECT * FROM paciente"); 
	
	?>

	<div class="container" style="background-color: rgb(255,255,255); opacity: 0.9; border-radius: 0px 31px 31px 0px;
        -moz-border-radius: 0px 31px 31px 0px;
        -webkit-border-radius: 0px 31px 31px 0px;
        border: 0px solid #000000;
        border: -webkit-box-shadow: -4px 2px 29px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: -4px 2px 29px 0px rgba(0,0,0,0.75);
         box-shadow: -4px 2px 29px 0px rgba(0,0,0,0.75);">
         <br>
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">id</th>
					<th scope="col">matricula</th>
					<th scope="col">Nombre</th>
					<th scope="col">apellido</th>
					<th scope="col">tipo</th>
					<th scope="col">opciones</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				
					
				while ($row = mysqli_fetch_row($sql)) {				
				 ?>
				<tr>
					<td><?php echo $row[0]; ?></td>
					<td><?php echo $row[1]; ?></td>
					<td><?php echo $row[2]; ?></td>
					<td><?php echo $row[3]; ?></td>
					<td><?php echo $row[12]; ?></td>
					<td><form style='display: inline-block;' action='editapac.php' method='POST'>
						<input type='hidden' name='id_paciente' value=<?php echo $row[0]; ?>>
						<button class='glyphicon glyphicon-pencil' style='background: none; border: none;' type='submit'></button>
						</form>

						<form style='display: inline-block;' action='eliminarpac.php' method='POST'>
							<input type='hidden' name='id_paciente' value=<?php echo $row[0]; ?>>				 	
				 			<button class='glyphicon glyphicon-trash' style='background: none; border: none;' type='submit'></button>
				 		</form>
					</td>
				</tr>
				<?php 
					
				}
				 ?>
			</tbody>
			
		</table>
	</div>
	
	<!-- /Body -->
	
  <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
</body>
</html>
<?php  
session_start();
    
    if(isset($_SESSION["id_usuario"])){
        
    
?>
<html>
<head>
	<title>Menu</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" type="text/css" href="assets/css/smenu.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</head>
<body>

	<section class="container">
    <div class="container">
        <h5 class="section-title h1"></h5>
        <div class="row">
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <button src="assets/img/agregar.png" onsubmit="MostrarConsulta('getpacientes.php')" onclick="location='registros.php'" style="border: none; background: none;">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="assets/img/revisar.png" alt="card image"></p>
                                    <h4 class="card-title">Registros</h4>
                                    <p class="card-text">Muestra el resgistro de los pacientes</p>
                                </div>
                            </div>

                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">opcion 5</h4>
                                    <p class="card-text">Descripcion larga de la opcion 5 Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    <br>
                                    <a href="#"><i class="fa fa-check"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </button>
        </div>
                        
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">

                <div class="image-flip" ontouchstart="this.classList.toggle('hover');" >
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="assets/img/revisar.png" alt="card image"></p>
                                    <h4 class="card-title">Opcion 5</h4>
                                    <p class="card-text">Descripcion corta de la opcion 5</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">opcion 5</h4>
                                    <p class="card-text">Descripcion larga de la opcion 5 Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    <br>
                                    <a href="#"><i class="fa fa-check"></i></a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <button onclick="location='logout.php'" style="border: none; background: none;">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="assets/img/salir.png" alt="card image"></p>
                                    <h4 class="card-title">Salir</h4>
                                    <p class="card-text">Cerrar sesion</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Cerrar Sesion</h4>
                                    <p class="card-text">Salir de la plataforma</p>
                                    <br>
                                    <a href="#"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </button>
            </div>
            <!-- ./Team member -->

        </div>
    </div>
</section>

<footer class="bg-black small text-center text-white-50">
	<br>
	
      <div class="container container-center">
        Copyright &copy; Kevin Batres 2018
      </div>
    </footer>
</body>
</html>

<?php } else{
    header("Location: index.php");
} ?>
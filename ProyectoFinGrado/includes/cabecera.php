
<head>
        <meta charset="UTF-8">
        <title>Trabajo de fin de grado</title>
        <meta name="author" content="Kristian Urra">
        <meta name="description" content="Borrador">


        <!-- librería jQuery -->
        <script src="JQuery/jquery.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="bootstrap/bootstrap.min.js"></script>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css"> 

        <!-- estilo de los iconos de los glyphicons de bootstrap -->
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" >

        <link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>

        <script src="javaScript/funciones.js"></script>
        <link rel="stylesheet" href="estilos/estilo.css">
        <link rel="stylesheet" href="estilos/enfermedades.css">
        <link rel="stylesheet" href="estilos/cita.css">
        <link rel="stylesheet" href="estilos/textSlide.css">

    </head>
<body>
<header>
            <div id="barraSuperior">                      
                <ol>
                    <li> <?php if(isset($_SESSION['nombre'])){echo "<a href=formInicioSesion.php>Usuario: ".$_SESSION['nombre']."</a>";} ?></li>
                    <?php if(isset($_SESSION['nombre'])){echo "<li><a href='cerrarSesion.php'>Cerrar Sesion</a></li>";}else{echo "<li><a href=formInicioSesion.php>Iniciar sesión</a></li>";}  ?>
                <li><a href=#>Registrarse</a></li>
                </ol>
                </div>             
         
            
               
          <nav class="navbar navbar-default">
              <div class='container'>
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">
       <img alt='brand' src="imagenes/letra-abstracta-un-logotipo-35265096.png">
      </a>
     
    </div>
      
      <ul class="nav navbar-nav">
          <li><a href="index.php"><h1>CLÍNICA ARCADIA</h1></a></li>
          <li><a href="enfermedades.php"><p>Enfermedades y tratamientos.</p></a></li>
          <li><a href='formCita.php'><button type="button" class="btn btn-info">PEDIR CITA</button></a></li>    
      </ul>
  </div>
              </div>
</nav>
          
     
        </header>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>La Bauhaus - Consulta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">

</head>

<body>
  <div class="container-fluid">

      <div class="row">
      
        <!-- Banner -->
        <div class="col-md-12" id="banner">
          <img src="imagenes/banner5.png" class= "bannerhome" alt="...">
       
        </div>
        
      </div>
      
      <div class="row">
      
        <!-- Menú vertical -->
        <div class="col-md-3 ubinav">
          <nav class="navbar navbar-expand-lg navbar-light ">
              <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link" href="form_login.php">
                        <i class="fas fa-user fa-lg"></i>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " aria-current="page" href="index.html">INICIO</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="acercade.html">ACERCA DE</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="artistas.html">ARTISTAS</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="obras.html">OBRAS</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="contacto.html">CONTACTO</a>
                    </li>
                   
                  </ul>
                </div>
              </div>
            </nav>
        </div>
      </div>
        
        <!-- Contenido principal -->
    <div class="col-12">
        <div class="container-fluid">


            <?php
                include('conexion.php');

                $buscar = $_POST['buscar'];
                echo "<div class='col-12 col-md-6 align-self-center background5'> <div class='col-10 text-center_diseñoind'>
                <h2 class='previewbauhaus3'>Su consulta: <em>".$buscar."</em></h2></div></div><br>";

                $consulta = mysqli_query($conexion, "SELECT * FROM artistas WHERE (nombre LIKE '%$buscar%' OR apellido LIKE '%$buscar%') OR (CONCAT(nombre, ' ', apellido) LIKE '%$buscar%')");
            ?>

                
                
                <?php
                        // mysqli_fetch_row($consulta) -> array indexado
                        // mysqli_fetch_assoc($consulta) -> array asociativo
                        // mysqli_fetch_array($consulta) -> array con ambos índices

                    while($resultados=mysqli_fetch_array($consulta)) {
                ?>
                <p>
                <?php	
                        
                        echo $resultados['bio']. " ";
                        
                ?>
                </p>
                
                <?php
                    }

                    mysqli_free_result($consulta);
                    mysqli_close($conexion);

                ?>



<div class="row justify-content-center margen-preview">
              <div class="col-md-2">
                <div class="card carousel_artistas">
                  <a href="waltergropius.html">
                    <img src="imagenes/waltergropius.png" class="card-img-top img-fluid hover-zoom alineacionfotos">
                  </a>
                </div>
              </div>
              <div class="col-md-2">
                <div class="card carousel_artistas">
                  <a href="hannesmeyer.html">
                    <img src="imagenes/hannesmeyer.png" class="card-img-top img-fluid hover-zoom alineacionfotos">
                  </a>
                </div>
              </div>
              <div class="col-md-2">
                <div class="card carousel_artistas">
                  <a href="miesvanderrohe.html">
                    <img src="imagenes/miesvanderrohe.png" class="card-img-top img-fluid hover-zoom alineacionfotos">
                  </a>
                </div>
              </div>
              <div class="col-md-2">
                <div class="card carousel_artistas">
                  <a href="wassilykandinsky.html" class="wassilya">
                    <img src="imagenes/wassilykandinsky.png" class="card-img-top img-fluid hover-zoom alineacionfotos">
                  </a>
                </div>
              </div>
              <div class="col-md-2 ">
                <div class="card carousel_artistas">
                  <a href="paulklee.html">
                    <img src="imagenes/paulklee.png" class="card-img-top img-fluid hover-zoom alineacionfotos">
                  </a>
                </div>
              </div>
              <div class="col-md-2">
                <div class="card carousel_artistas">
                  <a href="lillyreich.html">
                    <img src="imagenes/lillyreich.png" class="card-img-top img-fluid hover-zoom alineacionfotos">
                  </a>
                </div>
              </div>
            


        
        </div>
        </div>
    
    </div>
    
    <footer class="footer background_footer2">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <span class="float-left">La Bauhaus</span>
          </div>
          <div class="col-sm-6 right_footer">
          <span class='float-right'>Abril Beron</span>
          </div>
        </div>
      </div>
    </footer>
    
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>

<?php session_start();?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>La Bauhaus - Exclusivo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
</head>

<body>
 
        
    <!-- Contenido principal -->

    <?php

        if(isset($_SESSION['nombre']) and isset($_SESSION['apellido']) ){
          
        echo "<div class='container-fluid'>

        <div class='row'>
        
          <!-- Banner -->
          <div class='col-md-12' id='banner'>
            <img src='imagenes/banner5.png' class='bannerhome' alt='banner'>
         
          </div>
          
        </div>
        
        <div class='row'>
        
          <!-- Menú vertical -->
          <div class='col-md-3 ubinav'>
            <nav class='navbar navbar-expand-lg navbar-light'>
                <div class='container-fluid'>
                  <div class='collapse navbar-collapse' id='navbarNav'>
                    <ul class='navbar-nav flex-column'>
                      <li class='nav-item'>
                        <a class='nav-link active' href='form_login.php'>
                          <i class='fas fa-user fa-lg'></i>
                        </a>
                      </li>
                      <li class='nav-item'>
                        <a class='nav-link' aria-current='page' href='index.html'>INICIO</a>
                      </li>
                      <li class='nav-item'>
                        <a class='nav-link' href='acercade.html'>ACERCA DE</a>
                      </li>
                      <li class='nav-item'>
                        <a class='nav-link' href='artistas.html'>ARTISTAS</a>
                      </li>
                      <li class='nav-item'>
                        <a class='nav-link' href='obras.html'>OBRAS</a>
                      </li>
                      <li class='nav-item'>
                        <a class='nav-link' href='contacto.html'>CONTACTO</a>
                      </li>
                  
                    </ul>
                  </div>
                </div>
              </nav>
          </div>
        </div>
      </div>

        <div class='col-12 col-md-6 align-self-center background_hola'><div class='col-10 text-center_diseñoind'><h2 class='previewbauhaus2'>Hola!"." ".$_SESSION['nombre']." ".$_SESSION['apellido']." "."
        </h2><p class='previewbauhaus2'>Ya puedes acceder a nuestro contenido exclusivo acerca de la Bauhaus <br> ¡Que lo disfrutes!</p><br><a href='salir.php' class='cerrar_sesion'><i class='fas fa-sign-out-alt fa-lg'></i></a></div></div>
        <div class='row justify-content-center'>
        <div class='col-12 titulo_principios'>
            <div class='col-10 text-center_datos'>
              <img src='imagenes/datos-20.png' class='foto-datos' alt='Imagen'>
            </div>
        </div>
      </div>
      
            <div class='row justify-content-center background_exclusivo'>
    
              <div class='col-12 col-md-6'>
                  <div class='img-container3'>
                      <h1 class='numero'>1</h1> 
                  </div>
              </div>
          
              <div class='col-12 col-md-6 align-self-center background5'>
                  <div class='col-10 text-center_diseñoind'>
                    <p class='previewbauhaus2'>La palabra Bauhaus da una pista sobre su misión. Bauhaus viene del alemán y se traduce como <strong class='font-weight-bold'>“casa de construcción”</strong>.</p>
                  </div>
              </div>
  
            </div>
  
          <div class='row justify-content-center background_exclusivo'>
    
            <div class='col-12 col-md-6 align-self-center background6'>
              <div class='col-10 text-center2 text-center_diseñoind'>
                <p class='previewbauhaus2'>En la escuela se vivía una extraña vibración. Todo el mundo estaba creando entusiasmado, sin límites ni prejuicios. Los arquitectos tejían, los pintores encuadernaban…. todos aprendían.
                  Y también festejaban. Si por algo se caracterizaba la escuela era por sus <strong class='font-weight-bold'>legendarias fiestas</strong>, generalmente temáticas (fiesta blanca, fiesta del metal, fiesta de los cometas) y casi siempre de disfraces, donde, como es de suponer, corría el <strong class='font-weight-bold'>alcohol</strong> y otras sustancias. La Bauhaus también trabajaba las fiestas como una obra de arte.</p>
              </div>
            </div>
      
            <div class='col-12 col-md-6'>
              <div class='img-container4'>
                <h1 class='numero2'>2</h1> 
              </div> 
            </div>
  
          </div>
  
          <div class='row justify-content-center background_exclusivo'>
    
            <div class='col-12 col-md-6'>
                <div class='img-container3'>
                    <h1 class='numero3'>3</h1> 
                </div>
            </div>
        
            <div class='col-12 col-md-6 align-self-center background7'>
                <div class='col-10 text-center_diseñoind'>
                  <p class='previewbauhaus2'>Originalmente la Bauhaus no tenía un <strong class='font-weight-bold'>programa de arquitectura</strong>. Aunque la escuela se fundó en 1919, el departamento de arquitectura no comenzó hasta ocho años después, en 1927.</p>
                </div>
            </div>
            
          </div>
  
        <div class='row justify-content-center background_exclusivo'>
  
          <div class='col-12 col-md-6 align-self-center background5'>
            <div class='col-10 text-center2 text-center_diseñoind'>
              <p class='previewbauhaus2'>Se puede <strong class='font-weight-bold'>pasar la noche</strong> en uno de sus edificios. Vos mismo podés experimentar las cualidades de la Bauhaus pasando la noche en un edificio llamado <strong class='font-weight-bold'>Prellerhaus</strong>. La experiencia se describe como increíblemente auténtica y puede costar desde 40 euros por noche en una habitación individual.</p>
            </div>
          </div>
    
          <div class='col-12 col-md-6'>
            <div class='img-container4'>
              <h1 class='numero'>4</h1> 
            </div> 
          </div>
  
        </div>
  
  
        <div class='row justify-content-center background_exclusivo'>
    
          <div class='col-12 col-md-6'>
              <div class='img-container3'>
                  <h1 class='numero2'>5</h1> 
              </div>
          </div>
      
          <div class='col-12 col-md-6 align-self-center background6'>
              <div class='col-10 text-center_diseñoind'>
                <p class='previewbauhaus2'> La Bauhaus Dessau fue declarada <strong class='font-weight-bold'>Patrimonio de la Humanidad</strong> por la UNESCO
                </p>
              </div>
          </div>
          
        </div>
  
      <div class='row justify-content-center background_exclusivo'>
  
        <div class='col-12 col-md-6 align-self-center background7'>
          <div class='col-10 text-center2 text-center_diseñoind'>
            <p class='previewbauhaus2'>Con Adolf Hitler en el poder, decenas de arquitectos judíos seguidores del estilo Bauhaus emigraron a Israel. En Tel Aviv hay cerca de <strong class='font-weight-bold'>4.000 edificios</strong> de estilo Bauhaus.</p>
          </div>
        </div>
  
        <div class='col-12 col-md-6'>
          <div class='img-container4'>
            <h1 class='numero3'>6</h1> 
          </div> 
        </div>
  
      </div>
  
      <div class='row justify-content-center background_exclusivo'>
    
        <div class='col-12 col-md-6'>
            <div class='img-container3'>
                <h1 class='numero'>7</h1> 
            </div>
        </div>
    
        <div class='col-12 col-md-6 align-self-center background5'>
            <div class='col-10 text-center_diseñoind'>
              <p class='previewbauhaus2'>Aunque la Bauhaus se ha convertido en sinónimo del modernismo y la funcionalidad, en sus primeros años la escuela también abrazó el <strong class='font-weight-bold'>arte expresionista</strong>. Los primeros profesores de la escuela, incluyendo al pintor <strong class='font-weight-bold'>Lyonel Feininger</strong>, enseñaban técnicas más tradicionales como el dibujo y la pintura.</p>
            </div>
        </div>
  
      </div>
  
    <div class='row justify-content-center background_exclusivo'>
  
      <div class='col-12 col-md-6 align-self-center background6'>
        <div class='col-10 text-center2 text-center_diseñoind'>
          <p class='previewbauhaus2'>Durante sus años en la Bauhaus, el artista y diseñador <strong class='font-weight-bold'>László Moholy-Nagy</strong> se interesó en la fotografía, y desarrolló nuevas técnicas para crear imágenes abstractas utilizando luz y sombra. Sus experimentos con la fotografía influenciaron en gran medida el <strong class='font-weight-bold'>arte cinético</strong> y la <strong class='font-weight-bold'>fotografía abstracta</strong>.</p>
        </div>
      </div>
  
      <div class='col-12 col-md-6'>
        <div class='img-container4'>
          <h1 class='numero2'>8</h1> 
        </div> 
      </div>
  
    </div>
  
  
    <div class='row justify-content-center margen_galeria'>
      <div class='col-8'>
  
        <div class='container'>
              <div class='row'>
                    <div class='col-md-4 image-container'>
                      <img src='imagenes/fiesta1.jpeg' alt='imagen1' class='img-fluid rounded'>
                      <div class='text-overlay2'>
                        <h2>Fiestas en la Bauhaus</h2>
                        
                      </div>
                    </div>
  
                    <div class='col-md-4 image-container'>
                      <img src='imagenes/maestrosdelabauhaus.jpg' alt='imagen1' class='img-fluid rounded'>
                      <div class='text-overlay2'>
                        <h2>Algunos maestros de la Bauhaus en el taller de Paul Klee en Weimar, 1925:</h2>
                        <p> De izquierda a derecha, Lyonel Feininger, Vassily Kandinsky, Oskar Schlemmer, Georg Muche y Paul Klee.
                        </p>
                      </div>
                    </div>
  
                    <div class='col-md-4 image-container'>
                      <img src='imagenes/Bauhaus-logo (1).jpg' alt='imagen1' class='img-fluid rounded'>
                      <div class='text-overlay2'>
                        <h2>Logo de la Bauhaus</h2>
                        <p>El logotipo de la Bauhaus, diseñado en 1922 por Oskar Schlemmer</p>
                      </div>
                    </div>
  
  
                    <div class='col-md-4 image-container'>
                      <img src='imagenes/profbauhaus.jpg' alt='imagen1' class='img-fluid rounded'>
                      <div class='text-overlay2'>
                        <h2>Profesores de la Bauhaus, 
                          <br> en el medio Gropius</h2>
                        
                      </div>
                    </div>
  
                    <div class='col-md-4 image-container'>
                      <img src='imagenes/Paul-Klee-Cuadernos-Clase-01.jpg' alt='imagen1' class='img-fluid rounded'>
                      <div class='text-overlay2'>
                        <h2>Cuadernos de Paul Klee</h2>
                        <p>Casi 4000 páginas de los cuadernos que Paul Klee utilizó para sus clases en la Bauhaus durante la década de los 20’s, con los textos en alemán de puño y letra del artista, incluyendo sus reflexiones e ilustraciones sobre las mecánicas del arte y el color.</p>
                      </div>
                    </div>
  
  
                    <div class='col-md-4 image-container'>
                      <img src='imagenes/bauhaus-dessau-1925-1926-by-walter-gropius-1024x760.jpg' alt='imagen1' class='img-fluid rounded'>
                      <div class='text-overlay2'>
                        <h2>Edificio Dessau</h2>
                        <p>Estado en el que quedó el edificio de la Bauhaus, bandalizado luego de su cierre por el régimen nazi en 1933. </p>
                      </div>
                    </div>
  
                    <div class='col-md-4 image-container'>
                      <img src='imagenes/diseñobauahus.jpg' alt='imagen1' class='img-fluid rounded'>
                      <div class='text-overlay2'>
                        <h2>Bauhaus Weimar</h2>
                        <p>Bauhaus Weimar diseñada por Henry van de Velde vs Bauhaus Dessau diseñada por Walter Gropius</p>
                      </div>
                    </div>
  
                    <div class='col-md-4 image-container'>
                      <img src='imagenes/mujeres.jpg' alt='imagen1' class='img-fluid rounded'>
                      <div class='text-overlay2'>
                        <h2>Mujeres de la Bauhaus</h2>
                        <p>Algunas de ellas fueron: Anni Albers, Lotte Beese, Wera Meyer-Waldeck, Alma Siedhoff-Buscher y Gunta Stölzl </p>
                      </div>
                    </div>
  
  
                    <div class='col-md-4 image-container'>
                      <img src='imagenes/Marni_Munich-store_2.jpg' alt='imagen1' class='img-fluid rounded'>
                      <div class='text-overlay2'>
                        <h2>Una flagship store al estilo Bauhaus</h2>
                        <p>Retomó elementos del estilo de la Bauhaus: sus motivos geométricos se reflejan en los pisos y algunos elementos de decoración, como los aparadores centrales.</p>
                      </div>
                    </div>
                    
  
              </div>
        </div>
      </div>
    </div>
  
  
  
      
      <footer class='footer background_footer2'>
        <div class='container'>
          <div class='row'>
            <div class='col-sm-6'>
              <span class='float-left'>La Bauhaus</span>
            </div>
            <div class='col-sm-6 right_footer'>
            <span class='float-right'>Abril Beron</span>
            </div>
          </div>
        </div>
      </footer>";
        

          
        }else{
          echo "
          <div class='container-fluid'>

        <div class='row'>
        
          <!-- Banner -->
          <div class='col-md-12' id='banner'>
            <img src='imagenes/banner5.png' class='bannerhome' alt='banner'>
         
          </div>
          
        </div>
        
        <div class='row'>
        
          <!-- Menú vertical -->
          <div class='col-md-3 ubinav'>
            <nav class='navbar navbar-expand-lg navbar-light'>
                <div class='container-fluid'>
                  <div class='collapse navbar-collapse' id='navbarNav'>
                    <ul class='navbar-nav flex-column'>
                      <li class='nav-item'>
                        <a class='nav-link active' href='form_login.php'>
                          <i class='fas fa-user fa-lg'></i>
                        </a>
                      </li>
                      <li class='nav-item'>
                        <a class='nav-link' aria-current='page' href='index.html'>INICIO</a>
                      </li>
                      <li class='nav-item'>
                        <a class='nav-link' href='acercade.html'>ACERCA DE</a>
                      </li>
                      <li class='nav-item'>
                        <a class='nav-link' href='artistas.html'>ARTISTAS</a>
                      </li>
                      <li class='nav-item'>
                        <a class='nav-link' href='obras.html'>OBRAS</a>
                      </li>
                      <li class='nav-item'>
                        <a class='nav-link' href='contacto.html'>CONTACTO</a>
                      </li>
                  
                    </ul>
                  </div>
                </div>
              </nav>
          </div>
        </div>
      </div>
      
          <div class='col-12 col-md-6 align-self-center background_hola'><div class='col-10 text-center_diseñoind2'><h2 class='previewbauhaus2'>Algo anduvo mal</h2>
          <a href='form_login.php' class='registrate2'>Vuelve a intentarlo</a> o registrate acá abajo.</div></div>
          <br>
          <div class='row justify-content-center margen_diseño background_registro'>
  
          <div class='col-12 col-md-6'>
              <div class='img-container2'>
                  <img src='imagenes/registratedef.png' alt='Imagen' class='img-fluid3'>
              </div>
          </div>

          <div class='col-12 col-md-6 align-self-center background_login'>

              <div class='col-8 form_login'>
              
                  <form action='registro.php' method='post' class='form_login2'>
                      <label class='labellogin'>Nombre
                        <input type='text' name='nombre' required />
                      </label><br />
                      <label class='labellogin'>Apellido
                        <input type='text' name='apellido' required />
                      </label><br />
                      <label class='labellogin'>Email
                        <input type='email' name='mail' required />
                      </label><br />
                      <label class='labellogin'>Nombre de usuario
                        <input name='usuario' type='text' maxlength='12' />
                      </label><br />
                      <label class='labellogin'>Contraseña
                        <input type='password' name='clave' maxlength='12' />
                      </label><br />
                      
                      <button type='submit' value='Registrarse' class='btn btn-primary3 shadow-lg boton_login'>Registrarse</button>	
                  </form>

              </div>

          </div>

      </div>


  

  
    <footer class='footer background_footer2'>
    <div class='container'>
      <div class='row'>
        <div class='col-sm-6'>
          <span class='float-left'>La Bauhaus</span>
        </div>
        <div class='col-sm-6 right_footer'>
          <span class='float-right'>Abril Beron</span>
        </div>
      </div>
    </div>
  </footer>";
         
    }
    ?>
    
   
    
    














    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>

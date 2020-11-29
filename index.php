<?php
  $sevidor="localhost";
  $usuario="root";
  $clave="";
  $baseDeDatos="mipagina";

  $enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

  if(!$enlace){
    echo "Error en la conexión del servidor";
  }





?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GiubiAleWeb</title>
  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="stylesheet" href="stylesdb.css">
  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="styles.css">
</head>

<body>




  <div class="menu-btn">
    <i class="fas fa-bars fa-2x"></i>
  </div>

  <div class="container">
    <!-- Navigation -->
    <nav class="nav-main">
      <!-- Brand -->
      <img src="img/icono1.jpg" alt="Dla logo" class="nav-brand">
      <!-- Left Nav -->
      <ul class="nav-menu">
       
        <li>
          <a href="paginas/datosaborales.html">Datos laborales</a>
        </li>
        <li>
          <a href="paginas/portafolioweb.html">Portafolio Web </a>
        </li>
        <li>
          <a href="https://github.com/delamente">GitHub</a>
        </li>
        <li>
          <a href="https://draft.blogger.com/blog/posts/2784076167116050900?hl=es&tab=jj">Blog personal</a>
        </li>
        <li>
          <a href="paginas/datospersonales.html">Datos personales</a>
        </li>
        <li>
          <a href="paginas/formacionacademica.html">Formación académica</a>
        </li>
        <br>
    
        <li>
         
        </li>
      </ul>

      <!-- Right Nav -->
      <ul class="nav-menu-right">
        <li>
          <a href="#">
            <i class="fas fa-search"></i>
          </a>
        </li>
      </ul>
    </nav>
    <hr>

    <!-- SHOWCASE -->
    <header class="showcase">
      <h2>  Alexis Amir Giubi |  Desarrollador Web</h2>
      <br>
      <p> La pasión de crear, aplicado al desarrollo Web,  como la poesía, exactamente perfecto como la estructura de lo cósmico, buscando la perfección en el código</p>
      <a href="#" class="btn">
        Leer mas <i class="fas fa-chevron-right"></i>
      </a>
    </header>

    <!-- NEWS CARDS -->
    <div class="news-cards">
      <div>
        <img src="img/desarrollo web.jpg" alt="" />
        <h3>Servicio de desarrollo de sitios web, internet o intranet </h3>
        <p> En la creación y adquisición de sitios web se hace uso de las tecnologías de software del lado del servidor y del cliente que involucran una combinación de procesos de base de datos con el uso de un navegador web a fin de realizar determinadas tareas o mostrar información sobre una persona, marca o empresa</p>
        
      </div>
      <div>
       <img src="img/servisweb.jpg" alt="" />
        <h3> Servicios de Mantenimientos y testeo de sitios web</h3>
        <p> Sometemos a las paginas web a un riguroso analisis de vulnerabilidades de seguridad, como de perdida de la információn sensible, de la misma manera que hacemos el servicio de mantenimiento para que el sitio web este libre de bugg de programación o seguridad
        </p>
        
      </div>
      <div>
        <img src="img/image-three.jpg" alt="" />
        <h3>Desarrollo de aplicanciones para Android</h3>
        <p> El desarrollo aplicaciones móviles a medida para tu empresa o agencia. Somos expertos en Apps. móviles para el sistema operativo Android, nos adaptamos a los requerimientos de nuestros clientes, y buscamos otorgar la tranquilidad y la seguridad para sus negocio, como transacciones bancarias
      
        </p>
        
      </div>
      <div>
        <img src="img/libre información.jpg" alt="" />
        <h3>Desarrollo de Aplicaciones Web y Servicios de publicidad </h3>
        <p>El desarrollo de aplicaciones web te permite tener una app que será accesible desde cualquier navegador en cualquier dispositivo. Además, al contrario de lo que sucede con las aplicaciones nativas, no requieren descarga.
          
        </p>
      </div>
    </div>

    <!-- Card Banner 1-->
    <section class="cards-banner-one">
      <div class="content">
        <h2>¿Qué relación hay entre la música y la programación informática?</h2>
        <!-- lorem 20 -->
        <p>Déjame conocerte personalmente y te explicaré mi punto de vista, y te darás cuenta cuál es la respuesta a la pregunta formulada, veremos si en verdad las matemáticas no tienen almas o las almas tienen matemáticas?.  </p>
        <a href="paginas/musicaprogramacion.html" class="btn"> Leer mas  <i class="fas fa-chevron-right"></i></a>
      </div>
    </section>
  

 <!-- third card -->
    <section class="cards-banner-two">
      <div class="content">
      
        <!-- lorem 30 -->
        <p> Las personas sin conocimientos de su pasado, su origen y su cultura, son como un árbol sin raíces. Ninguna historia puede ser contada. Ninguna historia que valga la pena ser contada. Más el verdadero  lenguaje no nació todavía, La cultura es el ensanchamiento de la mente y el espíritu, La cultura de una nación reside en los corazones y en el alma de su gente. Solo el hombre culto es libre, No es necesario quemar libros para destruir una cultura. Simplemente haz que la gente deje de leerlos. La cultura es el despertar del hombre </p>
        
      </div>
    </section>

    
   

    <!-- Follow -->
    <section class="social">
      <p>DLA GIUBI DEVELOPER WEB</p>
      <div class="links">
        <a href="https://www.facebook.com/alexis.giubi.7?ref=bookmarks">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://twitter.com/Alexis_giubi">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="https://www.linkedin.com/in/alexis-amir-giubi-63900a198/">
          <i class="fab fa-linkedin"></i>
        </a>
        
      </div>
    </section>
  </div>

 
  <!-- Footer -->
 <footer class="footer">
  <div class="skew-arriba"></div>
 <div class="deg-footer"></div>

 <div class="ejeZfooter">
 <div class="footer-content">
  <div class="footer-title">
    <h2>Formulario de Contacto</h2>
    <hr>
  </div>

  <div class="formulario-content">
    
   <form method="POST">
    <h1>¡Suscribete!</h1>
    <input type="text" name="nombre" placeholder="Nombre completo">
    <input type="email" name="correo" placeholder="Email">
    <input type="text" name="mensaje" placeholder="mensaje">
    <input type="submit" name="resgistrarse" placeholder="registrarse">
  </form>
      <?php 
      include("registrar.php");
      ?>
  </div>

  <div class="footer-text">
    <p>&copy; Portafolio Alexis Amir Giubi 2020 | Todos los derechos reservados.</p>
  </div>
 
 
  </footer>

  <!-- Scroll Reveal -->
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="main.js"></script>
</body>

</html>
<?php 
      if(isset($_POST['resgistrarse'])) {
        $nombre =$_POST['nombre'];
        $correo=$_POST['correo'];
        $mensaje=$_POST['mensaje'];
        $id= rand(1,99);


        $insertarDatos = "INSERT INTO datos VALUES('$nombre',
                                                    '$correo',
                                                    '$mensaje',
                                                    '$id')" ;

        $ejecutarInsertar= mysqli_query($enlace,$insertarDatos)
        if(!$ejecutarInsertar){
          echo"Error en la línea de sql"
        }
    
    }
      
      
      
      ?>
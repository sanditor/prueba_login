<?php
session_start();
include 'lib/class_mysql.php';
include 'lib/config.php';
header('Content-Type: text/html; charset=UTF-8');  
?>
<!DOCTYPE html>
<html>
    <head>
        <title>SoporteSystem</title>
        <?php include "includes/links.php"; ?>        
    </head>
    <body>  
        <?php include "includes/navbar.php"; ?>

        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="page-header">
                <h1 class="animated lightSpeedIn">SoporteSystem <small>Colombia</small></h1>
                <span class="label label-danger">SoporteSystem S.A </span>
              </div>
            </div>
          </div>
	      </div>        
         
         <?php if (isset($_GET['view']) && $_GET['view'] == "registro")  {	

       	 include "logueo/registro.php"; 
       	
       	} else if (isset($_GET['view']) && $_GET['view'] == "users") { 

     			include "admin/users-view.php";     		

      	} else if (isset($_GET['view']) && $_GET['view'] == "users-edit") { 

      		include "admin/users-edit.php";

      	} else {

      	?>	

      		<div class="container">
				    <div class="row">
				        <div class="col-xs-12 col-md-6 thumbnail">
				            <h3 class="text-center">LinuxMint</h3>
				            <img  src="img/logoMint.png" class="img-responsive logos_GnuLinux" alt="Image">
				             <p>
				                 Linux Mint es una distribución del sistema operativo GNU/Linux, basado en la distribución 
				                 Ubuntu (que a su vez está basada en Debian). A partir del 7 de septiembre de 2010 también 
				                 está disponible una edición basada en Debian.<br>
				                 Linux Mint mantiene un inventario actualizado, un sistema operativo estable para el usuario medio, 
				                 con un fuerte énfasis en la usabilidad y facilidad de instalación. Es reconocido por ser fácil de usar, 
				                 especialmente para los usuarios sin experiencia previa en Linux.<br>
				                 Linux Mint se compone de muchos paquetes de software, los cuales se distribuyen la mayor parte bajo una 
				                 licencia de software libre. La principal licencia utilizada es la GNU General Public License (GNU GPL) que, 
				                 junto con la GNU Lesser General Public License (GNU LGPL), declara explícitamente que los usuarios tienen libertad 
				                 para ejecutar, copiar, distribuir, estudiar, cambiar, desarrollar y mejorar el software.
				             </p>
				             <p class="text-center">
				                <a href="#" class="btn btn-primary btn-sm" role="button">Leer más</a>
				             </p>
				        </div>
				        <div class="col-xs-12 col-md-6 thumbnail">
				          <h3 class="text-center">Fedora</h3>
				            <img src="img/logoFedora.png" class="img-responsive logos_GnuLinux" alt="Image">
				            <p>
				             Fedora es una distribución Linux para propósitos generales basada en RPM, que se caracteriza 
				             por ser un sistema estable, la cual es mantenida gracias a una comunidad internacional de ingenieros, 
				             diseñadores gráficos y usuarios que informan de fallos y prueban nuevas tecnologías. Cuenta con el respaldo 
				             y la promoción de Red Hat.<br>
				             El proyecto no busca sólo incluir software libre y de código abierto, sino ser el líder en ese ámbito tecnológico.
				             Algo que hay que destacar es que los desarrolladores de Fedora prefieren hacer cambios en las fuentes originales 
				             en lugar de aplicar los parches específicos en su distribución, de esta forma se asegura que las actualizaciones 
				             estén disponibles para todas las variantes de Linux. Max Spevack en una entrevista afirmó que: "Hablar de Fedora es hablar 
				             del rápido progreso del software libre y de código abierto." Durante sus primeras 6 versiones se llamó Fedora Core, debido
				             a que solo incluía los paquetes más importantes del sistema operativo.
				            </p>
				            <center><a href="#" class="btn btn-primary btn-sm" role="button">Leer más</a></center>
				        </div>
				        <div class="col-xs-12 col-md-6 thumbnail">
				            <h3 class="text-center">Ubuntu</h3>
				            <img src="img/logoUbuntu.png" class="img-responsive logos_GnuLinux" alt="Image">
				            <p>
				             Ubuntu es un sistema operativo basado en Linux y que se distribuye como software libre, 
				             el cual incluye su propio entorno de escritorio denominado Unity. Su nombre proviene de 
				             la ética homónima, en la que se habla de la existencia de uno mismo como cooperación de 
				             los demás.<br>
				             Está orientado al usuario novel y promedio, con un fuerte enfoque en la facilidad de uso 
				             y en mejorar la experiencia de usuario. Está compuesto de múltiple software normalmente distribuido 
				             bajo una licencia libre o de código abierto. Estadísticas web sugieren que la cuota de mercado de 
				             Ubuntu dentro de las distribuciones Linux es, aproximadamente, del 49%, y con una tendencia a aumentar 
				             como servidor web. Y un importante incremento activo de 20 millones de usuarios para fines del 2011.
				            </p>
				            <center><a href="#" class="btn btn-primary btn-sm" role="button">Leer más</a></center>
				        </div>
				        <div class="col-xs-12 col-md-6 thumbnail">
				            <h3 class="text-center">Debian</h3>
				            <img src="img/logoDebian.png" class="img-responsive logos_GnuLinux" alt="Image">
				            <p>
				                Debian GNU/Linux es un sistema operativo libre, desarrollado por más de mil voluntarios 
				                alrededor del mundo, que colaboran a través de Internet.
				                La dedicación de Debian al software libre, su base de voluntarios, su naturaleza no comercial
				                y su modelo de desarrollo abierto la distingue de otras distribuciones del sistema operativo 
				                GNU. Todos estos aspectos y más se recogen en el llamado Contrato Social de Debian.
				            </p>
				            <p>
				                Nació en el año 1993, de la mano del proyecto Debian, con la idea de crear un sistema GNU usando
				                Linux como núcleo ya que el proyecto Debian, organización responsable de su mantenimiento en la 
				                actualidad, también desarrolla sistemas GNU basados en otros núcleos (Debian GNU/Hurd, Debian GNU/NetBSD y Debian GNU/kFreeBSD).
				            </p>
				            <center><a href="#" class="btn btn-primary btn-sm" role="button">Leer más</a></center>
				        </div>
				    </div>
				</div>

      	<?php } ?>

      <?php include "includes/footer.php"; ?>
    </body>
</html>
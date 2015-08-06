<?php 

require '../../conexion/database.php';
require '../../models/Service.php';

$oService = new Service();

?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="../../public/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../public/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="blog-masthead">
        <div class="container">
            <nav class="blog-nav">
                <a href="../../index.php" class="blog-nav-item">Lista de usuarios</a>

                <a href="../users/create.php" class="blog-nav-item">Crear usuario</a>

                <a href="../views/create.php" class="blog-nav-item">Nueva visita</a>

                <a href="../services/report.php" class="blog-nav-item">Reporte de servicios</a>

                <a href="../views/report.php" class="blog-nav-item">Meses con mas trabajo</a>

                <a href="../customer/list.php" class="blog-nav-item">Catalogo de pacientes</a>

                <a href="list.php" class="blog-nav-item active">Catalogo de servicios</a>        
            </nav>
        </div>
    </div>     
      

    <div class="container">
          <h2 class="blog-post-title">Catalogo de servicios</h2>
          
          <table class="table table-striped">
              <tr>
                <th>servicio</th>
              </tr>
              <?php foreach($oService->dropdown() as $serv): ?>
              <tr>
                  <td><?php echo $serv['name']; ?></td>
              </tr>
              <?php endforeach; ?> 
          </table>         
          
    </div>
      
      
  </body>  
  
</html>




<!--<h1>Services </h1>

<ul>
    <?php foreach($oService->dropdown() as $serv): ?>

    <li><?php echo $serv['name']; ?></li>

    <?php endforeach; ?>    
</ul>-->


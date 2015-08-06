
<?php 

require '../../conexion/database.php';
require '../../models/View.php';

$view = new View();

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

                <a href="report.php" class="blog-nav-item active">Meses con mas trabajo</a>

                <a href="../customer/list.php" class="blog-nav-item">Catalogo de pacientes</a>

                <a href="../services/list.php" class="blog-nav-item">Catalogo de servicios</a>        
            </nav>
        </div>
    </div>     
      

    <div class="container">
          <h2 class="blog-post-title">Meses con mas trabajo</h2>
          
          <table class="table table-striped">
              <tr>
                
                <th>Fecha</th>
                <th>Total</th>
              </tr>
             <?php foreach($view->getMonths() as $v): ?>
              <tr>
                  <td><?php echo $v['date']; ?></td>
                  <td><span class="badge"><?php echo $v['total']; ?></span></td>
              </tr>
              <?php endforeach; ?> 
          </table>          
          
    </div>
      
      
  </body>  
  
</html>





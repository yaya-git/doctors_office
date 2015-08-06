<?php 

require '../../conexion/database.php';
require '../../models/User.php';
require '../../models/Customer.php';

$oCustomer = new Customer();

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

                <a href="list.php" class="blog-nav-item active">Catalogo de pacientes</a>

                <a href="../services/list.php" class="blog-nav-item">Catalogo de servicios</a>        
            </nav>
        </div>
    </div>     
      

    <div class="container">
          <h2 class="blog-post-title">Catalogo de pacientes</h2>
          
        <div class="list-group">
            
          <?php foreach($oCustomer->all() as $customer): ?> 
            <?php $user = User::getById($customer['user_id']); ?>
          <div class="list-group-item">
            <div class="media">
              <div class="media-left media-middle">
                <a href="#">
                    <img src="<?php echo '../../public/images/'. $customer['image']; ?>" alt="avatar" class="media-object" >
                </a>
              </div>
              <div class="media-body">
                <h4 class="media-heading"><?php echo $user['first_name'].' '.$user['last_name']; ?></h4>
                <p><span class="glyphicon glyphicon-map-marker"> <?php echo $customer['address']; ?></span></p>
                <p><span class="glyphicon glyphicon  glyphicon glyphicon-envelope"> <?php echo $customer['phone']; ?></span></p>
                <p><span class="glyphicon  glyphicon glyphicon-calendar"> <?php echo $customer['birthdate']; ?></span></p>
                <p><span class="glyphicon glyphicon-map-marker"> <?php echo $user['email']; ?></span></p>
              </div>
            </div>
          </div>
          <?php endforeach; ?>   
            
            
        </div>         
          
    </div>
      
      
  </body>  
  
</html>

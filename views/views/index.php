
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

                <a href="index.php" class="blog-nav-item active">Crear usuario</a>

                <a href="../views/index.php" class="blog-nav-item">Nueva visita</a>

                <a href="../services/report.php" class="blog-nav-item">Reporte de servicios</a>

                <a href="../views/report.php" class="blog-nav-item">Meses con mas trabajo</a>

                <a href="../customer/list.php" class="blog-nav-item">Catalogo de pacientes</a>

                <a href="../services/list.php" class="blog-nav-item">Catalogo de servicios</a>        
            </nav>
        </div>
    </div>     
      

      <div class="container">
          <h2 class="blog-post-title">Crear Usuario</h2>
          
          
    <form action="../../crud/users/store.php" method="POST" class="form-horizontal">
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" name="name">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Apellidos</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" name="last_name">
        </div>
      </div>    

      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Correo electronico</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Role</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" name="role">
        </div>
      </div>    
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Guardar</button>
        </div>
      </div>
    </form>          
</div>
      
      
  </body>  
  
</html>







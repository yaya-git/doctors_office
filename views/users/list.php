
<?php 

require 'conexion/database.php';
require 'models/User.php';

$oUser = new User();

?>



      <div class="container">
          <h2 class="blog-post-title">Usuario</h2>
          
          <table class="table table-striped">
              <tr>
                <th>Nombre</th>
                <th>Correo</th>
              </tr>
              <?php foreach($oUser->all() as $user): ?>
              <tr>
                  <td><?php echo $user['first_name'].' '.$user['last_name']; ?></td>
                  <td><?php echo $user['email']; ?></td>
              </tr>
              <?php endforeach; ?> 
          </table>
      </div>
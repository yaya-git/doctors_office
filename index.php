
<?php 

require 'conexion/database.php';
require 'models/User.php';

    $oUser = new User();
?>


<h1>Consulting </h1>

<a href="views/users/create.php">Crear usuario</a>

<ul>
    <?php foreach($oUser->all() as $user): ?>

    <li><?php echo $user['first_name'].' '.$user['last_name']; ?></li>

    <?php endforeach; ?>    
</ul>





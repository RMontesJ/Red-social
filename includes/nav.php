<?php 

$id = $_GET['id_user'];

?>

<header>
    <img src="img/logUnimatchIA.jpg" alt="">
    <nav>
        <ul>
            <li><a href="../pages/main.php?id_user=<?php echo $id ?>">Inicio</a></li>
            <li><a href="../pages/post.php?id_user=<?php echo $id ?>">Crear publicación</a></li>
            <li><a href="../pages/profile.php?id_user=<?php echo $id ?>">Mi perfil</a></li>
        </ul>
    </nav>
    <button>Cerrar sesion</button>
</header>
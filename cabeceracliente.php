<?php
session_start();


?>

<header>
            <a class="logo" href="index.php"><img src="img/Csay.png" alt="logo"></a>
            <nav>
                <ul class="nav__links">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="cabecerac.php"> Productos </a></li>
                    <li><a href="pedidos.php"> Mis Pedidos </a></li>
                    <li><a href="ver_carrito.php"> Carrito </a></li>
                    <li><a href="soporte.php">Soporte</a></li>
                  
                </ul>
            </nav>
            <h2> <?php echo "Hola, ". $_SESSION['username']; ?> </h2>
            <a class="cta" href="login.php"> Perfil  </a>
            <a class="cta" href="logout.php"> Cerrar sesión  </a>
            <p class="menu cta">Menu</p>
        </header>
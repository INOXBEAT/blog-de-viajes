<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de Viajes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <div class="menu container">
            <input type="checkbox" id="menu"/>
            <label for="menu">
                <img src="images/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="#" class="logo">Blog de Viajes</a></li>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#Destinos">Destinos</a></li>
                    <li><a href="#Experiencias">Experiencias</a></li>
                    <li><a href="#Contacto">Contacto</a></li>
                </ul>
            </nav>
        </div> 
        <div class="header-content container">
            <div class="header-txt">
                <h1>¡Bienvenidos a nuestro Blog de Viajes!</h1>
                <p>
                    Explora el mundo con nosotros y descubre nuevos destinos, experiencias emocionantes y consejos útiles para tus próximas aventuras.
                </p>
                <a href="#Destinos" class="btn-1">Explorar Destinos</a>
            </div>
            <div class="header-img">
                <img src="images/left.png" alt="">
            </div>
        </div>
    </header>

    <section id="Destinos" class="destinos container">
        <h2>Destinos Populares</h2>
        <div class="destino">
            <img src="images/destino1.png" alt="Destino 1">
            <p>Descripción del destino 1...</p>
        </div>
        <div class="destino">
            <img src="images/destino2.png" alt="Destino 2">
            <p>Descripción del destino 2...</p>
        </div>
        <!-- Agrega más destinos según sea necesario -->
    </section>

    <section id="Experiencias" class="experiencias container">
        <h2>Experiencias de Viaje</h2>
        <div class="experiencia">
            <img src="images/experiencia1.jpeg" alt="Experiencia 1">
            <p>Relato de la experiencia 1...</p>
        </div>
        <div class="experiencia">
            <img src="images/experiencia2.jpeg" alt="Experiencia 2">
            <p>Relato de la experiencia 2...</p>
        </div>
        <!-- Agrega más experiencias según sea necesario -->
    </section>

    <section id="Contacto" class="contacto container">
        <h2>Contacto</h2>
        <p>¿Tienes alguna pregunta o comentario? ¡Contáctanos!</p>
        <form method="post" action="send.php">
            <div class="input-group">
                <input type="text" name="name" placeholder="Nombre y Apellido" required>
                <input type="email" name="email" placeholder="Correo electrónico" required>
                <textarea name="message" placeholder="Mensaje" required></textarea>
                <button type="submit" class="btn">Enviar</button>
            </div>
        </form>
    </section>

    <footer class="footer">
        <div class="footer-content container">
            <div class="link">
                <a href="#" class="logo">Blog de Viajes</a>
            </div>
            <div class="link">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#Destinos">Destinos</a></li>
                    <li><a href="#Experiencias">Experiencias</a></li>
                    <li><a href="#Contacto">Contacto</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de Viajes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="header">
        <div class="menu container">
            <input type="checkbox" id="menu" />
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
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                    Enim repudiandae nulla commodi fuga tempore quam laborum aperiam. 
                    Nulla nobis officia, corporis odio, fugiat harum quod quam hic 
                    sunt asperiores enim.
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
        <br>
        <div class="destino">
            <div class="destino-content">
                <div class="destino-img">
                    <img src="images/destino1.png" alt="Destino 1">
                </div>
                <div class="destino-txt">
                    <h3>Destino 1</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, veniam! Iure vel harum officiis, dolor animi ad omnis fugit sit vitae aspernatur rerum earum perferendis repudiandae eveniet magnam voluptatum nulla.</p>
                </div>
            </div>
        </div>
        <div class="destino">
            <div class="destino-content">
                <div class="destino-img">
                    <img src="images/destino2.png" alt="Destino 2">
                </div>
                <div class="destino-txt">
                    <h3>Destino 2</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt dignissimos odio delectus omnis. Ab molestias accusamus facere illum sapiente rerum quasi eligendi non adipisci. Blanditiis rem earum ullam libero excepturi!</p>
                </div>
            </div>
        </div>
        <!-- Agrega más destinos según sea necesario -->
    </section>


    <section id="Experiencias" class="experiencias container">
        <h2>Experiencias de Viaje</h2>
        <br>
        <div class="experiencia">
            <div class="experiencia-content">
                <div class="experiencia-img">
                    <img src="images/experiencia1.jpeg" alt="Experiencia 1">
                </div>
                <div class="experiencia-txt">
                    <h3>Experiencia 1</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam alias asperiores
                        aliquid. Odio dignissimos quisquam, eaque error dolore repudiandae alias? Totam,
                        quibusdam at. Nesciunt ea ipsam, architecto dolorum corrupti hic!</p>
                </div>
            </div>
        </div>
        <div class="experiencia">
            <div class="experiencia-content">
                <div class="experiencia-img">
                    <img src="images/experiencia2.jpeg" alt="Experiencia 2">
                </div>
                <div class="experiencia-txt">
                    <h3>Experiencia 2</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea sint aut dicta a
                        molestiae veritatis accusamus eaque? Itaque quae a, distinctio temporibus fugiat
                        harum, amet soluta in sunt dolorum eligendi!</p>
                </div>
            </div>
        </div>
        <!-- Agrega más experiencias según sea necesario -->
    </section>

    <br>

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
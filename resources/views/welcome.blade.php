<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carpintería Las Curiosidades de Edy</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Estilo para la barra de navegación */
        nav {
            background-color:rgb(5, 5, 50); /* Azul oscuro para la barra de navegación */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 10px 0;
            z-index: 1000; /* Asegura que la barra esté encima de otros elementos */
        }

        nav ul {
            list-style-type: none;
            display: flex;
            justify-content: center;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            margin: 0 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 1.2em;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        nav ul li a:hover {
            color: #ffcc00; /* Color amarillo al pasar el ratón */
        }

        /* Estilo del cuerpo de la página */
        body {
            background-color:rgb(5, 5, 50); /* Fondo azul oscuro */
            font-family: 'Roboto', sans-serif;
            color: #fff;
            text-align: center;
            margin: 0;
            padding-top: 60px; /* Ajusta el contenido para que no quede debajo de la barra fija */
        }

        /* Estilo del encabezado */
        h1 {
            font-size: 3em; /* Letra más grande */
            margin-top: 50px;
        }

        /* Estilo de la galería de imágenes */
        .image-gallery {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 30px;
        }

        .image-gallery img {
            width: 200px; /* Imágenes más pequeñas */
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        /* Estilo del botón de llamada a la acción */
        .cta-button {
    background-color: transparent; /* Fondo transparente */
    padding: 18px 40px;
    margin-top: 40px;
    font-size: 1.8em; /* Letra grande */
    color: #fff; /* Texto blanco */
    text-decoration: none;
    border: 2px solid #ccc; /* Borde gris claro */
    border-radius: 10px;
    display: inline-block;
    transition: all 0.3s ease;
        }

        .cta-button:hover {
    background-color: #ccc; /* Fondo gris claro al pasar el mouse */
    color: #000; /* Texto oscuro al pasar el mouse */
        }

    </style>
</head> 
<body>

    <!-- Barra de navegación -->
    <nav>
        <ul>
            <li><a href="#empresa">Empresa</a></li>
            <li><a href="#cocinas">Cocinas</a></li>
            <li><a href="#closet">Closet</a></li>
            <li><a href="#otros-muebles">Otros Muebles</a></li>
            <li><a href="#catalogo-colores">Catálogo de Colores</a></li>
            <li><a href="#reseñas">Reseñas</a></li>
            <li><a href="#contacto">Contacto</a></li>
        </ul>
    </nav>

    <!-- Título principal -->
    <h1>Carpintería Las Curiosidades de Edy</h1>

    <!-- Galería de imágenes -->
    <div class="image-gallery">
 
        <img src="images/cocina.jpg" alt="Imagen Cocina">
        <img src="images/puertas.jpg" alt="Imagen Puertas">
        <img src="images/closet.jpg" alt="Imagen Closet">
        <img src="images/isla.jpg" alt="Imagen Isla">
        <img src="images/cociplo.jpg" alt="Imagen Cociplo">
        <img src="images/cloespejo.jpg" alt="Imagen Cloespejo">
        <img src="images/auxiliar.jpg" alt="Imagen Auxiliar">
        <img src="images/closetma.jpg" alt="Imagen Closetma">
    </div>

    <!-- Botón de llamada a la acción -->
    <a href="#" class="cta-button">Trabajos sobre medida de acuerdo a los espacios de tu hogar</a>

    <!-- Secciones de la página -->
    <section id="empresa">
        <h2>Empresa</h2>
        <p>Contenido de la empresa...</p>
    </section>

    <section id="cocinas">
        <h2>Cocinas</h2>
        <p>Contenido de las cocinas...</p>
    </section>

    <section id="closet">
        <h2>Closet</h2>
        <p>Contenido de los closets...</p>
    </section>

    <section id="otros-muebles">
        <h2>Otros Muebles</h2>
        <p>Contenido de otros muebles...</p>
    </section>

    <section id="catalogo-colores">
        <h2>Catálogo de Colores</h2>
        <p>Contenido del catálogo de colores...</p>
    </section>

    <section id="reseñas">
        <h2>Reseñas</h2>
        <p>Contenido de las reseñas...</p>
    </section>

    <section id="contacto">
        <h2>Contacto</h2>
        <p>Contenido de contacto...</p>
    </section>

</body>
</html>

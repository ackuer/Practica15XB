<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programación Web XB</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
            color: #333;
        }

        header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 1em;
        }

        #logo {
            max-width: 30px;
            margin-right: 10px;
        }

        #letrero {
            font-size: 1.5em;
            margin-top: 0.5em;
            display: inline-block;
        }

        nav {
            background-color: #333;
            color: white;
            padding: 1em;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }

        section {
            padding: 1em;
            margin: 1em;
            background-color: white;
            border-radius: 5px;
        }

        .portada-section {
            margin-top: 2em;
        }

        .content {
            display: flex;
            justify-content: space-between;
        }

        #main-content {
            flex: 2;
        }

        #sidebar {
            flex: 1;
            background-color: #ddd;
            padding: 1em;
            border-radius: 5px;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1em;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        /* Nuevos estilos */
        h1, h2, h3 {
            color: #333;
        }

        a:hover {
            color: #4CAF50;
        }

        .unidad {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 1em;
            margin: 0.5em 0;
        }
    </style>
</head>
<body>

    <header>
        <div id="logo">
            <!-- Agrega aquí tu logo -->
            <img src="images/web.png" alt="Logo">
        </div>
        <div id="letrero">
            <h1>Programación Web XB</h1>
        </div>
    </header>

    <nav>
        <a href="#">Inicio</a>
        <a href="#">Acerca de</a>
        <a href="#">Contacto</a>
    </nav>

    <section class="portada-section">
        <h2>Portada</h2>
        <div class="content">
            <div class="unidad">
                <h3>Unidad 1</h3>
                <p>Contenido de la Unidad 1...</p>
            </div>
            <div class="unidad">
                <h3>Unidad 2</h3>
                <p>Contenido de la Unidad 2...</p>
            </div>
            <div class="unidad">
                <h3>Unidad 3</h3>
                <p>Contenido de la Unidad 3...</p>
            </div>
        </div>
    </section>

    <section class="content">
        <div id="main-content">
            <h2>Contenido Principal</h2>
            <p>La programación web es un conjunto de disciplinas y habilidades utilizadas para crear y mantener sitios web y aplicaciones web. Involucra el uso de diversos lenguajes de programación, como HTML, CSS, JavaScript, y el manejo de bases de datos y servidores web. Los programadores web crean la estructura y el diseño de un sitio, implementan funcionalidades interactivas y aseguran la eficiencia y seguridad de la aplicación.</p>
        </div>
        <div id="sidebar">
            <h3>Barra Lateral</h3>
            <p>HTML no es un lenguaje de programación. Es un lenguaje de marcado utilizado para estructurar y presentar el contenido en la web. Aunque es fundamental en el desarrollo web, no posee las capacidades de programación de lenguajes como JavaScript o Python.</p>
        </div>
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Programación Web XB abarca avila erick israel No: 20091018</p>
    </footer>

</body>
</html>

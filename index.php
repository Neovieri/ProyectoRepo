<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>

    <!--FUENTE PARA PONER ICONOS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/> 
    
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <header class="header" id="inicio">

        <div class="menu contenedor"> <!-- CONTIENE EL MENÚ--> 
            
            <a href="#" class="logo"> Logo</a>

            <input type="checkbox" id="menu" />

            <label for="menu">
                <img src="imagenes/menu.png" class="menu-icono" alt="menu">
            </label>

            <nav class="navbar">
                <ul>
                    <li><a href="#inicio">Inicio</a></li>
                    <li><a href="#nosotros">Nosotros</a></li>
                    <li><a href="#servicios">Servicios</a></li>
                    <li><a href="#formulario">Contacto</a></li>
                </ul>

            </nav>

        </div>

        <div class="header-contenido contenedor"> <!-- CONTIENE EL CONTENIDO-->

            <div class="header-txt">
                <h1>Centro Veterinario</h1>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit nam ipsum dicta et animi obcaecati blanditiis est eum illum ex numquam voluptatibus suscipit dolorum, minus laboriosam esse deserunt a facilis.
                </p>

                <a href="#" class="boton1">Información</a>

            </div>

            <div class="header-img">

                <img src="imagenes/principal.jpg" alt="">
                
            </div>

        </div>

    </header>

    <section class="about contenedor" id="nosotros"> 

        <div class="about-img">

            <img src="imagenes/Vete.jpg" alt="">

        </div>

        <div class="about-txt">

            <h2>Nosotros</h2>

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quod inventore iusto facilis. Laudantium eius accusantium a nobis fugit laboriosam beatae! Ad ab, magnam quasi enim reprehenderit ea aliquam error.
            </p>
            <br>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quod inventore iusto facilis. Laudantium eius accusantium a nobis fugit laboriosam beatae! Ad ab, magnam quasi enim reprehenderit ea aliquam error.
            </p>

        </div>

    </section>

    <main class="servicios" id="servicios"> <!--SECCIÓN PRINCIPAL-->

        <h2>Servicios</h2>

        <div class="servicios-contenido contenedor">

            <div class="servicio1">
                <i class="fa-sharp fa-solid fa-hospital-user"></i>
                <h3>Dietética</h3>
            </div>

            <div class="servicio1">
                <i class="fa-sharp fa-solid fa-stethoscope"></i>
                <h3>Revisiones</h3>
            </div>

            <div class="servicio1">
                <i class="fa-solid fa-bed-pulse"></i>
                <h3>Radiología</h3>
            </div>

            <div class="servicio1">
                <i class="fa-solid fa-hospital"></i>
                <h3>Cirugía</h3>
            </div>

        </div>

    </main>

    <section class="formulario contenedor" id="formulario">

        <form method="post" autocomplete="off">

            <h2>Agenda consulta</h2>

            <div class="input-group">

                <div class="input-contenedor">
                    <input type="text" name="name" placeholder="Nombre y Apellidos">

                    <i class="fa-solid fa-user"></i>
                </div>

                <div class="input-contenedor">
                    <input type="tel" name="phone" placeholder="Telefono móvil">

                    <i class="fa-solid fa-phone"></i>
                </div>

                <div class="input-contenedor">
                    <input type="email" name="email" placeholder="Correo">

                    <i class="fa-solid fa-envelope"></i>
                </div>

                <div class="input-contenedor">
                    <textarea name="message" placeholder="Detalles de la consulta"></textarea>
                </div>

                <input type="submit" name="send" class="btn" onclick="myFunction()">

            </div>

        </form>

    </section>

    <div id="whatsapp">
    
        <a href="https://wa.me/1234567890" target="_blank" class="fa-brands fa-whatsapp" style="color: #2bd016;"></a>
        
    </div>

    <footer class="footer">

        <div class="footer-contenido contenedor">

            <div class="link">

                <a href="#" class="logo">logo</a>

            </div>

            <div class="link">

                <ul>
                    <li><a href="#inicio">Inicio</a></li>
                    <li><a href="#nosotros">Nosotros</a></li>
                    <li><a href="#servicios">Servicios</a></li>
                    <li><a href="#formulario">Contacto</a></li>
                </ul>

            </div>

        </div>

    </footer>

    <?php
    
        include("send.php");
    ?>

    <script>

        function myFunction(){ // LIMPIA EL FORMULARIO Y DEVUELVE A LA PAGINA DE INICIO.

            window.location.href="http://localhost/proyecto"

        }

    </script>

</body>

</html>
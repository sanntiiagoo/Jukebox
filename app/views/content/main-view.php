<!-- Pagina principal que se va a ejecutar, es decir, vendría siendo el INDEX -->

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once("./app/views/inc/head.php"); ?>
</head>

<body>
    <?php require_once("./app/views/inc/navbar.php") ?>

    <main>
        <section class="section_ingresar_sala" id="section_ingresar_sala">
            <div class="mensaje_section_ingresar_sala">
                <h1>Pon algo de musica</h1>
            </div>
            <div class="just_p">
                <p>Solo ingresa un apodo, y el codigo de una sala y a disfrutar</p>
            </div>
            <div class="inputs_entrar_sala">
                <form class="FormularioAjax" action="#" method="POST" id="formulario_ingresar_sala">
                    <label for="nickname" id="lbl_nickname">
                        Apodo
                        <input type="text" id="nickname" name="nickname" placeholder="Ingresa tu Apodo">
                    </label>
                    <label for="codigo" id="lbl_codigo">
                        Codigo
                        <input type="text" id="codigo" name="codigo" placeholder="Ingresa el codigo de la sala">
                    </label>
                    <input type="submit" id="boton_ingresar_sala" value="Enviar">
                </form>
            </div>
        </section>
        <section class="tarjeta_como_funciona_jukebox">
            <div class="contenedor_tarjeta_como_funciona_titulo" id="tarjeta_como_funciona_jukebox">

                <h1>Como funciona Jukebox</h1>

            </div>
            <div class="contenedor_tarjeta_como_funciona_contenedores">
                <div>
                    <i class='bx bxs-hand-up'></i>
                    <p> Escribe el codigo para ingresar a una sala </p>
                </div>
                <div>
                    <i class='bx bx-check'></i>
                    <p> Sugiere la musica de tu agrado ¡Hey, pero que sea de ambiente! ¿no? </p>
                </div>
                <div>
                    <i class='bx bxs-music'></i>
                    <p> Espera tu turno </p>
                </div>
                <div>
                    <i class='bx bxs-cool'></i>
                    <p> Bailar, bailar y bailar ¿Que mas da? </p>
                </div>
            </div>
        </section>
        <section class="Descripcion_sobre_nosotros" id="Descripcion_sobre_nosotros">
            <div class="Descripcion_sobre_nosotros_contenedores_wave">
                <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                    <path d="M-168.50,245.56 C371.55,-105.79 328.66,186.50 527.31,68.39 L512.07,229.81 L-20.08,166.82 Z" style="stroke: none; fill: #24284a;"></path>
                </svg>
            </div>
            <div class="Descripcion_sobre_nosotros_contenedores_uno">
                <h1>Acerca de Nosotros</h1>
            </div>
            <div class="Descripcion_sobre_nosotros_contenedores_dos">
                <p>Jukebox es una aplicación que permite a los usuarios
                    unirse a una sala mediante un código, sugerir canciones
                    y disfrutar de una cola de reproducción compartida.
                    Cada sesión crea una experiencia musical colectiva e interactiva,
                    haciendo que la música sea más divertida y social.</p>
            </div>
            <div class="Descripcion_sobre_nosotros_contenedores_tres">
                <img src="app/views/fotos/about_us_2.svg" alt="about_us_1">
                <img src="app/views/fotos/about_us_1.svg" alt="about_us_1">
                <img src="app/views/fotos/about_us_3.svg" alt="about_us_1">
                <img src="app/views/fotos/about_us_4.svg" alt="about_us_1">
            </div>
        </section>
        <footer>
            <div class="politicayprivacidad">
                <a href="#">Politica de privacidad</a>
                <a href="#">Terminos & condiciones</a>
            </div>
            <div class="redes_sociales">


                <a href="#"><i class='bx bxl-facebook'></i></a>

                <a href="#"><i class='bx bx-x'></i></a>

                <a href="#"><i class='bx bxl-instagram'></i></a>


            </div>
            <div class="derechos">
                Jukebox 2024. Todos los derechos reservados &copy;
            </div>

        </footer>
    </main>
</body>

</html>
<?php 
    include 'db.php';
    include 'header.php';
?>
    <section class="hero">
        <div class="contenido_hero">
            <h2>Conceptos sobre informática</h2>
            <div class="informacion">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home" width="80" height="80" viewBox="0 0 24 24" stroke-width="1.5" stroke="#b392ac" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                </svg>
                <p>Informate correctamente</p>
            </div>
            <a class="boton" href="tutoriales.php">Tutoriales</a>
        </div>
    </section>
<main class="contenedor sombra">
        <h2>Mi contenido</h2>
        <div class="micontenido">
            <section class="contenido">
                <h3>Cursos</h3>
                <div class="icono">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-certificate" width="84" height="84" viewBox="0 0 24 24" stroke-width="1.5" stroke="#edede9" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M15 15m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                        <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5" />
                        <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73" />
                        <path d="M6 9l12 0" />
                        <path d="M6 12l3 0" />
                        <path d="M6 15l2 0" />
                    </svg>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </section>
            <section class="contenido">
                <h3>Infromación</h3>
                <div class="icono">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-info-hexagon" width="84" height="84" viewBox="0 0 24 24" stroke-width="1.5" stroke="#edede9" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M19.875 6.27c.7 .398 1.13 1.143 1.125 1.948v7.284c0 .809 -.443 1.555 -1.158 1.948l-6.75 4.27a2.269 2.269 0 0 1 -2.184 0l-6.75 -4.27a2.225 2.225 0 0 1 -1.158 -1.948v-7.285c0 -.809 .443 -1.554 1.158 -1.947l6.75 -3.98a2.33 2.33 0 0 1 2.25 0l6.75 3.98h-.033z" />
                        <path d="M12 9h.01" />
                        <path d="M11 12h1v4h1" />
                    </svg>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </section>
            <section class="contenido">
                <h3>Contacto</h3>
                <div class="icono">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-article" width="84" height="84" viewBox="0 0 24 24" stroke-width="1.5" stroke="#edede9" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                        <path d="M7 8h10" />
                        <path d="M7 12h10" />
                        <path d="M7 16h10" />
                    </svg>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </section>
        </div><!--micontenido-->
    </main>
<?php
    include 'footer.php';
?>
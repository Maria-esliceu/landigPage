<?php 
    include 'header.php';
    if(isset($_GET['status'])){
        $status=$_GET['status'];
        $msg=$_GET['msg'];
        ?>


        <div class="contenedor <?php echo $status; ?>">
            <p><?php echo $msg ?></p>
        </div>


        <?php
    }
?>
<h1>Contactanos</h1>
<main>
    <section>
        <form class="formulario" action="create_contact.php" method="POST">
            <fieldset>
                <legend>Conáctame enviando tus datos</legend>
                <div class="contenedor-campos">
                    <div class="campo">
                        <div>
                            <label for="">Nombre:</label>
                            <input class="input-text" type="text" name="nombre" placeholder="Tu Nombre">
                        </div>
                    </div>
                    <div class="campo">
                        <div>
                            <label for="">Telefono:</label>
                            <input class="input-text" type="tel" name="telefono" id="" placeholder="Tu Teléfono">
                        </div>
                    </div>
                    <div class="campo">
                        <div>
                            <label for="">Correo:</label>
                            <input class="input-text" type="email" name="correo" id="" placeholder="Tu Correo">
                        </div>
                    </div>
                    <div class="campo">
                        <div>
                            <label for="">Mensaje:</label>
                            <textarea class="input-text" name="mensaje" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div>
                        <input class="boton" type="submit" value="Enviar">
                    </div>
                </div><!--contenedor-campos-->
            </fieldset>
        </form>
    </section>
</main>
<?php
    include 'footer.php';
?>
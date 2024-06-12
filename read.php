<?php 
    include 'db.php';
    include 'header.php';
    $sql = "SELECT id, nombre, telefono, correo, mensaje FROM contactos";
    $result=$conn->query($sql);
?>

<h1>Mensajes</h1>

<div class="contenedor listado">
    <div class="fila cabecera">
        <div class="campoCabecera">
            Id
        </div>
        <div class="campoCabecera">
            Nombre
        </div>
        <div class="campoCabecera">
            Telefono
        </div>
        <div class="campoCabecera">
            Correo
        </div>
        <div class="campoCabecera">
            Mensaje
        </div>
        <div class="campoCabecera">
            Acción
        </div>
    </div>
    <?php
        $num=0;
        while($row = $result->fetch_assoc()){
            $num++;
            $paridad="impar";
            if($num%2==0){
                $paridad="par";
            }
            //PARIDAT ME INDICA SI LA FILA ES PAR O IMPAR
            ?>
            <div class="fila <?=$paridad?>">
                    <div class="campo"><?=$row['id']?></div>
                    <div class="campo"><?=$row['nombre']?></div>
                    <div class="campo"><?=$row['telefono']?></div>
                    <div class="campo"><?=$row['correo']?></div>
                    <div class="campo"><?=$row['mensaje']?></div>
                    <div class="btn-borrar">
                    <a href="borrar.php?id=<?=$row['id']?>"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash-x" alt="Borrar" width="30" height="30" viewBox="0 0 24 24" stroke-width="2" stroke="#670546" fill="none" stroke-linecap="round" stroke-linejoin="round" alt="BORRAR">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M4 7h16" />
                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                            <path d="M10 12l4 4m0 -4l-4 4" />
                            </svg> </a>
                    </div>
            </div>

        <?php
        }

        if($num==0){
            echo "No hay registros para mostrar";
        }
    ?>
</div>

<?php
    include 'footer.php';
?>
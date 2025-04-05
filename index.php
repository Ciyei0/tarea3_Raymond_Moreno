<?php
require('libreria/motor.php');
Plantilla::aplicar();
?>

<h1>Torneo de Dragon Ball</h1>
<p>Bienvenido a la competencia más grande de todas</p>
<p>Para poder participar en el torneo, debes registrarte</p>

<div class="d-derecha">
    <a href="registro.php" class="boton">Registrarme</a>
    <a href="panel.php" class="boton">Estadisticas</a>
</div>

<table>
    <thead>
        <tr>
            <th>Foto</th>
            <th>Nombre Completo</th>
            <th>Edad</th>
            <th>Signo Zodiacal</th>
            <th>Habilidades</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Aquí se debe hacer un ciclo para mostrar todos los peleadores
        $datos = listar_registro();

        foreach ($datos as $peleador) {
            echo "
            <tr>
                <td>";
        
            // Verificar si la URL de la foto es válida antes de mostrarla
            if (!empty($peleador->foto) && filter_var($peleador->foto, FILTER_VALIDATE_URL)) {
                echo "<img src='{$peleador->foto}' alt='{$peleador->nombre}' width='100'>";
            } else {
                // Imagen por defecto en caso de que la URL no sea válida
                echo "<img src='https://t2.genius.com/unsafe/242x242/https%3A%2F%2Fimages.genius.com%2F524db5b93d60b9968f9096f6f85cf3a7.640x640x1.jpg' alt='Imagen no disponible' width='100'>";
            }
        
            echo "</td>
            
                <td>{$peleador->nombre} {$peleador->apellido}</td>
                <td>{$peleador->edad()}</td>
                <td>{$peleador->signo_zodiacal()}</td>
                <td>{$peleador->n_habilidades()}</td>
                <td><a href='registro.php?codigo={$peleador->identificacion}'>Detalles</a></td>
            </tr>";
        }
        



        ?>
        <!-- <tr>
            <td><img src="img/goku.jpg" alt="Goku" width="100"></td>
            <td>Goku</td>
            <td>30</td>
            <td><a href="registro.php">Detalles</a></td>
        </tr> -->
    </tbody>
</table>

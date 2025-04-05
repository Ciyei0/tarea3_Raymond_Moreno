<?php
require('libreria/motor.php');

$peleador = new peleador();
$peleador->identificacion = $_POST['identificacion'];
$peleador->nombre = $_POST['nombre'];
$peleador->apellido = $_POST['apellido'];
$peleador->fechaNacimiento = $_POST['fechaNacimiento'];
$peleador->foto = isset($_POST['foto']) ? $_POST['foto'] : null;


foreach ($_POST['habilidades']['nombre'] as $i => $habilidad) {
    $h = new habilidad();
    $h->nombre = $habilidad;
    $h->tipo = $_POST['habilidades']['tipo'][$i];
    $h->nivel = $_POST['habilidades']['nivel'][$i];
    $peleador->habilidades[] = $h;

}


guardar_datos($peleador->identificacion, $peleador);

Plantilla::aplicar();
?>

<h1>Datos guardados</h1>
<p>Los datos han sido guardados correctamente</p>

<div>
    <a href="index.php" class="boton">Volver</a>
</div>

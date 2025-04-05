<?php
function my_input($nombre, $label, $valor = "", $extra = []) {
    $type = "text";  
    extract($extra);

    return <<<HTML
    <div>
        <label for="{$nombre}">{$label}</label>
        <input type="{$type}" name="{$nombre}" id="{$nombre}" value="{$valor}" required>
    </div>
HTML;
}




    function guardar_datos($codigo, $datos) {
        if (!is_dir("datos")) {
            mkdir("datos");
        }
    
        file_put_contents("datos/{$codigo}.dat", serialize($datos));
    }

    function cargar_datos($codigo){
        $datos = file_get_contents("datos/{$codigo}.dat");
        return unserialize($datos);
    }

    function listar_registro() {
        $archivos = scandir("datos");
        $peleadores = [];
    
        foreach ($archivos as $archivo) {
            if (!is_file("datos/{$archivo}")) {
                continue;
            }
            $peleadores[] = cargar_datos(str_replace(".dat", "", $archivo));
        }
    
        return $peleadores;
    }
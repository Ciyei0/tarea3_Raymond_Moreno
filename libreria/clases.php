<?php

class habilidad{
    var $nombre = "";
    var $tipo = "";
    var $nivel = 0;
}




class peleador {
    var $identificacion = "";
    var $nombre = "";
    var $apellido = "";
    var $fechaNacimiento = "";
    var $foto = "";
    var $habilidades = [];

    function edad() {
        $fechaNacimiento = strtotime($this->fechaNacimiento);
        $fecha_actual = time();
        $edad = ($fecha_actual - $fechaNacimiento) / (60*60*24*365.25);
        return floor($edad);
    }


    function n_habilidades() {
        return count($this->habilidades);
    }

    function signo_zodiacal() {
        $fecha = explode("-", $this->fechaNacimiento);
        $dia = $fecha[2];
        $mes = $fecha[1];

        $signos = [
            "Capricornio" => [1, 19],
            "Acuario" => [1, 18],
            "Piscis" => [2, 20],
            "Aries" => [3, 20],
            "Tauro" => [4, 20],
            "Géminis" => [5, 21],
            "Cáncer" => [6, 22],
            "Leo" => [7, 22],
            "Virgo" => [8, 22],
            "Libra" => [9, 22],
            "Escorpio" => [10, 22],
            "Sagitario" => [11, 21],
            "Capricornio" => [12, 21]
        ];

        foreach ($signos as $signo => $fechas) {
            if (($mes == $fechas[0] && $dia >= $fechas[1]) || ($mes == $fechas[0] + 1 && $dia <= $fechas[1])) {
                return $signo;
            }
        }
    }
    

}
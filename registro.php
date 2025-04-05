<?php
require('libreria/motor.php');
Plantilla::aplicar();




$p = new peleador();
if (isset($_GET['codigo'])) {
    $p = cargar_datos($_GET['codigo']);

    if(!$p) {
        echo "<h1>Registro no encontrado</h1>";
        echo "<p>El registro solicitado no existe</p>";
        echo "<div><a href='index.php' class='boton'>Volver</a></div>";
        exit;
    }
}


?>

<h1>Registro de Peleadores</h1>
<div class="registro">
    <form action="guardar.php" method="post">
        <?php
            echo my_input("identificacion", "Identificación", "$p->identificacion", ["requiered" => "required"]); 
            echo my_input("nombre", "Nombre", "$p->nombre", ["requiered" => "required"]);
            echo my_input("apellido", "Apellido", "$p->apellido", ["requiered" => "required"]);
            echo my_input("fechaNacimiento", "Fecha de Nacimiento", "$p->fechaNacimiento", ["type" => "date"]);
            echo my_input("foto", "Foto (URL de imagen)", "$p->foto", ["type" => "url"]);
        ?>

        <h3>Habilidades</h3>

        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Nivel</th>
                    <button type="button" onclick="agregarHabilidad()">Agregar</button>
                </tr>
            </thead>
            <tbody id="tdhabilidades">
                <?php
                    foreach ($p->habilidades as $habilidad) {
                        echo "<tr>
                            <td><input type='text' name='habilidades[]' value='{$habilidad->nombre}' required></td>
                            <td><input type='text' name='tipos[]' value='{$habilidad->tipo}' required></td>
                            <td><input type='number' name='niveles[]' value='{$habilidad->nivel}' required></td>
                            <td><button type='button' onclick='quitarFila(this)'>Eliminar</button></td>
                        </tr>";
                    }
                ?>
            </tbody>
        </table>



            
        <button type="submit" class="boton">Guardar</button>
    </form>
</div>




<script>
function agregarHabilidad() {
    var tr = document.createElement("tr");

    // Primera columna (nombre de la habilidad)
    var td1 = document.createElement("td");
    var input1 = document.createElement("input");
    input1.type = "text";
    input1.name = "habilidades[]";
    input1.required = true;
    td1.appendChild(input1);
    tr.appendChild(td1);

    // Segunda columna (tipo de habilidad)
    var td2 = document.createElement("td");
    var input2 = document.createElement("input");
    input2.type = "text";
    input2.name = "tipos[]";
    input2.required = true;
    td2.appendChild(input2);
    tr.appendChild(td2);

    // Tercera columna (nivel de habilidad)
    var td3 = document.createElement("td");
    var input3 = document.createElement("input");
    input3.type = "number";
    input3.name = "niveles[]";
    input3.required = true;
    td3.appendChild(input3);
    tr.appendChild(td3);

    var td4 = document.createElement("td");
    var button = document.createElement("button");
    button.innerHTML = "Eliminar";
    button.type = "button";
    button.setAttribute("onclick", "quitarFila(this)");
    td4.appendChild(button);
    tr.appendChild(td4);
    

    
    document.getElementById("tdhabilidades").appendChild(tr);
}

function quitarFila(boton) {
    if (confirm("¿Está seguro de eliminar esta habilidad?")) {
        boton.parentElement.parentElement.remove();
    }
}


</script>
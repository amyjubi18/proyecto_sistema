<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="/estilos/css/registro.css">
</head>
<body>
    <div class="menu">
        <a href="index.html">Inicio</a>
        <a href="#">Acceso</a>
        <a href="registro.html">Registrar</a>
        <a href="#">Modificar</a>
        <a href="#">Eliminar</a>
    </div>
    <main>
        <div class="contenedor_3">
            <form action="registro_estudiante_bd.php" method="POST" class="formulario-registro">
                <h1>Registro</h1>
                <!-- <label for="id_estudiantes">ID     </label>
                <input type="text" id="id_estudiantes" name="id_estudiantes" style="text-align:right;">
                <br> -->
                <label for="matricula">Matricula</label>
                <input type="text" name="matricula">
                <br>
                <label for="nombre_est">Nombre</label>
                <input type="text" name="nombre_est">
                <br>
                
                <label for="apellido_est">Apellido</label>
                <input type="text" name="apellido_est">
                <br>
                <label for="cedula_est">Cédula</label>
                <input type="text" name="cedula_est">
                <br>
                <!-- <label for="turno">Turno</label>
                <select name="turno" id="turno" >
                    <optgroup label="Seleccione el turno:">
                    <option value="">Diurno</option>
                    <option value="">Nocturno</option>
                    </optgroup>
                </select> -->
                    <br>
                    
                
                <label for="carrera"> Carrera</label>
                <select name="carrera" id="carrera" >
                <?php
                include("conexion.php");
                $consulta = "SELECT * FROM carrera";
                $ejecutar = mysqli_query($conexion, $consulta);
                while($row = mysqli_fetch_array($ejecutar)){
                    $cod_carrera = $row['cod_carerra'];
                    $carreras =$row['carreras'];
                }
                ?>
                <option value = "<?php echo $cod_carrera." ".$carreras;?>"><?php echo $cod_carrera." ".$carreras; ?></option>

                            
                            

                </select> 
                <br>
                <!-- <button>Registrar</button> -->
                <input type="submit" value="Registrar" >
            
        </div>
    </main>

</body>
</html>
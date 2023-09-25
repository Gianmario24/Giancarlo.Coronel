<?php
$user = "root"
$pass = ""
$host = "localhost"


$connection = mysqli_connect($host, $user, $pass);


$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$contraseña = $_POST['contraseña'];
$telefono = $_POST['telefono'];


if (!$connection)
        {
        echo "No se pudo conectar al servidor" . mysql_error();
        }

    else
        {
            echo "<b><h3>Nos conectamos con el servidor</h3></b>";
        }

        $datab = "formulario_tarea";
        $db = mysqli_select_db($connection,$datab);

        if (!$db)
        {
        echo "No se encontro la tabla";
        }

        else
        {
        echo "<h3>Tabla seleccionada</h3>";
        }

        $instruccion_SQL = "INSERT INTO tabla(nombre,apellido,email,contraseña,telefono)
                            VALUES ('$nombre','$apellido','$email','$contraseña','$telefono')";

        $resultado = mysqli_query($connection,$instruccion_SQL);

        $consulta = "SELECT * FROM tabla";





?>


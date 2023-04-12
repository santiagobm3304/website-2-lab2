<?php
    include("conexion.php");

    $con = conexion();

    $con = "SELECT idpersona, documento, nombre, apellido, diraccion, celular FROM persona";
    $resultado = pg_query($con, $sql);

    pg_close($db);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Listado de usuarios</title>
</head>
<body>
    <h1>Listado de usuarios</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
        </tr>
        <?php while ($fila = pg_fetch_assoc($resultado)) { ?>
            <tr>
                <td><?php echo $fila['idpersona']; ?></td>
                <td><?php echo $fila['documento']; ?></td>
                <td><?php echo $fila['nombre']; ?></td>
                <td><?php echo $fila['apellido']; ?></td>
                <td><?php echo $fila['direccion']; ?></td>
                <td><?php echo $fila['celular']; ?></td>
            </tr>
        <?php } ?>
    </table>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD</title>
<link rel="stylesheet" href="estilos.css">
</head>
<body>
    <?php
        include 'conexion.php';
        $sql="select * from productos";
        $resultado=mysqli_query($con,$sql);
    ?>
    <div>
        <a href="agregar.php">Nuevo</a>
        <table border width="50% " heigth="50%">
            <thead>
                <tr>
                    <th>CODIGO</th>
                    <th>PRODUCTO</th>
                    <th>CANTIDAD</th>
                    <th>OPCIONES</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($filas=mysqli_fetch_assoc($resultado)){
                ?>
                <tr>
                    <td><?php echo $filas['codigo'] ?></td>
                    <td><?php echo $filas['nombre'] ?></td>
                    <td><?php echo $filas['cantidad'] ?></td>
                    <td>
                        <a href = "editar.php?codigo=<?php echo $filas['codigo'] ?>">Editar</a>
                        <a href = "eliminar.php?codigo=<?php echo $filas['codigo'] ?>">Eliminar</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
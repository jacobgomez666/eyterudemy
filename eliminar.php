<?php

require_once("database.php");
require_once("funciones.php");

    // Llamamos a la funcion funcions.php
     if(isset($_POST["submit"])){
        del_user($_POST["id_usuario"]);

    }
?>

<!DOCTYPE html>

<html>
<head>
  <title>Eliminar</title>
</head>

<body>
  <h2>ELiminr usuarios</h2>

  <a href="agregar.php">Registrar</a>
  <a href="listar.php">Listar</a>
  <a href="editar.php">Editar</a>
  <a href="eliminar.php">Eliminar</a>
  <br><br>

  
<form action="" method="POST">
    <input type=" text" name="usuario" placeholder="usuario">

    <br>

    <input type="text" name="password" placeholder="password">
    <br>
    <select name="id_usuario" id="">
        <?php
            listarId_usuarios();
        ?>

    </select>
    <input type="submit" name="submit" value="Eliminar">
    


</form>

</body>

</html>

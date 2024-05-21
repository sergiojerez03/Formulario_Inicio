<?php

include("conexion.php");

if(isset($_post['registrar'])) {
    if(
        strlen($_post['name'])>=1 &&
        strlen($_post['email'])>=1 &&
        strlen($_post['Dirección'])>=1 &&
        strlen($_post['telefono'])>=1 &&
        strlen($_post['contraseña'])>=1
        ) {
            $name= trim($_post['nombre']);
            $email= trim($_post['email']);
            $Dirección= trim($_post['Dirección']);
            $Telefono= trim($_post['Telefono']);
            $Contraseña= trim($_post['Contraseña']);
            $fecha = date()d/m/y;
            $consulta = "INSERT INTO datos(nombre, email, Dirección, Telefono, Contraseña, fecha)
                VALUES('$name','$email','$Dirección','$telefono','$contraseña','$fecha')";
            $resultado = mysqli_connect($conex,$consulta);
            if($resultado){
            ?>
                <h3 class="exito">Tu resgistro se a completado</h3>
            <?php
            }else{
            ?>
                <h3 class="error">Ocurrio un error</h3>
            <?php
            }
        }else{
            ?>
            <h3 class="error">Llena todos los campos</h3>
            <?php
        }
}

?>
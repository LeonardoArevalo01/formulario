<?php
include("conexion.php");

if(isset($_POST['send'])) {
    if(
        strlen($_POST['name']) >= 1 && 
        strlen($_POST['password']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['phone']) >= 1
    ) {
        $name = trim($_POST['name']);
        $password = trim($_POST['password']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        $fecha = date("d/m/y");
        $consulta = "INSERT INTO datos(nombre, contraseña, email, telefono, fecha) 
                    VALUES ('$name','$password','$email','$phone','$fecha')";
        $resultado = mysqli_query($conex, $consulta);
        if($resultado) {
            ?>
                <h3 class="success">Tu registro se ha completado</h3>
            <?php
        } else {
            ?>
                <h3 class="error">Tu registro NO se ha completado, verifica tus datos e intentalo de nuevo</h3>
            <?php
        }
    } else {
        ?>
        <h3 class="error">Llena todos los campos</h3>
        <?php 
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <form method="post" autocomplete="off">
    <h2>Bienvenido a SchedulEase</h2>
    <div class="input-group">
        <div class="input-container">
            <input type="text" name="name" placeholder="Nombre">
            <i class="fa-solid fa-user" ></i>
        </div>

        <div class="input-container">
            <input type="password" name="password" placeholder="Contraseña">
            <i class="fa-solid fa-lock" ></i>
        </div>

        <div class="input-container">
            <input type="email" name="email" placeholder="Correo electronico">
            <i class="fa-solid fa-envelope" ></i>
        </div>

        <div class="input-container">
            <input type="tel" name="phone" placeholder="Teléfono">
            <i class="fa-solid fa-phone" ></i>
        </div>

        <a href="#">Términos y condiciones</a>
        <input type="submit" name="send" class="btn" value="Enviar">
    </div>
   </form>

    <?php
        include("send.php");
    ?>    

</body>
</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="shortcut icon" href=".../IMG/Logo-oscuro.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="http://localhost/swGIL/CSS/styleRecCons.css">
    <title>Recuperar Contraseña</title>
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="rec-con col-5" id="bx-rec-corr">
                <h3>Recuperar Contraseña</h3>
                <form action="#" class="d-flex flex-column">
                    <label for="correo">Correo Electrónico</label>
                    <input type="email" name="correo" id="correo" required onkeyup="leerCorreo('correo', 'span1-corr', 'span2-corr')">
                    <p>Enviar codigo a: <span class="res-corr" id="span1-corr">No hay Correo</span></p>
                    <input class="inp-link" id="btn-envcod" type="submit" value="Enviar">
                </form>
                <input type="button" value="Volver" class="inp-link" id="btn-vol1">
                <img id="logo" src="../IMG/Logo-oscuro.png" alt="Logo GIL">
            </div>
    </div>
</body>
<script src="../JS/script.js"></script>

</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Crea tu cuenta</title>
        <link rel="stylesheet" href="css/Registro.css">
        <link rel="icon" href="css/IconoPagina.ico">
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&family=Mukta:wght@300&family=Oswald:wght@500&family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
    </head>
    <body>
        <form method="post" action= "Extensiones/CrearCuenta.php" class="formulario">
            <h1>Registrate</h1>
            <p>Nombre de Usuario:</p>
            <input type="text" placeholder="Ingrese el nombre de usuario"  name="txtNuevoUsuario">
            <p>Correo electronico:<p>
            <input type="text" placeholder="Ingrese su correo electronico"  name="txtCorreoNuevo">
            <p>Contraseña:</p>
            <input type="password" placeholder="Ingrese su contraseña"  name="txtContraNueva">
            <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
            <input type="submit" value="Registrar">
        </form>
    </body>
</html>


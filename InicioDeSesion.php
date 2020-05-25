<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio de Sesión</title>
        <link rel="stylesheet" href="css/InicioSesion.css">
        <link rel="icon" href="css/IconoPagina.ico">
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&family=Mukta:wght@300&family=Oswald:wght@500&family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
    </head>
    <body>
        <form class="formulario" action="Extensiones/Verificar.php" method="post">
            <h1>Inicia sesión!</h1>
            <div class="contenedor">
                <input type="text" placeholder="Ingrese su nombre de usuario" name= "txtUsuario">  
                <input type="password" placeholder="Ingrese su contraseña" name= "txtContra">
                <br>
                <input type="submit" value="Ingresar" >

                <p>¿No tienes una cuenta? <a href="FormCrearCuenta.php">Registrate</a></p>
            </div>
        </form>

    </body>
</html>
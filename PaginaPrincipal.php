<?php
    session_start();

    $Usuario = $_SESSION['username'];

    if(!isset($Usuario))
    {
        header("location: Index.php");
    }
    else
    {
        if($Usuario == 'IdleMars')
        {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/PaginaPrincipal.css">
    <title>Cursos "Lideres"</title>
    <link rel="icon" href="css/IconoPagina.ico">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&family=Oswald:wght@500&family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <img class="logo" src="css/Imagenes/LogoCNegro.png" alt="logo" width="45px" height="37px"> 
            <nav>
                <ul class="NavBar">
                    <li><a href="Extensiones/Admin.php">Aumentar Inventario</a></li>
                    <li><a href="Carrito.php">Carrito de compras</a></li>
                    <li><a href="Extensiones/Comercial.php">Comercial</a></li>
                    <li><a href="Extensiones/CerrarSesion.php">Cerrar Sesión</a></li>
                </ul>
            </nav>
    </header>
    <hr>
    <div class="Seccion_Videos" >
        <video src="Comerciales/Cancion.mp4" controls preLoad loop></video>
    </div>
    <section class="Seccion_Productos">
            <h1 class="Titulo">Nuestros Productos</h1>
            <br><br>
            <div class="Contenedor_Curso">
                <form action="Extensiones/AgregarCarrito1.php" method="post">
                    <div class="Producto_Curso">
                        <h3 class="T_Producto">Curso de liderazgo</h3>
                        <br>
                            <p class="Texto_Serv_Precio">Precio: $500</p>
                            <img src="css/Imagenes/curso.png" alt="" class="Img_Producto" height="150px">
                            <p class="Texto_Serv_Descripcion">Descripción: Si quieres convertirte en un gran lider este curso es para ti. Con profesores expertos.</p>
                            <input type="number" min="1" max="1" name="Cant_Curso">
                            <br>
                            <br>
                            <input type="submit" value="Agregar al carrito">
                    </div>
                </form>
            </div>

            <div class="Contenedor_Libro">
                <div class="Producto_Libro">
                    <h3 class="T_Producto">Libro de liderazgo profesional</h3>
                    <br>
                    <form action="Extensiones/AgregarCarrito2.php" method="post">
                        <p class="Texto_Serv_Precio">Precio: $400</p>
                        <img src="css/Imagenes/libro1.png" alt="" class="Img_Producto" height="150px">
                        <p class="Texto_Serv_Descripcion">Descripción: El mejor libro auto-ayuda de liderazgo</p>
                        <input type="number" min="1" max="5" name="Cant_Libro_Prof">
                        <br>
                        <br>
                        <input type="submit" value="Agregar al carrito">
                    </form>
                </div>

                <div class="Producto_Sudadera">
                    <h3 class="T_Producto">Sudadera</h3>
                    <br>
                    <form action="Extensiones/AgregarCarrito3.php" method="post">
                        <p class="Texto_Serv_Precio">Precio: $250</p>
                        <img src="css/Imagenes/camisa.jpg" alt="" class="Img_Producto" height="200px">
                        <p class="Texto_Serv_Descripcion">Descripción: Sudadera con un gran estilo y supercomoda</p>
                        <input type="number" min="1" max="5" name="Cant_Sudadera">
                        <br>
                        <br>
                        <input type="submit" value="Agregar al carrito">
                    </form>
                </div>

                <div class="Producto_Libro">
                    <h3 class="T_Producto">Libro de liderazgo Básico</h3>
                    <br>
                    <form action="Extensiones/AgregarCarrito4.php" method="post">
                        <p class="Texto_Serv_Precio">Precio: $300</p>
                        <img src="css/Imagenes/libro2.png" alt="" class="Img_Producto" height="150px">
                        <p class="Texto_Serv_Descripcion">Descripción: Libro auto-ayuda Básico </p>
                        <input type="number" min="1" max="5" name="Cant_Libro_Nor">
                        <br>
                        <br>
                        <input type="submit" value="Agregar al carrito">
                    </form>
                </div>
            </div>
        </section>
        <footer>
            <div class="footer">
                <h1 class="titulo-footer"> Equipo 1 | 6DM | Curso de liderazgo</h1>
            </div>
        </footer>
</body>
</html>

<?php
        }
        else
        {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/PaginaPrincipal.css">
    <title>Cursos "Lideres"</title>
    <link rel="icon" href="css/IconoPagina.ico">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&family=Oswald:wght@500&family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <img class="logo" src="css/Imagenes/LogoCNegro.png" alt="logo" width="45px" height="37px"> 
            <nav>
                <ul class="NavBar">
                    <li><a href="Extensiones/Errores.php">Reportar un problema</a></li>
                    <li><a href="Carrito.php">Carrito de compras</a></li>
                    <li><a href="Extensiones/Comercial.php">Comercial</a></li>
                    <li><a href="Extensiones/CerrarSesion.php">Cerrar Sesión</a></li>
                </ul>
            </nav>
    </header>
    <hr>
    <div class="Seccion_Videos" >
        <video src="Comerciales/Cancion.mp4" controls preLoad loop></video>
    </div>
    <section class="Seccion_Productos">
            <h1 class="Titulo">Nuestros Productos</h1>
            <br><br>
            <div class="Contenedor_Curso">
                <form action="Extensiones/AgregarCarrito1.php" method="post">
                    <div class="Producto_Curso">
                        <h3 class="T_Producto">Curso de liderazgo</h3>
                        <br>
                            <p class="Texto_Serv_Precio">Precio: $500</p>
                            <img src="css/Imagenes/curso.png" alt="" class="Img_Producto" height="150px">
                            <p class="Texto_Serv_Descripcion">Descripción: Si quieres convertirte en un gran lider este curso es para ti. Con profesores expertos.</p>
                            <input type="number" min="1" max="1" name="Cant_Curso">
                            <br>
                            <br>
                            <input type="submit" value="Agregar al carrito">
                    </div>
                </form>
            </div>

            <div class="Contenedor_Libro">
                <div class="Producto_Libro">
                    <h3 class="T_Producto">Libro de liderazgo profesional</h3>
                    <br>
                    <form action="Extensiones/AgregarCarrito2.php" method="post">
                        <p class="Texto_Serv_Precio">Precio: $400</p>
                        <img src="css/Imagenes/libro1.png" alt="" class="Img_Producto" height="150px">
                        <p class="Texto_Serv_Descripcion">Descripción: El mejor libro auto-ayuda de liderazgo</p>
                        <input type="number" min="1" max="5" name="Cant_Libro_Prof">
                        <br>
                        <br>
                        <input type="submit" value="Agregar al carrito">
                    </form>
                </div>

                <div class="Producto_Sudadera">
                    <h3 class="T_Producto">Sudadera</h3>
                    <br>
                    <form action="Extensiones/AgregarCarrito3.php" method="post">
                        <p class="Texto_Serv_Precio">Precio: $250</p>
                        <img src="css/Imagenes/camisa.jpg" alt="" class="Img_Producto" height="200px">
                        <p class="Texto_Serv_Descripcion">Descripción: Sudadera con un gran estilo y supercomoda</p>
                        <input type="number" min="1" max="5" name="Cant_Sudadera">
                        <br>
                        <br>
                        <input type="submit" value="Agregar al carrito">
                    </form>
                </div>

                <div class="Producto_Libro">
                    <h3 class="T_Producto">Libro de liderazgo Básico</h3>
                    <br>
                    <form action="Extensiones/AgregarCarrito4.php" method="post">
                        <p class="Texto_Serv_Precio">Precio: $300</p>
                        <img src="css/Imagenes/libro2.png" alt="" class="Img_Producto" height="150px">
                        <p class="Texto_Serv_Descripcion">Descripción: Libro auto-ayuda Básico </p>
                        <input type="number" min="1" max="5" name="Cant_Libro_Nor">
                        <br>
                        <br>
                        <input type="submit" value="Agregar al carrito">
                    </form>
                </div>
            </div>
        </section>
        <footer>
            <div class="footer">
                <h1 class="titulo-footer"> Equipo 1 | 6DM | Curso de liderazgo</h1>
            </div>
        </footer>

<?php
        }
    }
?>

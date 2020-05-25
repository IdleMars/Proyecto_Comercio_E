<?php
    require 'Extensiones/CBaseDeDatos.php';
    session_start();

    $Usuario = $_SESSION['username'];

    if(!isset($Usuario))
    {
        header("location: Index.php");
    }
    else
    {
        $Consulta = "SELECT Saldo from usuarios where Usuario='$Usuario'";
        $Saldo_C = mysqli_query($Conexion, $Consulta);

        if ($Saldo_U = mysqli_fetch_array($Saldo_C))
        {
            $Saldo_Usuario = $Saldo_U['Saldo'];
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de compras</title>
    <link rel="icon" href="css/tienda1.ico">
    <link rel="stylesheet" href="css/Carrito.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&family=Oswald:wght@500&family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <img class="logo" src="css/Imagenes/LogoCBlanco.png" alt="logo" width="45px" height="37px"> 
            <nav>
                <ul class="NavBar">
                    <li><a href="PaginaPrincipal.php">Regresar al catalogo</a></li>
                </ul>
            </nav>
    </header>

    <h1> <?php echo "Carro de compras de $Usuario"; ?> </h1>
    <h2> <?php echo "Tu saldo: $".$Saldo_Usuario; ?> </h2>
    <br>
    <div class= "Form_Saldo">
        <form action="Extensiones/AgregarSaldo.php" method="post">
            <p class="txtSaldo">Número de tarjeta de credito (falso):</p> <input type="password" name="txtTarjeta"><br>
            <p class="txtSaldo">Saldo a agregar a su cuenta:</p> <input type="text" name="txtSaldo"><br>
            <input type="submit" value="Agregar saldo" name="btn_Agregar_S">
        </form>
    </div>
    <div class="Registros">
        <div class="Titulo_Reg">
                <ul class="Titulos_Nav">
                    <li><p class="Registros1">Producto</p></li>
                    <li><p class="Registros1">Cantidad de productos</p></li>
                    <li><p class="Registros1">Precio por cantidad de productos</p></li>
                </ul>
        </div>
        <?php
            $ContadorTotal = 0;
            $ConsultaP = "SELECT Producto,Cant_Productos,Cant_A_Pagar,Comprado from pedidos WHERE Usuario = '$Usuario'";
            $Pedido = mysqli_query($Conexion, $ConsultaP);
        ?>
        <div class="RegistrosDesplegados">
            <?php
                while ($P = mysqli_fetch_array($Pedido))
                {
                    $Producto = $P['Producto'];
                    $Cantidad_P = $P['Cant_Productos'];
                    $Cantidad_Pagar = $P['Cant_A_Pagar'];
                    if($P['Comprado'] == 0)
                    {
            ?>
                        <div class="Titulo_Reg2">
                            <ul class="Titulos_Nav2">
                                <li><p><?php echo $Producto; ?></p></li>
                                <li><p><?php echo $Cantidad_P; ?></p></li>
                                <li><p><?php echo $Cantidad_Pagar; ?></p></li>
                            </ul>
                        </div>
                        <br>
            <?php
                        $ContadorTotal = $ContadorTotal + $P['Cant_A_Pagar'];
                        
                    }
                }
                if($ContadorTotal != 0)
                {
                    echo "<br><br>";
                    echo "<p>Total a pagar: $ContadorTotal<br></p>";
                }
                else
                {
                    echo "<p>No tienes nada que pagar :) Vuelva al catalogo a seguir comprando.</p>";
                }
            ?>
        </div>
        <br><br>
        <form action="Extensiones/Compra.php" method="post">
            <input type="submit" value="Confirmar compra">
        </form>
    </div>
    <footer>
            <div class="footer">
                <h1 class="titulo-footer">Este es un proyecto escolar, por lo tanto, en realidad no estas comprando nada.</h1>
            </div>
        </footer>
</body>
</html>

<?php
        
    }
?>
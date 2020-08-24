<?php
include('logica.php');

?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/carrito.css">
    <script src="https://kit.fontawesome.com/ef50293cd6.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://www.paypal.com/sdk/js?client-id=sb"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <title>ia-Store</title>
</head>

<body>
    <div class="principal">
        <div class="barraS">

            <div class="h1">
                <img class="defi" src="img/definitiva3.png" alt="">
            </div>
            <div class="menu">

                <ul>
                    <li><a class="icon" href="index.php"><i class="fas fa-home"></i> Inicio</a></li>
                    <li><a class="icon" href="productos.php"><i class="fas fa-shopping-basket"></i> Productos</a></li>
                    <li><a class="icon" href="acerca.php"><i class="fas fa-info-circle"></i> Acerca</a></li>
                    <li><a class="icon" href="login.php"><i class="fas fa-sign-in-alt"></i> Iniciar Sesión</a></li>
                    <li><a class="icon" href="carrito.php"><i class="fas fa-shopping-cart"></i>Carrito</a></li>
                </ul>
                <?php

if (isset($_SESSION['nombre'])) {
   echo "  <div class=usu><img class=lo src=img/usuarios.png> $_SESSION[nombre] <a href=logout.php>Cerrar Sesión</a></div>";
}else{
  echo  "<div class=usu> <img class=lo src=img/usuarios.png> usuario</div>";
}

?>
            </div>

        </div>
        <?php
if (isset($_SESSION['carrito'])) {
?>
        <div class="tabla">

            <table>
                <thead>
                    <tr>
                        <th>imagen</th>
                        <th>articulo</th>
                        <th>precio</th>
                        <th>cantidad</th>
                        <th>P.total</th>
                        <th>eliminar </th>
                    </tr>
                </thead>
                <?php
               
 if (isset($_SESSION['carrito'])) {
    $arregloC=$_SESSION['carrito'];
    $total=0;
                    for ($i=0; $i < count($arregloC); $i++) { 
                      $total=$total+($arregloC[$i]['Cantidad']*$arregloC[$i]['Precio']); 
                    
                ?>
                <tr>
                    <td><img src=<?php echo $arregloC[$i]['Imagen'] ?> alt=<?php echo $arregloC[$i]['Nombre'] ?>> </td>
                    <td><?php echo $arregloC[$i]['Nombre'] ?></td>
                    <td><?php echo $arregloC[$i]['Precio'] ?>$</td>
                    <td><?php echo $arregloC[$i]['Cantidad'] ?></td>
                    <td><?php echo $arregloC[$i]['Cantidad']*$arregloC[$i]['Precio'] ?>$</td>
                    <td> <a href="carrito.php" class="btndelet" data-id="<?php echo $arregloC[$i]['Id']; ?>"><i class="fas fa-times "></i></a> </td>

                </tr>

                <?php
                }}
                ?>

            </table>
            <?php
            $itbms=$total*0.07;
            $subtotal=$total+$itbms;
if (isset($_SESSION['carrito'])) {
 

?>

        </div>
        <div class="jumbotron text-center">
            <h1 class="display-4"> ¡Paso Final!</h1>
            <hr class="my-4">
            <p class="lead"> Estas a punto de pagar con Paypal la cantidad de:
                <h4><?php echo "<pre>ITBMS:$$itbms 
SubTotal:$$total
 Total:$$subtotal 
</pre>"?> </h4>
                <script src="Ac7OHl8-sXLDDpaHCerYEqtBd_RvmpgFoS6qPO9uLx9bgDHSFLILGlsCaKwfNKDSGsvbdMsFl8uADxG1">
                    // Replace YOUR_SB_CLIENT_ID with your sandbox client ID
                </script>

                <div id="paypal-button-container"></div>

                <!-- Add the checkout buttons, set up the order and approve the order -->
                <script>
                    paypal.Buttons({
                        createOrder: function (data, actions) {
                            return actions.order.create({
                                purchase_units: [{
                                    amount: {
                                        // total: '<?php echo $subtotal?>', currency:'USD'
                                        value: '0.01'
                                    }
                                }]
                            });
                        },
                        onApprove: function (data, actions) {
                            return actions.order.capture().then(function (details) {
                                alert('Transaction completed by ' + details.payer.name.given_name);
                            });
                        }
                    }).render('#paypal-button-container'); // Display payment options on your web page
                </script>
            </p>

            <p>Ante cualquier inconveniente con el envio o entrega de los productos contactenos </br>
                <strong>(contacto : DomoticsGadgets@gmail.com)</strong>
            </p>
        </div>
        <?php
    }
    ?>
      <?php } else
echo" <div class=no> NO HAY PRODUCTOS EN EL CARRITO :(</div>";
?>
        <footer>
            <div class="iconos">
                <a href="https://www.instagram.com/?hl=es-la"><img src="img/insta.png" alt="instagram"></a>
                <a href=""><img src="img/whatsapp.png" alt="whatsapp"></a>
                <a href="https://www.youtube.com/"><img src="img/youtube.png" alt="youtube"></a>
                <a href="https://www.google.com/gmail/"> <img src="img/gmail.png" alt="gmail"></a>
            </div>
        </footer>
    </div>
  
    <script>
    $(document).ready(function(){
        $(".btndelet").click(function(event){
            event.preventDefault();
            var id = $(this).data('id');
           var boton=$(this);

            $.ajax({
                method:'POST',
                url:'./eliminar.php',
                data:{
                id:id
                }
            }).done(function(respuesta){
                boton.parent('td').parent('tr').remove();
                location.reload();

            });


        });

    });

</script>

</body>
</html>
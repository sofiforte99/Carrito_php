<?php
require_once "Producto.php"; //Incluye y evaluá el archivo + produce error fatal si falla + evalua si ya ha sido incluido
require_once "Carrito.php";
require_once "ItemCarrito.php"; 


$producto_1 = new Producto(1, "Resident Evil village",8999,10); //$producto_1 es un objeto. Instancia de clase Producto
$producto_2 = new Producto(2, "Demon's Souls: Remake", 11499, 10);
$producto_3 = new Producto (3, "Sackboy: A big Adventure", 7999,10);
$producto_4 = new Producto (4, "Mortal Kombat 11: Ultimate Edition", 8499,10);
$producto_5 = new Producto (5, "Marvel's Spider-Man: Miles Morales - Ultimate Launch", 11699,10);
$producto_6 = new Producto (6, "Destruction All Stars", 9999,10);
$producto_7 = new Producto (7, "Goodfall", 11499,10);
$producto_8 = new Producto (8, "Lego Star Wars: The Skywalker Saga", 8499,10);
$producto_9 = new Producto (9, "Call of Duty Black Ops: Cold War");
$producto_10 = new Producto (10, "Devil May Cry 5: Definitive Edition");


$carrito = new Carrito(); //carrito como objeto de Carrito clase
$item_carrito = $carrito->añadirProducto($producto_1, cantidad, 1); // a la variable item carrito le ingreso el producto 
$item_carrito_2 = $producto2->añadirCesta($carrito, cantidad, 1); // agrego producto2 a la cesta carrito

echo "El número de productos en la cesta: ".PHP_EOL;

echo $carrito->getCantidadTotal().PHP_EOL; // Imprime la cantidad de productos en la cesta

echo $carrito->getSumaTotal().PHP_EOL; //imprime el total de productos
$carrito->removerProducto($producto_2);
$item_carrito_2->incrementarCantidad(); //suma producto 
$item_carrito_2->incrementarCantidad();

echo "El número de items en el carrito es: ".PHP_EOL;

echo $carrito->getCantidadTotal().PHP_EOL; //imprime el total de productos

echo "El precio total es: ".PHP_EOL;

echo $carrito->getSumaTotal().PHP_EOL; //obtiene el precio total


//EOL--> FIN DE LINEA







?>
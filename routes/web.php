<?php

use Illuminate\Support\Facades\Route;

Route::get('/php-basico', function () {  
    echo "<h1>Hola Mundo desde PHP</h1>";  
    $nombre = "Camilo";   
    $apellido = "Rojas";
    $nombre_completo = $nombre . " " . $apellido;
    $age = rand(10, 54);
    $height = 1.85;
    $isLogin = (bool) rand(0, 1);
    echo "<h2>Mi nombre es: $nombre_completo</h2>";

    echo "<h1> ************************ ESTRUCTURAS DE CONTROL ************************* </h1>";

    $message = "Soy $nombre_completo, tengo $age años, mido $height metros y mi estado de login es: " . ($isLogin ? "Activo" : "Inactivo");
    echo "<p>$message</p>";

    if ($age >= 18) {
        $message = "<p> Soy mayor de edad </p>";
        echo $message;  
    } else {
        $message = "<p> Soy menor de edad </p>";
        echo $message;
    }
    $message .= " ". ($isLogin ? "Estoy logueado" : "No estoy logueado");

    echo "<h1> ************************ FUNCIONES EN PHP ************************* </h1>";

    echo printUserInfo($nombre_completo, $age);

    $productoNames = ["Laptop", "Smartphone", "Tablet", "Monitor", "Teclado", 25, true, "Cámara", "Auriculares", "Altavoces"];
    $teclado = [
    "nombre" => "Teclado Mecánico",
    "precio" => 99.99,
    "stock" => 50,
    'distribuciones' => ["Amazon", "eBay", "MercadoLibre"],
    ];

    $teclado["marca"] = "Logitech";
    echo $teclado["nombre"];

    foreach ($productoNames as $item)
        echo "<p>Producto: $item</p>";
});

function printUserInfo(string $name, int $age) {
    return "El nombre del usuario es $name y tiene $age años.";
}

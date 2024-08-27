<?php 
require_once __DIR__ . '/../includes/app.php';


use MVC\Router;
use Controllers\AppController;
use Controllers\VentaController;

$router = new Router();
$router->setBaseURL('/' . $_ENV['APP_NAME']);

$router->get('/', [AppController::class,'index']);

// VENTA GRAFICAS
$router->get('/ventas/grafica', [VentaController::class,'index']);
$router->get('/API/venta/estadistica', [VentaController::class,'detalleVentaAPI']);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();

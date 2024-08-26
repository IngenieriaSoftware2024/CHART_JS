<?php

namespace Controllers;

use MVC\Router;

class VentaController {
    public static function index(Router $router){
        $router->render('ventas/grafica', []);
    }

}
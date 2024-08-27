<?php

namespace Controllers;

use Exception;
use Model\Producto;
use MVC\Router;

class VentaController {
    public static function index(Router $router){
        $router->render('ventas/grafica', []);
    }

    public static function detalleVentaAPI(){

        try {
            $sql = "SELECT cliente_nombre, COUNT(venta_id) AS compras FROM clientes 
                    INNER JOIN ventas  ON cliente_id = venta_cliente
                    GROUP BY cliente_id
                    ORDER BY compras DESC;";

            $datos = Producto::fetchArray($sql);
    
            echo json_encode($datos);

        } catch (Exception $e) {
            echo json_encode([
                'detalle' => $e->getMessage(),
                'mensaje' => 'Error al realizar la consulta',
                'codigo' => 0  
            ]);
        }

    }


}
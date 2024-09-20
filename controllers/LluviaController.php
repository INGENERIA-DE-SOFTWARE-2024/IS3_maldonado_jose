<?php

namespace Controllers;

use Exception;
use Model\Usuario;
use MVC\Router;

class LluviaController {
    public static function index(Router $router)
    {   
        isAuth();
        hasPermission(['COMANDO', 'D5', 'ADMINSTRADOR']);
        $router->render('lluvias/index', [], 'layouts/menu');
    }
    public static function index2(Router $router)
    {   
        isAuth();
        hasPermission(['COMANDO', 'D5', 'ADMINISTRADOR']);
        $router->render('lluvias/estadistica', [], 'layouts/menu');
    }
    public static function index3(Router $router)
    {   
        isAuth();
        hasPermission(['COMANDO', 'D5', 'ADMINISTRADOR']);
        $router->render('lluvias/mapa', [], 'layouts/menu');
    }

    public static function BuscarAPI()
    {
        try {
 
            $usuarioRol = $_SESSION['user']['rol_nombre_ct']; 
            $usuarioId = $_SESSION['user']['usu_id']; 
    
    
            if ($usuarioRol === 'ADMINSTRADOR') {
                $sql = "SELECT usu_nombre, lluv_dependencia, lluv_departamento, lluv_critica, lluv_radio, lluv_fecha,
                            lluv_situacion
                            FROM lluvias, usuario 
                            WHERE lluv_comando = usu_id;";
            } else {
                $sql = "SELECT usu_nombre, lluv_dependencia, lluv_fecha, lluv_situacion 
                from lluvias INNER JOIN usuario ON usu_id = lluv_comando 
                WHERE lluv_comando = $usuarioId";
            }
            $lluvias = Usuario::fetchArray($sql);
            http_response_code(200);
            echo json_encode($lluvias);
        } catch (Exception $e) {
            http_response_code(500);
            echo json_encode([
                'codigo' => 0,
                'mensaje' => 'Error al buscar lluvias',
                'detalle' => $e->getMessage(),
            ]);
        }
    }

    public static function estadisticaLluviasAPI(){

        try {
            $sql = "SELECT usu_nombre, COUNT(lluv_comando) AS lluvias
                    FROM lluvias
                    INNER JOIN usuario ON usu_id = lluv_comando
                    GROUP BY usu_nombre
                    ORDER BY lluvias DESC;";

            $datos = Usuario::fetchArray($sql);
    
            echo json_encode($datos);

        } catch (Exception $e) {
            echo json_encode([
                'detalle' => $e->getMessage(),
                'mensaje' => 'Error al realizar la consulta',
                'codigo' => 0  
            ]);
        }

    }

    public static function mapaAPI()
{
    $sql = "SELECT * FROM lluvias";

    try {
        $lluvias = Usuario::fetchArray($sql);
        echo json_encode($lluvias);
        exit;
    } catch (Exception $e) {
        return [];
    }
}

}



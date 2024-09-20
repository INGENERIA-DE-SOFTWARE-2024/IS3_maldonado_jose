<?php 
require_once __DIR__ . '/../includes/app.php';


use MVC\Router;
use Controllers\AppController;
use Controllers\LluviaController;
use Controllers\LoginController;

$router = new Router();
$router->setBaseURL('/' . $_ENV['APP_NAME']);

$router->get('/', [LoginController::class,'index']);
$router->post('/API/login', [LoginController::class,'loginAPI']);
$router->get('/inicio', [LoginController::class, 'inicio']);
$router->get('/logout', [LoginController::class, 'logout']);


$router->get('/lluvias', [LluviaController::class,'index']);
$router->get('/API/lluvias/buscar', [LluviaController::class,'buscarAPI']);
$router->get('/estadistica', [LluviaController::class,'index2']);
$router->get('/API/lluvias/estadistica', [LluviaController::class,'estadisticaLluviasAPI']);
$router->get('/mapa', [LluviaController::class,'index3']);
$router->get('/API/lluvias/mapa', [LluviaController::class,'mapaAPI']);






// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();

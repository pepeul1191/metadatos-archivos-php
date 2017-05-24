<?php

require 'app/vendor/autoload.php';

header('x-powered-by: PHP');
header('Server: Ubuntu');
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Content-type: text/html; charset=UTF-8');

Configuration::init( realpath(dirname(__FILE__)) . '/app/', 'http://localhost:5001/', realpath(dirname(__FILE__) . '/db/' . 'db_accesos.db'));

Flight::route('GET /', array('Controller_Index','index'));
Flight::route('GET /error/404', array('Controller_Error','error_404'));

Flight::route('POST /archivo/guardar', array('Controller_Archivo','guardar'));
Flight::route('GET /extension/obtener_id', array('Controller_Extension','obtener_id'));

/*
Flight::map('notFound', function(){
	Flight::redirect('/error/404');
});
*/
Flight::start();

?>

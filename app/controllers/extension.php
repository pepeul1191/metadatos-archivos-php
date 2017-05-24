<?php

class Controller_Extension extends Controller
{
    public static function obtener_id()
    {
      $mime_extension = Flight::request()->query['mime_extension'];
      $extensiones = Controller::load_model('extensiones');
      $rpta = '';

      try {
          $rpta = $extensiones->obtener_id($mime_extension)[0]['id'];
      } catch (Exception $e) {
          $rpta = 'Excepción capturada: '.  $e->getMessage();
      }

      echo $rpta;
    }
}

?>

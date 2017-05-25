<?php

class Controller_Archivo extends Controller
{
    public static function guardar()
    {
      $data = json_decode(Flight::request()->query['data']);
      $archivos = Controller::load_model('archivos');
      $rpta = '';

      try {
          $id_generado = $archivos->guardar($data->{'nombre'}, $data->{'descripcion'}, $data->{'nombre_generado'}, $data->{'carpeta'}, $data->{'extension_id'});
          $rpta = $id_generado;
      } catch (Exception $e) {
          $rpta = 'Excepción capturada: '.  $e->getMessage();
      }

      echo $rpta;
    }

  public static function obtener_ruta($id)
  {
    $archivos = Controller::load_model('archivos');
    $rs = $archivos->obtener_ruta($id);
    if (empty($rs)) {
      echo '';
    }else{
      echo json_encode($rs[0]);
    }
  }
}

?>
